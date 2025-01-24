<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Register extends CI_Controller {

	
	public function index()
	{
		$username = $this->input->post('username');
		$sql = $this->db->query("SELECT username FROM users where username='$username'");
		$cek_username = $sql->num_rows();
		if(isset($_POST['submit'])){
			if($this->input->post('password') == $this->input->post('repassword')){
				if($cek_username > 0){
					echo " <script>alert('Username sudah terpakai!');history.go(-1);</script>";	
				}else{
					$data = array (
						'nama' => $this->input->post('nama'),
						'alamat' => $this->input->post('alamat'),
						'email' => $this->input->post('email'),
						'username' => $this->input->post('username'),
						'password' => md5($this->input->post('password')),
						'role' => 'Member',
						'image' => 'default-user.jpg'
						);
					$this->model_user->regis($data);
					echo $this->show_success();
				}
			}else{
				echo " <script>alert('Gagal Register: Confirm Password Salah!');history.go(-1);</script>";
			}
		}else{
			$this->load->view('register');
		}
	}

	public function show_success(){
		$this->load->view('complete');
	}
}