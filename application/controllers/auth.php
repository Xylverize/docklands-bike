<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends CI_Controller {

	
	public function index()
	{
		$this->load->view('login');
	}

	public function register(){
		$this->load->view('register');
	}

	public function cek_login()
	{
		$data = array('username' => $this->input->post('username') , 
					  'password' => md5($this->input->post('password'))
					  );
		$hasil = $this->model_user->cek_user($data);
		if ($hasil->num_rows() == 1){
			foreach($hasil->result() as $sess)
            {
              $sess_data['logged_in'] = 'Sudah Login';
              $sess_data['id'] = $sess->id;
              $sess_data['nama'] = $sess->nama;
              $sess_data['email'] = $sess->email;
              $sess_data['kota'] = $sess->kota;
              $sess_data['kode_pos'] = $sess->kode_pos;
              $sess_data['alamat'] = $sess->alamat;
              $sess_data['telp'] = $sess->telp;
              $sess_data['image'] = $sess->image;
              $sess_data['username'] = $sess->username;
              $sess_data['role'] = $sess->role;
              $this->session->set_userdata($sess_data);
            }
			if ($this->session->userdata('role')=='Administrator'){
				redirect('admin');
			}
			elseif ($this->session->userdata('role')=='Member'){
				redirect('member');
			}
		}
		else
		{
			echo " <script>alert('Gagal Login: Cek username , password!');history.go(-1);</script>";
		}
		
	}

	public function logout() {
		$this->session->sess_destroy();
		redirect('welcome');
	} 

}