<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Checkout extends CI_Controller {

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
		if ($this->session->userdata('role')=='Member') {
			$this->load->model('model_user');
			$kode = 'all';
			$this->load->model('model_product');
			$data_product['dataproduct']=$this->model_product->tampil_data_product($kode);  
			$this->load->view('checkout',$data_product);
		}else if ($this->session->userdata('role')=='Administrator') {
			redirect('admin');
		}else{
			$this->load->view('register');
		}
	}

	public function transaksi(){
		if ($this->session->userdata('role')=='Member') {
			if(isset($_POST['checkout_submit'])){
				date_default_timezone_set('Asia/Jakarta');
				$q = $this->db->query("SELECT MAX(RIGHT(kode_transaksi,4)) AS kd_max FROM transaksi");
		        $kd = "";
		        if($q->num_rows()>0){
		            foreach($q->result() as $k){
		                $tmp = ((int)$k->kd_max)+1;
		                $kd = sprintf("%04s", $tmp);
		            }
		        }else{
		            $kd = "0001";
		        }
		        $kode_ts = 'AMT-'.date('d-').$kd;
				$data['kode_transaksi'] = $kode_ts;
				$data['id_user'] = $this->session->userdata('id');
				$data['nama_user'] = $this->session->userdata('nama');
				$data['kota'] = $this->input->post('kota');
				$data['kode_pos'] = $this->input->post('kodepos');
				$data['pesan'] = nl2br($this->input->post('pesan'));
				$data['tanggal'] = date('Y-m-d  h:i:s');
				$data['status'] = 'Pending';
				$data['total_bayar'] = $this->cart->total()+$kd;
		        if($this->cart->total() != 0){
					$this->db->insert('transaksi', $data);
				}
				foreach($this->cart->contents() as $items):
					$data1['kode_transaksi'] = $kode_ts;
					$data1['id_product'] = $items['id'];
					$data1['qty'] = $items['qty'];
					$data1['harga'] = $items['price'];
					$data1['total'] = $items['subtotal'];
					$this->db->insert('transaksi_detail',$data1);
				endforeach;
				$this->load->view('pembayaran',$data);
				$this->cart->destroy();
			}else{
				redirect('welcome');
			}
		}else{
			redirect('auth');
		}
	}
}
