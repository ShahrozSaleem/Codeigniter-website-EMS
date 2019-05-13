
<?php

class Event_model extends CI_Model{
	
	public function __construct()
    {
        parent::__construct();
        $this->load->helper('url'); //Loading url helper    
    }
	
	public function SaveEvent($Data){
		return $this->db->insert('event', $Data );
	}

	public function GetALLEvent(){
		$query = $this->db->get('event');
		return $query->result_array();
	}
	
	public function SearchEvent($val , $col){
		$query = $this->db->where($col , $val)->get('event');
		
		if ($query->num_rows())
		{   
			return $query->result_array();
		}else{
			return false;
		}
	}
	
	public function Save_Invitation($data){
		return $this->db->insert('invitation', $data );
	}
	
	/*
	public function GetResult($Data){
		$query = $this->db->where('email' , $Data['email'])->where('password' , $Data['password'])->get('event');
		
		if ($query->num_rows())
		{   
			return true;
		}else{
			return false;
		}	
	} */
	
	public function UpdateEvent($data, $id){
		//$this->db->set($data);
		return $this->db->where('id', $id)->Update('event', $data);
	}
	
	public function RemoveEvent($id){
		return $this->db->where('ID' , $id)->delete("event");
	}
	
}

?>
