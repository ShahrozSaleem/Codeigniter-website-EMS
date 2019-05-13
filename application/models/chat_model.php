
<?php

	class Chat_model extends CI_Model{
		
		public function GetAllChat(){
			$query = $this->db->get('chat');
			return $query->result_array();
		}
		
		public function SaveMessage($data){
			return $this->db->insert('chat', $data );
		}
		
	}

?>