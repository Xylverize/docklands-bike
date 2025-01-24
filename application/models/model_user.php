<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class model_user extends CI_Model
{
	public function cek_user($data){
		$query = $this->db->get_where('users',$data);
		return $query;
	}
	
	//USERS
	//TAMPIL DATA USERS
	public function tampil_data_users($kode)
    {
		if ($kode=='all'){
			$hasil=$this->db->get('users');	
		}else{
			$this->db->where('id',$kode);
			$hasil=$this->db->get('users');
		}
        return $hasil->result();
    }
	//FUNGSI UPLOAD GAMBAR
	function update_image(){
		$config['upload_path'] = './images/profile/';
		$config['allowed_types'] = 'jpg|png|jpeg|gif';
		$config['max_size']	= '2048';
		$config['remove_space'] = TRUE;
	
		$this->load->library('upload', $config);
		if($this->upload->do_upload('image')){
			$return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
			return $return;
		}else{
			$return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
			return $return;
		}
	}
	// FUNGSI UNTUK MENGUPDATE FOTO DIDATABASE
	public function update_gambar_db($upload){
		$data = array(
			'image' => $upload['file']['file_name']
		);
		$this->db->update('users', $data);
	}
	//FUNGSI UNTUK UPDATE PROFILE USERS
	function update_profile($id_profile, $data){
		$this->db->where('id', $id_profile);
		$this->db->update('users', $data);
	}
	//DELETE USERS BY ID
	function delete_users($id){
		$this->db->where('id', $id);
		$this->db->delete('users');
	}

	public function regis($data){
		$this->db->insert('users',$data);
	}
	//END FUNCTION USERS
	
}