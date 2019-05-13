



<section id="body_cover" class="full_width">
	<div id="search_content_cover" class="content_cover">
		<div class="event_detail left">
			<table border=1 class="all_table">
				<form>
				<?php
				//require_once('connection.php');
	
				//$query="SELECT * FROM user where is_deleted='n'";
	
				//$exe = mysqli_query($con, $query);
				
				?>
					<tr>
						<th colspan="14">
							<h1>"All User Data"</h1>
						</th>
					</tr>
					<tr>
						<th>No.</th>
						<th>User Name</th>
						<th>Father Name</th>
						<th>Email</th>
						<th>Password</th>
						<th>Contact</th>
						<th>Date of Birth</th>
						<th>Address</th>
						<th>Gender</th>
						<th>Date Created</th>
						<th>Creation Time</th>
						<th>Updated By</th>
						<th colspan="2"  style="text-align:center;">Actions</th>
					</tr>
				
				<?php
					$count=0;
					//while($ok = mysqli_fetch_array($exe)){
					
					
					foreach($users as $user_detail){
						$count++;
					?>
				
					<tr>
						<td><?php echo $count; ?> </td>
						<td><?php echo $user_detail['name']; ?></td>
						<td><?php echo $user_detail['fname']; ?></td>
						<td><?php echo $user_detail['email']; ?></td>
						<td><?php echo $user_detail['password']; ?></td>
						<td><?php echo $user_detail['contact']; ?></td>
						<td><?php echo $user_detail['dob']; ?></td>
						<td><?php echo $user_detail['address']; ?></td>
						<td><?php echo $user_detail['gender']; ?></td>
						<td><?php echo $user_detail['date']; ?></td>
						<td><?php echo $user_detail['time']; ?></td>
						<td><?php echo $user_detail['updated_by']; ?></td>
						<td>
							<a href="<?php echo base_url();?>index.php/user_controller/UpdateUser/<?php echo $user_detail['id']; ?>" >Update</a>
						</td>
						<td>
							<a href="#" class="Delete_user" id="<?php echo $user_detail['id']; ?>">Delete</a>
							</td>
					</tr>
				<?php
				}
				?>
				</form>
			</table>
		</div>
		
		<script>
			$(document).ready(function(){
				
				$(".Delete_user").click(function(){
					var id = $(this).attr("id");
					if(confirm("Are you Sure you want to delete this user?")){
						window.location="<?php echo base_url(); ?>index.php/user_controller/DeleteUser/"+id;
					}
					else{
						return false;
					}
				});
				
			});
			
		</script>
		
		<div class="guest right">
			
		</div>
	</div>
</section>



<?php

	

?>