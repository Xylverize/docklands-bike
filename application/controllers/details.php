<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Details extends CI_Controller {

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
	public function index($id_product)
	{
		$this->load->model('model_product');
		$kode = 'all';
		$data_product['allproduct']=$this->model_product->tampil_data_product($kode);  
		$data_product['dataproduct']=$this->model_product->get_product_id($id_product)->row();  
		$this->load->view('product-detail',$data_product);
	}
}
