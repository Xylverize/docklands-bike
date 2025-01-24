<?php 
$query = $this->db->query('SELECT * FROM users');$row = $query->row();$jumlah = $query->num_rows();
$query2 = $this->db->query('SELECT * FROM product');$jumlah2 = $query2->num_rows();
?>