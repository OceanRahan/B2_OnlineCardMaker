<?php
class shipping_action extends CI_Model{
	
	function _construct() {
		
		parent::_construct;
		
	}
	function setinfo($info,$num){
		
	/*	$this->db->query("CREATE TABLE if not exists `shippinginfo` (
				`OrderID` int(20),
				`DeliveryName` varchar,
				`Address`varchar,
				`tel_no` int(20),
                `noofcard` int(20),
				`deliverytype` varchar
                ) ");*/
		
	/*	$this->db->query("CREATE TABLE if not exists `shippinginfo` (
			`OrderID`  int(11)
			`DName`  varchar(10),
			`Address`  varchar(20),
			`DeliveryType`  varchar(20)
			)");*/
		
		$this->db->query("CREATE TABLE if not exists `shipping` (
			`SName`  varchar(20),
			`DelName`  varchar(20),
			`Phone`  int(20),
			`Address`  varchar(20),
			`CardNo`  int(11),
			`OrderID` int(11)
             )");
		
		
         $ship = array(
				
			
				
				'SName'=>$info[0],
				'DelName'=>$info[4],
         		'Phone' =>$info[2],
         		'Address'=>$info[1],
         		'CardNo'=>$info[3],
         		'OrderID'=>$num
				
		);
		//$this->db->insert('shipping',$ship);
		$this->db->select('*');
		$this->db->from('shipping');
		$this->db->where('OrderID', $num);
		$query = $this->db->get();
		$result = $query->result();
		if($query->num_rows() ==0){
			$this->db->insert('shipping',$ship);
		}
		else{
			
			$this->db->where('OrderID', $num);
			$this->db->delete('shipping');
			$this->db->insert('shipping',$ship);
			//$query = $this->db->get();
			//$this->db->insert('carddesign',$dat);
		}
		
	
		
		
	}
	
}
?>


	
	

