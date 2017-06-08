<?PHP

class action_page extends CI_Model{
	
function _construct() {
	parent::_construct;
	
}
function setname($username,$num){
	
	$this->db->query("CREATE TABLE if not exists `userinfo` (
			`Name`  varchar(10),
			`CompanyName`  varchar(20),
			`Designation`  varchar(20),
			`Resident`  varchar(20),
			`CompanyAddress`  varchar(20),
			`PhoneNo`  int(11),
			`OrderID` int(11)
             )");
	
	
	
	
	
		$data = array(
				
		
			'Name' => $username['name'],
			'CompanyName' =>$username['company name'],
			'Designation' =>$username['Designation'],
			'Resident' =>$username['Resident'],
			'CompanyAddress' =>$username['Company Address'],
			'PhoneNo' =>$username['Phone no'],
			'OrderID'=>$num
	);
	//$this->db->insert('userinfo',$data);
		$this->db->select('*');
		$this->db->from('userinfo');
		$this->db->where('OrderID', $num);
		$query = $this->db->get();
		$result = $query->result();
		if($query->num_rows() ==0){
			$this->db->insert('userinfo',$data);
		}
		else{
			
			$this->db->where('OrderID', $num);
			$this->db->delete('orderinfo');
			$this->db->insert('orderinfo',$data);
			//$query = $this->db->get();
			//$this->db->insert('carddesign',$dat);
		}
		
	
	
	
}

}
?>


	
	
