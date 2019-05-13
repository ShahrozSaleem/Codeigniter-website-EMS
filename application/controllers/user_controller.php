
<?php

class User_controller extends CI_Controller{
	
	public function __construct()
    {
        parent::__construct();
        $this->load->helper('url'); //Loading url helper    
    }

	public function UpdateUser(){
		
		$this->load->library('session');
		if($this->session->userdata('session_email')){
		
			$id = $this->uri->segment('3');
			
			$this->load->model('user_model'); 
			
			$result['user'] = $this->user_model->SearchUser($id, "id");
			
			if($result){
				$this->load->view('header');
				$this->load->view('user_update_view', $result);
				$this->load->view('search&menu');
			}
			else{
				echo "This action can't be performed now! <br> Please try again after some time.";
				$link = base_url();
				header("refresh:2; url=". $link ."/index.php/Home");
			}
		}
		else{
			echo "Please login to continue...";
			$link = base_url();
			header("refresh:2; url=". $link ."/index.php/Home");
		}
	}
	
	public function DoUpdate(){
		
		$this->load->library('session');
		
		if($this->session->userdata('session_email')){
			
			$this->load->model('user_model');
			$qqq = $this->user_model->SearchUser( $this->session->userdata('session_email') , "email");
			
			$abc = $qqq[0];
			
			//$this->input->post('h_id')
			
			if(isset($_POST['btn_update'])){
			
				$Data = array(
					'name' => $this->input->post('name'),
					'fname' => $this->input->post('fname'),
					'email' => $this->input->post('email'),
					'password' => $this->input->post('pwd'),
					'contact' => $this->input->post('contact'),
					'dob' => $this->input->post('DOB'),
					'address' => $this->input->post('address'),
					'gender' => $this->input->post('gender'),
					'updated_by' => $abc['id']
				);
				
				$what = $this->user_model->UpdateUser($Data, $this->input->post('h_id') );
				
				if($what){
					echo "User is Updated! ";
					$link = base_url();
					header("location:". $link ."index.php/user_controller/ViewAllUser");
				}
				else{
					echo "You are not registered! <br> Please try again after some time.";
					$link = base_url();
					header("refresh:2; url=". $link ."/index.php/Home");
				}
			}
			else{
				echo "You are not Allowed to acess this page";
				$link = base_url();
				header("refresh:2; url=". $link ."/index.php/Home");
			}
		}
		else{
			
			echo "You are not login. <br> Please login to continue...";
			$link = base_url();
			header("refresh:2; url=". $link ."/index.php/Home");
		}
	}

	public function Sign_up(){
		
		$this->load->library('session');
		
		if($this->session->userdata('session_email')){
			echo "You are already login. <br> Please logout and sign in again";
			$link = base_url();
			header("refresh:2; url=". $link ."/index.php/Home");
		}
		else{
			
			if(isset($_POST['btn_sign_up'])){
			
				date_default_timezone_set("Asia/Karachi");
				$Data = array(
					'name' => $this->input->post('name'),
					'fname' => $this->input->post('fname'),
					'email' => $this->input->post('email'),
					'password' => $this->input->post('pwd'),
					'contact' => $this->input->post('contact'),
					'dob' => $this->input->post('DOB'),
					'address' => $this->input->post('address'),
					'gender' => $this->input->post('gender'),
					'date' => date("Y/m/d"),
					'time' => date("h:i:sa"),
					'updated_by' => 'none'
				);
				
				$this->load->model('user_model');
				$what = $this->user_model->CreateUser($Data);
				
				if($what){
					echo "You are registered! <br> now you can login to your account.";
					$link = base_url();
					header("refresh:2; url=". $link ."/index.php/Home");
				}
				else{
					echo "You are not registered! <br> Please try again after some time.";
					$link = base_url();
					header("refresh:2; url=". $link ."/index.php/Home");
				}
			}
			else{
				echo "You are not Allowed to acess this page";
				$link = base_url();
				header("refresh:2; url=". $link ."/index.php/Home");
			}
		}
	}
	
	public function DeleteUser(){
		
		$this->load->library('session');
		
		if($this->session->userdata('session_email')){
			
			$this->load->model('user_model'); 
			$id = $this->uri->segment('3');
			
			$email_result = $this->user_model->SearchUser($id, "id");
			
			$output = $email_result[0];
			
			$email = $output['email'];
			
			//echo $output['email'];
			//print_r($email['email']);
			
			$what = $this->user_model->RemoveUser($id);
			
			if($what){
				$this->load->library('session');
				
				if( $email == $this->session->userdata('session_email')){
					$this->Userlogout();
				}
				else{
					$link = base_url();
					header("location:". $link ."index.php/user_controller/ViewAllUser");
				}
			}
			else{
				echo "This action can't be performed now! <br> Please try again after some time.";
				$link = base_url();
				header("refresh:2; url=". $link ."/index.php/Home");
			}
			
		}
		else{
			echo "Please login to continue...";
			$link = base_url();
			header("refresh:2; url=". $link ."/index.php/Home");
		}
	}
	
	Public function ViewAllUser(){
		
		$this->load->library('session');
		
		if($this->session->userdata('session_email')){
			$this->load->model('user_model');
			
			$data['users'] = $this->user_model->GetALLUser();
			
			$this->load->view('header');
			$this->load->view('user_data', $data);
			$this->load->view('search&menu');
		}
		else{
			echo "Please login to continue...";
			$link = base_url();
			header("refresh:2; url=". $link ."/index.php/Home");
		}
	}
	
	public function Userlogin(){
		
		$this->load->library('session');
		
		if($this->session->userdata('session_email')){
			echo "You are already login";
			$link = base_url();
			header("refresh:2; url=". $link ."/index.php/Home");
		}
		else{
		
			//echo 'here it is';
			$this->load->helper('html');
			$this->load->helper('form');
			
			$Data = array(
				'password' => $this->input->post('pswd'),
				'email' => $this->input->post('email')
			);
			
			//echo $Data['email'];
			
			
			if(isset($_POST['sign_in_btn'])){
				
				$this->load->model('user_model');
				$result = $this->user_model->GetResult($Data);
				
				if($result){
					$this->load->library('session');
					if (session_status() == PHP_SESSION_NONE) {
						session_start();
					}
					$_SESSION['session_email'] = $Data['email']; 
					//echo "Got it" . $_SESSION['session_email'];
					header("location:../Home");
					//header("refresh:2; url=../Home");
				}
				else{
					echo "Invalid UserName / Password";
					header("refresh:2; url=../Home");
				}
				
			}
			else{
				echo "You are not Authorized to access this page";
				/*header("refresh:2; url=". <?php echo base_url();?> .""); */
				
				header("refresh:2; url=../Home");
			}
		}//else
			
		
		//$data = $this->session->userdata('');
		//echo $this->input->post('pswd');
	}
	
	public function Userlogout(){
		
		$this->load->library('session');
		
		if($this->session->userdata('session_email'))
		{
			$this->session->unset_userdata('session_email');
			$link = base_url();
			header("location:". $link ."index.php/Home");
		}
		else{
			echo "You are not login...";
			$link = base_url();
			header("refresh:2; url=". $link ."index.php/Home");
		}
	}
	
}

?>