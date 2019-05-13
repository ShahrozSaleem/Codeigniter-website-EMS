
	<?php

		class Event_controller extends CI_Controller{
			
			public function __construct()
			{
				parent::__construct();
				$this->load->helper('url');    
			}

			public function UpdateEvent(){
				
				$this->load->library('session');
				if($this->session->userdata('session_email')){
				
					$id = $this->uri->segment('3');
					
					$this->load->model('event_model'); 
					$result['Event'] = $this->event_model->SearchEvent($id, "ID");
					
					if($result){
						$this->load->view('header');
						$this->load->view('event_update_view', $result);
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
					
					if(isset($_POST['update_event'])){
					
						$Data = array(
							'ename' => $this->input->post('ename'),
							'edate' => $this->input->post('dte'), 
							'e_stime' => $this->input->post('stim'), 
							'e_etime' => $this->input->post('etim'), 
							'etype' => $this->input->post('etype'), 
							'edetail' => $this->input->post('dscr')
						);
						
						$this->load->model('event_model');
						$what = $this->event_model->UpdateEvent($Data, $this->input->post('h_id') );
						
						if($what){
							echo "Event is Updated! ";
							$link = base_url();
							header("location:". $link ."index.php/event_controller/ViewAllEvent");
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

			public function CreateEventView(){
				
				$this->load->library('session');
				if($this->session->userdata('session_email')){
					
					$this->load->view('header');
					$this->load->view('create_event_view');
					$this->load->view('search&menu');
				}
				else{
					echo "Please login to continue...";
					$link = base_url();
					header("refresh:2; url=". $link ."/index.php/Home");
				}
				
			}
			
			public function CreateEvent(){
				
				$this->load->library('session');
				
				if($this->session->userdata('session_email')){
					
						
					if(isset($_POST['adde'])){
						
						$this->load->model('user_model');
						$result = $this->user_model->SearchUser( $this->session->userdata('session_email') , 'email');
						
						$user = "";
						
						if($result){
							$user_data = $result[0];
							$user = $user_data['id'];
						}
						else{
							echo "This action can't be performed now! <br> Please try again after some time.";
							$link = base_url();
							header("refresh:2; url=". $link ."/index.php/Home");
						}
						
						
						$Data = array(
							'ename' => $this->input->post('ename'),
							'edate' => $this->input->post('dte'), 
							'e_stime' => $this->input->post('stim'), 
							'e_etime' => $this->input->post('etim'), 
							'etype' => $this->input->post('etype'), 
							'edetail' => $this->input->post('dscr'),
							'user' => $user
						);
						
						$this->load->model('event_model');
						$what = $this->event_model->SaveEvent($Data);
						
						if($what){
							echo "Event is created Successfully!";
							$link = base_url();
							header("refresh:2; url=". $link ."/index.php/event_controller/ViewAllEvent");
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
					echo "Please login to continue...";
					$link = base_url();
					header("refresh:2; url=". $link ."/index.php/Home");
				}
			}
			
			public function DeleteEvent(){
				
				$this->load->library('session');
				
				if($this->session->userdata('session_email')){
					
					$this->load->model('event_model'); 
					$id = $this->uri->segment('3');
					
					$what = $this->event_model->RemoveEvent($id);
					
					if($what){
						$link = base_url();
						header("location:". $link ."index.php/event_controller/ViewAllEvent");
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
			
			Public function ViewAllEvent(){
				
				$this->load->library('session');
				
				if($this->session->userdata('session_email')){
					$this->load->model('event_model');
					$data['Events'] = $this->event_model->GetALLEvent();
					
					$this->load->view('header');
					$this->load->view('event_data', $data);
					$this->load->view('search&menu');
				}
				else{
					echo "Please login to continue...";
					$link = base_url();
					header("refresh:2; url=". $link ."/index.php/Home");
				}
			}
			
			public function SendInvitation(){
				
				$this->load->library('session');
				if($this->session->userdata('session_email')){
					
					$this->load->model('user_model');
					$u_result = $this->user_model->SearchUser( $this->session->userdata('session_email'),'email');
					
					$data = $u_result[0];
					
					//print_r($data);
					//die();
					
					$this->load->model('event_model');
					
					$events = $this->event_model->SearchEvent( $data["id"],'user');
					
					if(!$events){
						echo "Please Create an event first then send invitation...";
						$link = base_url();
						header("refresh:2; url=". $link ."/index.php/Home");
					}
					
					$valuse['user'] = $data;
					$valuse['events'] = $events;
					
					$this->load->helper('html');
					$this->load->helper('url');
					
					
					$this->load->view('header');
					$this->load->view('invitation_view', $valuse);
					$this->load->view('search&menu');
				}
				else{
					echo "Please login to continue...";
					$link = base_url();
					header("refresh:2; url=". $link ."/index.php/Home");
				}
			}
			
			public function SaveInvitation(){
				
				$this->load->library('session');
				if($this->session->userdata('session_email')){
					
					date_default_timezone_set("Asia/Karachi");
					if(isset($_POST['send_inv'])){
						$Data = array(
							'send_to' => $this->input->post('to'),
							'send_from' => $this->input->post('from'), 
							'event' => $this->input->post('event'), 
							'detail' => $this->input->post('detail'),
							'send_date' => date("Y/m/d"),
							'send_time' => date("h:i:sa")
						);
						
						$this->load->model('event_model');
						$this->event_model->Save_Invitation($Data);
						
						$link = base_url();
						header("location:". $link ."/index.php/Home");
					}
					else{
						echo "You are not Allowed to access this page...";
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
		}
	?>