<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Member extends CI_Controller {
	public function index()
	{
		if ($this->session->userdata('role')=='Member')
		{
			$kode='all';
			$this->load->model('model_product');
	    	$data_product['dataproduct']=$this->model_product->tampil_data_product($kode);  
	    	$this->load->view('home',$data_product);
		}
		else
		{
			$this->load->view('login');
		}
	}
}