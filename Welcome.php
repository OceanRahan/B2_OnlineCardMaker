<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
		$this->db->query("CREATE TABLE if not exists `carddesign` (
				`OrderID` int(20),
				`StyleNo` int(20)
				
				) ");
		$num=$this->db->count_all_results('carddesign');
		$num=$num+1;
		
		$_SESSION['num'] = $num;
		
                $this->load->view('home');
              
                
               
		
		
		
		
	}
	public function  showcard(){
		$this->load->view('samp');
                 if(isset($_POST['s1']))
            {
            //$this->load->view('mat');
            echo 'btn pressed';
                    // redirect('mList');
            }
		//$this->load->view('mat');
		
		/*if (isset($_POST['s1'])){
			$style=1;
			$this->load->model('action_style');
			$this->action_style->setstyle($style);
			$this->load->view('mat');
			
		}
		else if (isset($_POST['s2'])){
			$style=2;
			$this->load->model('action_style');
			$this->action_style->setstyle($style);
			$this->load->view('mat');
			
		}
		else if (isset($_POST['s3'])){
			$style=3;
			$this->load->model('action_style');
			$this->action_style->setstyle($style);
			$this->load->view('mat');
			
		}
		else if (isset($_POST['s4'])){
			$style=4;
			$this->load->model('action_style');
			$this->action_style->setstyle($style);
			$this->load->view('mat');
			
		}
		else if (isset($_POST['s5'])){
			$style=5;
			$this->load->model('action_style');
			$this->action_style->setstyle($style);
			$this->load->view('mat');
			
		}
		else if(isset($_POST['s5'])){
			$style=6;
			$this->load->model('action_style');
			$this->action_style->setstyle($style);
			$this->load->view('mat');
			
		}*/
		
		
	}
        
        public function mList()
        {
            //if(isset($_POST['bc1']))
           // {
            if(isset($_POST['s'])){
            
           // {
            $num=$this->db->count_all_results('carddesign');
            //$num=$num+1;
            //$_SESSION[0] = $num;
            
            $username['name'] = $_POST['uname'];
            $username['company name'] = $_POST['com'];
            $username['Designation'] = $_POST['des'];
            $username['Resident'] = $_POST['res'];
            $username['Company Address'] = $_POST['add'];
            $username['Phone no'] = $_POST['phone'];
            
            $this->load->model('action_page');
            $this->action_page->setname($username,$num);
           }
            $this->load->view('mat');
           // }
        }
        
        public function login()
        {
            $this->load->view('login');
        }
		
		
	public function cat()
        {
            $this->load->view('cat');
        }
        public function info()
        {
            $num = $this->db->count_all_results('carddesign');
            $num=$num+1;
            $_SESSION[0]=$num;
            if(isset($_POST['s1']))
            {
                $style = 1;
                $this->load->model('action_style');
                $this->action_style->setstyle($style,$num);
                
            }
            else if(isset($_POST['s2']))
            {
                $style = 2;
                $this->load->model('action_style');
                $this->action_style->setstyle($style,$num);
                
                
            }
            else if(isset($_POST['s3']))
            {
                $style = 3;
                $this->load->model('action_style');
                $this->action_style->setstyle($style,$num);
                
                
            }
            else if(isset($_POST['s4']))
            {
                $style = 4;
                $this->load->model('action_style');
                $this->action_style->setstyle($style,$num);
                
                
            }
            else if(isset($_POST['s5']))
            {
                $style = 5;
                $this->load->model('action_style');
                $this->action_style->setstyle($style,$num);
                
                
            }
            else if(isset($_POST['s6']))
            {
                $style = 6;
                $this->load->model('action_style');
                $this->action_style->setstyle($style,$num);
                
                
            }
            $this->load->view('welcome_message');
        }
        public function shpinfo()
        {
            $num=$this->db->count_all_results('carddesign');
     /*	$user[0] = $_POST['uname'];
     	$user[1] = $_POST['addr'];
     	$user[2] = $_POST['phone'];
     	$user[3] = $_POST['cards'];
     	$use[4] = $_POST['g'];*/
     	
     	
     	if (isset($_POST['ms1'])){
     		$mat=20;
     		$this->load->model('material_action');
     		$this-> material_action->setmaterial($mat,$num);
     		
     		//$this->load->view('mat');
     		
     	}
     	else if (isset($_POST['ms2'])){
     		$mat=25;
     		$this->load->model('material_action');
     		$this-> material_action->setmaterial($mat,$num);
     	
     		//$this->load->view('mat');
     		
     	}
     	else if (isset($_POST['ms3'])){
     		$mat=30;
     		$this->load->model('material_action');
     		$this-> material_action->setmaterial($mat,$num);
     	}
     		//$this->load->view('mat');
     		
     	
     	
     	
     	
     	
            
           $this->load->view('shp'); 
        }
        
        public function showlast()
        
        {
        	$num=$this->db->count_all_results('carddesign');
        	
        	
        	
        	
        	 $ship[0] = $_POST['uname'];
        	 $ship[1] = $_POST['addr'];
        	 $ship[2] = $_POST['phone'];
        	 $ship[3] = $_POST['cards'];
        	 $ship[4] = $_POST['cash'];
        	 
        	 $this->load->model('shipping_action');
        	 $this->shipping_action->setinfo($ship,$num);
        	  $this->load->model('ordervalue');
        	 $this->data['posts']=$this->ordervalue->getprice($num);
        	 $this->data['costs']=$this->ordervalue->getno($num);
        	// $this->load->view('welcome_message', $this->data);
        	
        	
        	
        	$this->load->view('final',$this->data);
        }
        public function showcon(){
        	$num=$this->db->count_all_results('carddesign');
        	
        	$this->load->model('confirmation');
        	$this->data['posts']=$this->confirmation->getconfirm($num);
        	
        	
        	
        	
        	$this->load->view('viewconfirm',$this->data);
        	
        	
        	
        }
        
        
        


}
