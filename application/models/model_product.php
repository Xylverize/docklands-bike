<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class model_product extends CI_Model
{
	public function cek_user($data){
		$query = $this->db->get_where('users',$data);
		return $query;
	}
	
	//PRODUCT
	//TAMPIL DATA PRODUCT
	public function tampil_data_product($kode)
    {
		if ($kode=='all'){
			$hasil=$this->db->get('product');	
		}else{
			$this->db->where('id_product',$kode);
			$hasil=$this->db->get('product');
		}
        return $hasil->result();
    }

    public function tampil_data_transaksi($kode)
    {
		if ($kode=='all'){
			$hasil=$this->db->get('transaksi');	
		}else{
			$this->db->where('kode_transaksi',$kode);
			$hasil=$this->db->get('transaksi');
		}
        return $hasil->result();
    }

    public function tampil_detail_transaksi($kode_transaksi){
    	$this->db->select('*');
		$this->db->from('transaksi_detail');
		$this->db->where('kode_transaksi', $kode_transaksi);
		return $this->db->get();
    }

    //SELECT BY ID PRODUCT
    public function get_product_id($id_product){
	$this->db->select('*');
	$this->db->from('product');
	$this->db->where('id_product', $id_product);
	return $this->db->get();
	}

	public function get_product_nama($nama){
			$this->db->select('*');
			$this->db->from('product');
			$this->db->like('nama_product',$nama);
			// $this->db->or_like('harga',$nama);
			return $this->db->get()->result();
	}

	//FUNGSI UPLOAD GAMBAR
	function update_image_product(){
		$config['upload_path'] = './images/product/';
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
	// FUNGSI UNTUK SAVE PRODUCT
	public function save_product($upload){
		$data = array(
			'nama_product' => $this->input->post('nama_product'),
			'deskripsi'   	=> nl2br($this->input->post('deskripsi')),
			'kategori'   	=> $this->input->post('kategori'),
			'status_stok'   	=> $this->input->post('status_stok'),
			'stok'   	=> $this->input->post('stok'),
			'harga'   	=> $this->input->post('harga'),
			'image' => $upload['file']['file_name']
		);
		$this->db->insert('product', $data);
	}

	//FUNGSI UNTUK UPDATE PROFILE USERS
	function update_profile($id_profile, $data){
		$this->db->where('id', $id_profile);
		$this->db->update('users', $data);
	}

	//UPDATE APPROVE ORDERS BY KODE TRANSAKSI
	function update_approve($kode_transaksi,$data){
		$this->db->where('kode_transaksi', $kode_transaksi);
		$this->db->update('transaksi',$data);
	}
	//END FUNCTION ORDERS

	//DELETE USERS BY ID
	function delete_product($id_product){
		$this->db->where('id_product', $id_product);
		$this->db->delete('product');
	}
	//END FUNCTION PRODUCT
	
	//DELETE ORDERS BY KODE TRANSAKSI
	function delete_orders($kode_transaksi){
		$this->db->where('kode_transaksi', $kode_transaksi);
		$this->db->delete('transaksi');
	}
	//END FUNCTION ORDERS
}