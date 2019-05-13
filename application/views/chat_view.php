
	<div id='chatting' >
		<h3>Get Help</h3>
		<div id="chat">
			<p>
				<?php
					foreach($result as $sms){
								
				?>
						<b><?php echo $sms['user']; ?> : </b>
						<?php echo $sms['message']; ?>
						<br>
						<i><sub><?php echo $sms['date'] ." , ". $sms['time']; ?></sub></i>
						<br><br>
				
				<?php
					} //end of while
				?>
				
			</p>
			
		</div>
		<div id="send_msg">
			<form action="<?php echo base_url();?>index.php/chat_controller/SaveChat" method="POST">
				<input type="text" name="data" placeholder="Enter you text..."></input>
				<input type="submit" name="save" value="Send"></input>
			</form>
		</div>
	</div> 
	
	
	<script >
		function scroll_end(){
			document.getElementById("chat").scrollTop = document.getElementById("chat").scrollHeight;
		}
	</script>
	
	