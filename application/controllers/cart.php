<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cart extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct(){
        parent::__construct();
        $this->load->library('cart');
        $this->load->model('model_product');
    }

    public function index(){
    	$kode = 'all';
        $data_product['dataproduct']=$this->model_product->tampil_data_product($kode);
        $this->load->view('home',$data_product);
    }

    public function add(){
    		$data = array(
	    		'id' => $this->input->post('id_product'),
	    		'name' => $this->input->post('nama_product'),
	    		'price' => $this->input->post('harga'),
	    		'gambar' => $this->input->post('gambar'),
	    		'qty' => $this->input->post('quantity'),
	    		);
	    	$this->cart->insert($data);
	    	echo $this->show();
    }

	public function remove(){
    	$data = array(
            'rowid' => $this->input->post('row_id'), 
            'qty' => 0, 
        );
        $this->cart->update($data);
        echo $this->show();
    }

    public function current_page(){
    	$id = $this->input->post('id_product');
    	redirect('details/index/'.$id);
    }

    public function show(){
    	$output = '';
        $no = 0;
        foreach ($this->cart->contents() as $items) {
            $no++;
            $output .='
                
            ';
        }
        $output .= '
            
        ';
        return $output;
    }

    public function load_cart(){
    	echo $this->show();
    }

}
