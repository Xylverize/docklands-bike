<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function index(){
		if ($this->session->userdata('role')=='Administrator')
		{
			$checkthis['aktif'] = 'on';
			$this->load->view('V_Admin/dashboard',$checkthis);
		}
		else
		{
			$this->load->view('login');
		}		
	}

	//REDIRECT USER ROLE
	//PROFILE
	public function profile(){
		if ($this->session->userdata('role')=='Administrator'){
	    	$this->load->view('V_Admin/profile');
		}else{
			$this->load->view('login');
		}
	}
	//DATA USERS
	public function users() 
	{
		if ($this->session->userdata('role')=='Administrator'){
		$kode='all';
		$this->load->model('model_user');
    	$data_users['datausers']=$this->model_user->tampil_data_users($kode);  
    	$this->load->view('V_Admin/data-users',$data_users);
		}else{
			$this->load->view('login');
		}
	}
	//PRODUCT
	public function product() 
	{
		if ($this->session->userdata('role')=='Administrator'){
		$kode='all';
		$this->load->model('model_product');
    	$data_product['dataproduct']=$this->model_product->tampil_data_product($kode);  
    	$this->load->view('V_Admin/product',$data_product);
		}else{
			$this->load->view('login');
		}
	}

	public function orders(){
		if ($this->session->userdata('role')=='Administrator'){
			$kode='all';
			$this->load->model('model_product');
	    	$data_transaksi['datatransaksi']=$this->model_product->tampil_data_transaksi($kode);  
	    	$this->load->view('V_Admin/transaksi',$data_transaksi);
		}else{
			$this->load->view('login');
		}
	}

	public function detail_orders($kode_transaksi){
		$this->load->model('model_product');
		$data_product['dataproduct1']= $this->model_product->tampil_detail_transaksi($kode_transaksi)->row();
		$data_product['dataproduct']= $this->model_product->tampil_detail_transaksi($kode_transaksi)->result();
		$this->load->view('V_Admin/detailorders',$data_product);
	}

	//FUNGSI SAVE
	//SAVE PRODUCT
	public function simpan_product() {
		if (isset($_POST['product_sumbit'])){
			$this->load->model('model_product');
			$upload = $this->model_product->update_image_product();			
			
			if($upload['result'] == "success"){
				$this->model_product->save_product($upload);
				redirect('admin/product');
			}else{
				$data['message'] = $upload['error'];
			}
		}
    }

	//FUNGSI EDIT
	//EDIT FOTO
	public function do_upload() {
			$upload = $this->model_user->update_image();			
			
			if($upload['result'] == "success"){
				$this->model_user->update_gambar_db($upload);
				redirect('admin/profile');
			}else{
				$data['message'] = $upload['error'];
			}
    }
	//EDIT PROFILE
	public function proses_edit_profile(){
		$data['nama'] = $this->input->post('nama');
		$data['jenis_kelamin'] = $this->input->post('jenis_kelamin');
		$data['telp'] = $this->input->post('telp');
		$data['alamat'] = $this->input->post('alamat');
		$data['email'] = $this->input->post('email');
		$id_profile=$_SESSION['id'];
		$this->model_user->update_profile($id_profile, $data);
		redirect('admin/profile');
	}

	public function approve_orders($kode_transaksi){
		$this->load->model('model_product');
		$data['status'] = 1;
		$this->model_product->update_approve($kode_transaksi,$data);
		redirect('admin/orders');
	}
	public function pending_orders($kode_transaksi){
		$this->load->model('model_product');
		$data['status'] = 0;
		$this->model_product->update_approve($kode_transaksi,$data);
		redirect('admin/orders');
	}

	//HAPUS DATA 
	public function delete_users($id){
		$this->model_user->delete_users($id);
		redirect('admin/users');
	}
	public function delete_product($id_product){
		$this->load->model('model_product');
		$this->model_product->delete_product($id_product);
		redirect('admin/product');
	}
	public function delete_orders($kode_transaksi){
		$this->load->model('model_product');
		$this->model_product->delete_orders($kode_transaksi);
		redirect('admin/orders');
	}
	
}


?>