
<div id="update" class="full_height full_width">
	
	<table id="sign_up">
		<form action="<?php echo base_url();?>/index.php/user_controller/DoUpdate" method="POST">
		
		<?php 
			$output = $user[0];
		?>
			<tr>
				<td>Name:</td>
				<td colspan="2">
					<input  required  type="text" name="name" value="<?php echo $output['name'];?>"></input>
				</td>
			</tr>
			<tr >
				<td>Father Name:</td>
				<td colspan="2">
					<input  required  type="text" name="fname" value="<?php echo $output['fname'];?>"></input>
				</td>
			</tr>
			
			
			<tr>
				<td>Email:</td>
				<td colspan="2">
					<input  required  type="email" name = "email" value="<?php echo $output['email'];?>"></input>
				</td>
			</tr>
			<tr>
				<td>Password:</td>
				<td colspan="2">
					<input  required  type="password" name="pwd" value="<?php echo $output['password'];?>"></input>
				</td>
			</tr>
			<tr >
				<td>Confirm Password</td>
				<td colspan="2">
					<input  required  type="password" name="c_pwd" value=""></input>
					<input type="hidden" name="h_id" value="<?php echo $output['id'];?>"></input>
				</td>
			</tr>
			<tr >
				<td>Contact:</td>
				<td colspan="2">
					<input  required  type="text" name="contact" value="<?php echo $output['contact'];?>"></input>
				</td>
			</tr>
			<tr >
				<td>Address:</td>
				<td colspan="2">
					<input  required  type="text" name="address" value="<?php echo $output['address'];?>"></input>
				</td>
			</tr>
			<tr >
				<td>Date Of Birth:</td>
				<td colspan="2">
					<input  required  type="date" name="DOB" value="<?php echo $output['dob'];?>"></input>
				</td>
			</tr>
			<tr>
				<td>Gender:</td>
				<td>
					<?php
						if($output['gender'] == 'M'){
					?>
							Male: <input  required  type="radio" name="gender" value="M" checked></input>
					<?php
						}
						else{
					?>
							Male: <input  required  type="radio" name="gender" value="M"></input>
					<?php
						}
					?>
				</td>
				
				<td>
					<?php
						if($output['gender'] == 'F'){
					?>
							Female: <input  required  type="radio" name="gender" value="F" checked></input>
					<?php
						}
						else{
					?>
							Female: <input  required  type="radio" name="gender" value="F" ></input>
					<?php
						}
					?>
				</td>
			</tr>
			<tr >
				<td colspan="3">
					<button name="btn_update" id="btn2su">Update</button>
				</td>
			</tr>
			
		</form>
	</table>
	
</div>