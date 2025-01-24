<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	public function index()
	{
		$this->load->model('model_user');
		$kode = 'all';
		$this->load->model('model_product');
		$data_product['dataproduct']=$this->model_product->tampil_data_product($kode);  
		$this->load->view('home',$data_product);
	}

	public function search(){
		if (isset($_POST['search_submit'])){
			$this->load->model('model_product');
			$kode = 'all';
			$nama = $this->input->post('search_home');
			$data['dataproduct']=$this->model_product->tampil_data_product($kode);
			$data['nama']= $nama;
			$data['search']=$this->model_product->get_product_nama($nama);
			$this->load->view('search',$data);
		}
	}
}
