
<?php

	require_once("DB.php");
	class Event{
		
		public function AddEvent( $name, $date, $start_time, $end_time, $type, $detail)
		{
			session_start();
			$email = $_SESSION['session_email'];
			$query = "SELECT * FROM user WHERE email='$email' ";
			
			$Obj = new Database();
			
			$result = $Obj->GetData($query);
			$user = $result['id'];
			
			$Query = "INSERT INTO  event(ename, edate, e_stime, e_etime, etype, edetail, user) 
					 VALUES('$name', '$date', '$start_time', '$end_time', '$type', '$detail', '$user')";
			
			$Obj->executeQuery($Query);
			header("location:../index.php");
		}
		
		public function UpdateEvent( $name, $date, $start_time, $end_time, $type, $detail, $user)
		{	
			$Query = "Update event SET 
			ename='$name' , edate='$date', e_stime='$start_time', e_etime='$end_time', etype='$type', edetail='$detail', user='$user' where id =$id";
			
			$Obj = new Database();
			$Obj->executeQuery($Query);
		}
		
		public function DeleteEvent($id){	
			$Query = "DELETE from event WHERE id=$id";
			echo "comes";
			$Obj = new Database();
			$Obj->executeQuery($Query);
			header("location:../all_event.php");
		}
		
		public function GetEvent( $id )
		{	
			$Query = "Select * From event where id = $id";
			
			$Obj = new Database();
			return $Obj->GetData($Query);
		}
		
		public function SearchEvent($col_name, $col_value)
		{
			$obj = new Database();
			return $obj->ReturnResult($col_name, $col_value, "event");
		}
		
		public function GetEventHTML($id)
		{	
			$Query = "Select * From event where id=$id ";
			
			$Obj = new Database();
			$array = $Obj->GetData($Query);
			$html = "
				<table width=90% Height='auto' border=1 style=' text-align:center '>
					<tr>
						<th colspan=2 >
							Your Searched Event
						</th>
					</tr>
					<tr>
						<td>
							Event ID
						</td>
						<td>
							".$array['ID']."
						</td>
					</tr>
					<tr>
						<td>
							Event Name
						</td>
						<td>
							".$array['ename']."
						</td>
					</tr>
					<tr>
						<td>
							Event Date
						</td>
						<td>
							".$array['edate']."
						</td>
					</tr>
					<tr>
						<td>
							Event starting time
						</td>
						<td>
							".$array['e_stime']."
						</td>
					</tr>
					<tr>
						<td>
							Event ending time
						</td>
						<td>
							".$array['e_etime']."
						</td>
					</tr>
					<tr>
						<td>
							Event type
						</td>
						<td>
							".$array['etype']."
						</td>
					</tr>
					<tr>
						<td>
							Event Description
						</td>
						<td>
							".$array['edetail']."
						</td>
					</tr>
					<tr>
						<td>
							Event Created By
						</td>
						<td>
							".$array['user']."
						</td>
					</tr>
				</table> ";
				return $html;
		}
		
		public function GetAllEventHTML()
		{	
			$Query = "Select * From event";
			
			$Obj = new Database();
			$exe = $Obj->GetAllData($Query);
			$html = "
				<table width=90% Height='auto' border=1 style=' text-align:center '>
					<tr>
						<th>
							Event ID
						</th>
						<th>
							Event Name
						</th>
						<th>
							Event Date
						</th>
						<th>
							Event starting time
						</th>
						<th>
							Event ending time
						</th>
						<th>
							Event type
						</th>
						<th>
							Event Description
						</th>
						<th>
							Event Created By
						</th>
						<th colspan = 2>
							Modify Event
						</th>
					</tr>";
					
			while($array = mysqli_fetch_array($exe))
			{	
				$html = $html .
					"<tr>
						<td>
							".$array['ID']."
						</td>
						<td>
							".$array['ename']."
						</td>
						<td>
							".$array['edate']."
						</td>
						<td>
							".$array['e_stime']."
						</td>
						<td>
							".$array['e_etime']."
						</td>
						<td>
							".$array['etype']."
						</td>
						<td>
							".$array['edetail']."
						</td>
						<td>
							".$array['user']."
						</td>
						<td>
							<a href = 'OO-PHP/Backend.php?Eupdate=true&UID=".$array['ID']."'>Update</a>
						</td>
						<td>
							<a href = 'OO-PHP/Backend.php?Edelete=true&UID=".$array['ID']."'>Delete</a>
						</td>
					</tr>";
			}		
			$html = $html .	"</table> ";
				return $html;
		}
		
		public function GetEventXML( $id )
		{	
			$Query = "Select * From event where id=$id ";
			
			$Obj = new Database();
			$array = $Obj->GetData($Query);
			$xml = "
			<?xml version='1.0' encoding='UTF-8'?>
				<event>
					<id>
						".$array['ID']."
					</id>
					<Name>
						".$array['ename']."
					</Name>
					<Date>
						".$array['edate']."
					</Date>
					<Starting>
						".$array['e_stime']."
					</Starting>
					<Ending>
						".$array['e_etime']."
					</Ending>
					<type>
						".$array['etype']."
					</type>
					<Description>
						".$array['edetail']."
					</Description>
					<Created_by>
						".$array['user']."
					</Created_by>
				</event> 
			</xml>";
			return $xml;
		}
		
		public function GetAllEventXML()
		{	
			$Query = "Select * From event";
			
			$Obj = new Database();
			$exe = $Obj->GetAllData($Query);
			$xml = "
			<?xml version='1.0' encoding='UTF-8'?>
				<event>";
			
			while($array = mysqli_fetch_array($exe))
			{
			
				$xml = $xml. "<id>
						".$array['ID']."
					</id>
					<Name>
						".$array['ename']."
					</Name>
					<Date>
						".$array['edate']."
					</Date>
					<Starting>
						".$array['e_stime']."
					</Starting>
					<Ending>
						".$array['e_etime']."
					</Ending>
					<type>
						".$array['etype']."
					</type>
					<Description>
						".$array['edetail']."
					</Description>
					<Created_by>
						".$array['user']."
					</Created_by>";
			}
			
			$xml = $xml . "</event> 
			</xml>";
			
			return $xml;
		}
		
		public function GetEventCSV( $id )
		{
			$Query = "Select * From event where id=$id ";
			$Obj = new Database();
			$array = $Obj->GetData($Query);
			$csv = "Event ID, Event Name, Event Date, Event starting time, Event ending time, Event type, Event Description, Event Created By
			<br> 
			$array[ID], $array[ename], $array[edate], $array[e_stime], $array[e_etime], $array[etype], $array[edetail], $array[user]";
			return $csv;
		}
		
		public function GetAllEventCSV()
		{
			$Query = "Select * From event";
			
			$Obj = new Database();
			$exe = $Obj->GetAllData($Query);
			$csv = "Event ID, Event Name, Event Date, Event starting time, Event ending time, Event type, Event Description, Event Created By <br>";
			
			while($array = mysqli_fetch_array($exe))
			{
				$csv = $csv ."
				$array[ID], $array[ename], $array[edate], $array[e_stime], $array[e_etime], $array[etype], $array[edetail], $array[user]
				<br>";
			}
			return $csv;
		}
	}

?>