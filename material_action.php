<?php
class material_action extends CI_Model {
	
	function _construct() {
		
		parent::_construct;
		
	}
	function setmaterial($material,$num){
		
		$this->db->query("CREATE TABLE if not exists `materialchoose` (
				`OrderID` int(20),
				`materialprice` int(20)
				
				) ");
		
		
		
		$mate = array(
				
				
				'OrderID'=>$num,
				'materialprice'=>$material
		);
		//$this->db->insert('materialchoose',$mate);
		$this->db->select('*');
		$this->db->from('materialchoose');
		$this->db->where('OrderID', $num);
		$query = $this->db->get();
		$result = $query->result();
		if($query->num_rows() ==0){
			$this->db->insert('materialchoose',$mate);
		}
		else{
			
			$this->db->where('OrderID', $num);
			$this->db->delete('materialchoose');
			$this->db->insert('materialchoose',$mate);
			//$query = $this->db->get();
			//$this->db->insert('carddesign',$dat);
		}
		
		
		
		
		
		
	}
	
}
?>
