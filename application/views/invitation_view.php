
<div id="call_people">
	
	<div id="invite">
	</div>
	
	<div id="chose_user">
		
		<form action="<?php echo base_url();?>/index.php/event_controller/SaveInvitation" method="POST">
			<br><br>
			To :
			<br>
				<input required type="email" name="to" placeholder="Enter Email to send invitation....." />
			<br><br>
			From  :
			<br>
				<input required type="email" name="from" value="<?php echo $user['email']; ?>" />
			<br><br>
			Event :
			<br>
			
				<select required name="event">
					<option value="" selected placeholder="Select your Event..."></option>
				<?php
					foreach($events as $event){
				?>
						<option value="<?php echo $event['ID'];?>" ><?php echo $event['ename'];?></option>
				<?php
					} 
				?>
			</select>
			
			<br><br>
			Detail:
			<br>
				<input type="text" name="detail" placeholder="Enter description....." />
			<br>
			<br>
				<input type="submit" name="send_inv" value="Send"/>
		</form>
		
	</div>
	
</div>