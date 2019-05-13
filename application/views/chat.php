	<?php
		if (session_status() == PHP_SESSION_NONE) {
			session_start();
		}
	?>
	
	
	<div id='chatting' >
		<h3>Talk with us</h3>
		<div id="chat">
			<p>
			
				<?php
					if(isset($_SESSION['session_email'])){
						
						require_once('connection.php');
						$query = "select * from chat";
							
						$exe = mysqli_query($con, $query);
							
						while($row = mysqli_fetch_array($exe)){
								
				?>
				
						<b><?php echo $row['user']; ?> : </b>
						<?php echo $row['message']; ?>
						<br>
						<i><sub><?php echo $row['date'] ." , ". $row['time']; ?></sub></i>
						<br><br>
				
				<?php
						} //end of while
						
					} // if end
					else{
						echo "You Must Login First To Continue..." ;
					}
					
				?>
				
			</p>
			
		</div>
		<div id="send_msg">
			<form action="save_chat.php" method="post">
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
	
	