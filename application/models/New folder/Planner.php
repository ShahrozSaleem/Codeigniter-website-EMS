
<?php

	//require_once("DB.php");

	class Planner extends CI_Model{
		
		public function login($email, $pwd){
			$this->load->database();
			
			$asd = $this->db->query('select * from user');
			
			print_r($asd);
		}
		/*
		public function AddUser( $name, $fname, $email, $password, $contact, $dob, $address, $gender, $date, $time)
		{	
			
			$Query = "INSERT INTO  User( name, fname, email, password, contact, dob, address, gender, date, time, updated_by, is_deleted ) 
					 VALUES ('$name', '$fname', '$email', '$password', '$contact', '$dob', '$address', '$gender', '$date', '$time', 'none', 'n')";
			
			$Obj = new Database();
			$Obj->executeQuery($Query);
		}
		
		public function UpdateUser( $name, $fname, $email, $password, $contact, $dob, $address, $gender, $date, $time, $updated_by)
		{	
			$Query = " Update User SET 
			name='$name' , fname='$fname', email='$email', password='$password', contact='$contact', dob='$dob', address='$address',
			gender='$gender', date='$date', time='$time', updated_by='$updated_by'  where id =$id";
			
			$Obj = new Database();
			$Obj->executeQuery($Query);
		}
		
		public function DeleteUser( $id )
		{	
			$Query = "Update User SET is_deleted='y' where id = $id";
			
			$Obj = new Database();
			$Obj->executeQuery($Query);
		}
		
		public function GetUser( $id )
		{	
			$Query = "Select * From User where id = $id";
			
			$Obj = new Database();
			return $Obj->GetData($Query);
		}
		
		public function SearchUser($col_name, $col_value)
		{
			$Obj = new Database();
			return $obj->ReturnResult($col_name, $col_value, "user");
			
		}
		
		public function GetUserHTML($id)
		{	
			$Query = "Select * From User where id=$id ";
			
			$Obj = new Database();
			$array = $Obj->GetData($Query);
			$html = "
				<table width=90% Height='auto' border=1 style=' text-align:center '>
					<tr>
						<th colspan=2 >
							Your Searched User
						</th>
					</tr>
					<tr>
						<td>
							User ID
						</td>
						<td>
							".$array['ID']."
						</td>
					</tr>
					<tr>
						<td>
							User First Name
						</td>
						<td>
							".$array['name']."
						</td>
					</tr>
					<tr>
						<td>
							User Last Name
						</td>
						<td>
							".$array['fname']."
						</td>
					</tr>
					<tr>
						<td>
							User Email
						</td>
						<td>
							".$array['email']."
						</td>
					</tr>
					<tr>
						<td>
							User Password
						</td>
						<td>
							".$array['password']."
						</td>
					</tr>
					<tr>
						<td>
							User contact No.
						</td>
						<td>
							".$array['contact']."
						</td>
					</tr>
					<tr>
						<td>
							User Date of Birth
						</td>
						<td>
							".$array['dob']."
						</td>
					</tr>
					<tr>
						<td>
							User address
						</td>
						<td>
							".$array['address']."
						</td>
					</tr>
					<tr>
						<td>
							User gender
						</td>
						<td>
							".$array['gender']."
						</td>
					</tr>
					
				</table> ";
			return $html;
		}
		
		public function GetAllUserHTML()
		{	
			$Query = "Select * From User where is_deleted ='n' ";
			
			$Obj = new Database();
			$exe = $Obj->GetAllData($Query);
			$html = "
				<table width=90% Height='auto' border=1 style=' text-align:center '>
					<tr>
						<th>
							User ID
						</th>
						<th>
							User First Name
						</th>
						<th>
							User Last Name
						</th>
						<th>
							User Email
						</th>
						<th>
							User Password
						</th>
						<th>
							User contact No.
						</th>
						<th>
							User Date of Birth
						</th>
						<th>
							User address
						</th>
						<th>
							User Gender
						</th>
					</tr>";
			
			while($array = mysqli_fetch_array($exe))
			{
				$html = $html .
					"<tr>	
						<td>
							".$array['id']."
						</td>
						<td>
							".$array['name']."
						</td>
						<td>
							".$array['fname']."
						</td>
						<td>
							".$array['email']."
						</td>
						<td>
							".$array['password']."
						</td>
						<td>
							".$array['contact']."
						</td>
						<td>
							".$array['dob']."
						</td>
						<td>
							".$array['address']."
						</td>
						<td>
							".$array['gender']."
						</td>
					</tr>";
			}	
				$html = $html . "</table> ";
			return $html;
		}
		
		public function GetUserXML( $id )
		{	
			$Query = "Select * From User where id=$id ";
			
			$Obj = new Database();
			$array = $Obj->GetData($Query);
			$xml = "
			<?xml version='1.0' encoding='UTF-8'?>
				<User>
					<id>
						".$array['id']."
					</id>
					<Fname>
						".$array['name']."
					</Fname>
					<lname>
						".$array['fname']."
					</lname>
					<Email>
						".$array['email']."
					</Email>
					<Password>
						".$array['password']."
					</Password>
					<DOB>
						".$array['dob']."
					</DOB>
					<Contact>
						".$array['contact']."
					</Contact>
					<Address>
						".$array['address']."
					</Address>
					<Gender>
						".$array['gender']."
					</Gender>
				</User> 
			</xml>";
			return $xml;
		}
		
		public function GetAllUserXML()
		{
			$Query = "Select * From user where is_deleted = 'n'";
			
			$Obj = new Database();
			$exe = $Obj->GetAllData($Query);
			
			$xml = "<User>";
			
			while($array = mysqli_fetch_array($exe))
			{
				$xml = $xml . "
					<id>
						".$array['id']."
					</id>
					<Fname>
						".$array['name']."
					</Fname>
					<lname>
						".$array['fname']."
					</lname>
					<Email>
						".$array['email']."
					</Email>
					<Password>
						".$array['password']."
					</Password>
					<DOB>
						".$array['dob']."
					</DOB>
					<Contact>
						".$array['contact']."
					</Contact>
					<Address>
						".$array['address']."
					</Address>
					<Gender>
						".$array['gender']."
					</Gender>
				";
			}
			
			$xml = $xml. "</User>";
			
			return $xml;
		}
		
		public function GetuserCSV( $id )
		{
			$Query = "Select * From user where id=$id ";
			$Obj = new Database();
			$array = $Obj->GetData($Query);
			$csv = "user ID, User First Name, User Last Name, User Email, User Password, User contact No., User Date of Birth, User address, User gender
			<br> 
			$array[id], $array[name], $array[fname], $array[email], $array[password], $array[contact], $array[dob], $array[address], $array[gender]";
			return $csv;
		}
		
		public function GetAlluserCSV()
		{
			$Query = "Select * From user where is_deleted = 'n'";
			
			$Obj = new Database();
			$exe = $Obj->GetAllData($Query);
			$csv = "user ID, User First Name, User Last Name, User Email, User Password, User contact No., User Date of Birth, User address, User gender <br>";
			
			while($array = mysqli_fetch_array($exe))
			{
				$csv = $csv ."
				$array[id], $array[name], $array[fname], $array[email], $array[password], $array[contact], $array[dob], $array[address], $array[gender]
				<br>";
			}
			return $csv;
		}
		
		
		*/
	}
	
	
	//$abc=new User();
	
	//$abc->AddUser("Party" , "12/12/2018", "10:00 AM", "2:00 PM", "Wedding", "nothing" , 3 );
	//$abc->DeleteUser(13);
	
	//$stg = $abc->GetAllUserHTML(3);
	//echo $stg;

?>