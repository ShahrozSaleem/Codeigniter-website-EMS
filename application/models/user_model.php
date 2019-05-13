
<?php

class User_model extends CI_Model{
	
	public function CreateUser($Data){
		return $this->db->insert('user', $Data );
	}

	public function GetALLUser(){
		$query = $this->db->get('user');
		return $query->result_array();
	}
	
	public function SearchUser($val , $col){
		$query = $this->db->where($col , $val)->get('user');
		if ($query->num_rows())
		{   
			return $query->result_array();
		}else{
			return false;
		}
	}
	
	public function GetResult($Data){
		//$this->load->database();
		//echo $Data['email'];
		$query = $this->db->where('email' , $Data['email'])->where('password' , $Data['password'])->get('user');
				 //$this->db->where('password' , $Data['password']);
				 
		//$query = $this->db->select('*')->from('user')->where('email', $Data['email']);
		if ($query->num_rows())
		{   
			return true;
			//return $query->result();
		}else{
			//echo 'Big Problem';
			//die;
			return false;
		}	
		//return $query->result();
	}
	
	public function UpdateUser($data, $id){
		//$this->db->set($data);
		return $this->db->where('id', $id)->Update('user', $data);
	}
	
	public function RemoveUser($id){
		return $this->db->where('id' , $id)->delete("user");
	}
	
	public function login(){
		if(1 ){
		/*	require_once('connection.php');

			$email =$_POST['mail'];
			$pwd = $_POST['pswd'];
			$query = "SELECT * FROM user WHERE email='$email' AND password='$pwd'";
			
			$exe = mysqli_query($con, $query);
			
			
			if(mysqli_num_rows($exe)>0){
				
				if (session_status() == PHP_SESSION_NONE) {
					session_start();
				}
				$_SESSION['session_email']=$email;
				
				header("location:index.php");
				//header("refresh:2; url=index.php");
			}
			else{
				echo "Invalid UserName / Password";
			}
		*/
		
		$this->load->model('Planner');
		
		$this->Planner->login("asad123@gmail.com","123");
		
		}
		else{
			echo "You are not Authorized to access this page";
			header("refresh:2; url=index.php");
		}
	}
	
	public function logout(){
		
		if(isset($_SESSION['session_email']))
		{
			session_destroy();
			header("location:index.php");
		}
		else{
			echo "You are not login...";
			header("refresh:2; url=index.php");
		}
		
	}
	
}

?>
