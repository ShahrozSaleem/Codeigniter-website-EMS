
<?php

class Event extends CI_Controller {

	public function index()
	{
		//$this->load->view('index');
	}
	
	public function CreateEvent(){
		
		//$this->load->view('index');
		$this->load->view('header.php');
		if (session_status() == PHP_SESSION_NONE) {
			session_start();
		}
		
		if(isset($_SESSION['session_email'])){
			$this->load->view('save_event.php');
		}
		else{
			echo "Please login to continue...";
			header("refresh:2; url='../Home'");
		}
		
		$this->load->view('search&menu.php');
	}
	
	public function saveEvent(){
		
	}
	
	public function SendInvitation(){
		
	}
	
	public function ViewAll(){
		
	}
	
}

?>