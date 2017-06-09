<?php
class confirmation extends CI_Model{
	
	function _construct() {
		parent::_construct;
		
	}
	function getconfirm($n){
		$d=array('orderID'=>$n);
		$this->db->select("SName");
		$this->db->where($d);
		$this->db->from('shipping');
		$query = $this->db->get();
		return $query->result();
	
		
	}
	
	
}
?>

