

<?php

	class Chat_controller extends CI_Controller{
		
		public function index(){	
			
			$this->load->library('session');
			if($this->session->userdata('session_email')){
				
				$this->load->model('chat_model');
				$result = $this->chat_model->GetAllChat();
				
				$this->load->view('chat_view', $result);
				
			}
			else{
				echo "You Must Login First To Continue..." ;
			}
		}
		
		public function SaveChat(){
			
			date_default_timezone_set("Asia/Karachi");
				
			$this->load->library('session');
			if($this->session->userdata('session_email')){
				
				if(isset($_POST['save'])){
					
					$this->load->model('user_model');
					
					$result = $this->user_model->SearchUser($this->session->userdata('session_email'), 'email');
					
					$user = $result[0];
					
					$data = array(
					
					'user' => $user['name']+$user['id'],
					'message' => $this->input->post('data'),
					'date' => date("Y/m/d"),
					'time' => date("h:i:sa")
					);
					
					$this->load->model('chat_model');
					
					$this->chat_model->SaveMessage($data);
					
				}
				else{
					echo "You are not allowed to access this page...";
					$link = base_url();
					header("refresh:2; url=". $link ."/index.php/Home");
				}
				
			}
			else{
				echo "You Must Login First To Continue..." ;
			}
			
		}
		
	}

?>