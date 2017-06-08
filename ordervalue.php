<?php
class ordervalue extends CI_Model{
	
	function _construct() {
		parent::_construct;
		
	}
	function getprice($n){
		$d=array('orderID'=>$n);
		$this->db->select("materialprice");
		$this->db->where($d);
		$this->db->from('materialchoose');
		$query = $this->db->get();
		return $query->result();
	
		
	}
	function getno ($n){
		$d=array('orderID'=>$n);
		$this->db->select("CardNo");
		$this->db->where($d);
		$this->db->from('shipping');
		$query = $this->db->get();
		return $query->result();
		
	}
	
	
}
?>
