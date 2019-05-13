

<?php

	session_start();
	
	if(isset($_SESSION['session_email'])){
		
		if(isset($_POST['save'])){
		
			require_once('connection.php');
			
			$msg = $_POST['data'];
			date_default_timezone_set("Asia/Karachi");
			$date = date("Y/m/d");
			$time = date("h:i:sa");
			
			session_start();
			$email = $_SESSION['session_email'];
			
			$user_name = "select * from user where email='$email'";
			$data = mysqli_query($con , $user_name);
			
			$row = mysqli_fetch_array($data);
			$user = $row['name'];
			$id = $row['id'];
			
			$query=" INSERT INTO chat(user, message, date, time) VALUES('$user-$id', '$msg', '$date', '$time' )";
			
			$exe = mysqli_query($con , $query);
			
		}
		else{
			echo "error";
		}
		
	}else{
		echo "you are not login..";
	}
	
	header('location:index.php');
	
?>