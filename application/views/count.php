<?php 
	$no = $dataproduct->hit_count;
	$no = $no + 1;
	$data['hit_count'] = $no;
	$this->db->where('id_product',$dataproduct->id_product);
	$this->db->update('product',$data);
?>