
<?php

	require_once("Event.php");

	if(isset($_POST['adde'])){
		$obj = new Event();
		
		$name = $_POST['ename'];
		$date = $_POST['dte'];
		$start = $_POST['stim'];
		$end = $_POST['etim'];
		$type = $_POST['etype'];
		$detail = $_POST['dscr'];
		
		$obj->AddEvent( $name, $date, $start, $end, $type, $detail);
		header("location:../index.php");
	}
	
	if(isset($_GET['Eupdate'])){
		
		$id = $_GET['UID'];
		echo "Sorry! You are not allowed to Update any event!";
		header("Refresh:2; url=../index.php");
	}
	if(isset($_GET['Edelete'])){
		
		$id = $_GET['UID'];
		$obj = new Event();
		$obj->DeleteEvent($id);
	}
	
	if(isset($_POST['b2id'])){
		$data = $_POST['find101'];
		include('../header.php');
		include('../event_search_id.php');
		include('../search&menu.php');
	}
	
	if(isset($_POST['b1name'])){
		$data = $_POST['find101'];
		include('../header.php');
		include('../event_search_name.php');
		include('../search&menu.php');
	}
	
	if(isset($_POST['b3detail'])){
		$data = $_POST['find101'];
		include('../header.php');
		include('../event_search_detail.php');
		include('../search&menu.php');
	}

?>