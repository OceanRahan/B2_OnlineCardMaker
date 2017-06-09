<?PHP
session_start();

class action_style extends CI_Model {
	
function _construct() {
	
	parent::_construct;
	
}
function setstyle($style, $num){
	
	/*$this->db->query("CREATE TABLE if not exists `carddesign` (
				`OrderID` int(20),
				`StyleNo` int(20)
				
				) ");*/
	
	//$p=$_SESSION["favcolor"];
	
	
	
		$dat = array(
				'OrderID'=>$num,
			    'StyleNo'=>$style
			
	);
		
		$this->db->select('*');
		$this->db->from('carddesign');
		$this->db->where('OrderID', $num);
		$query = $this->db->get();
		$result = $query->result(); 
		if($query->num_rows() ==0){
			$this->db->insert('carddesign',$dat);
		}
		else{
			
			$this->db->where('OrderID', $num);
			$this->db->delete('carddesign');
			$this->db->insert('carddesign',$dat);
			//$query = $this->db->get();
			//$this->db->insert('carddesign',$dat);
		}
	
	
	
	

	
}

}
?>
