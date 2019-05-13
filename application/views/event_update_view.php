
<div id="update" class="full_height full_width">
	
	<table id="sign_up" >
		<form action="<?php echo base_url();?>/index.php/event_controller/DoUpdate" method="POST">
		
		<?php 
			$output = $Event[0];
		?>
			<tr>
				<th colspan="2">
					Your Event Detail
				</th>
			</tr>
			<tr><td> </td></tr>
			<tr>
				<td colspan="2">
					Event Name
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<input type="text" name= "ename" value= "<?php echo $output['ename']; ?>"></input>
					<input type="hidden" name="h_id" value="<?php echo $output['ID'];?>"></input>
				</td>
			</tr>
			<tr>
				<td>
					Date
				</td>
				<td>
					Start Time
				</td>
			</tr>
			<tr>
				<td>
					<input type="date" name= "dte" value= "<?php echo $output['edate']; ?>"></input>
				</td>
				<td>
					<input type="time" name= "stim" value= "<?php echo $output['e_stime']; ?>"></input>
				</td>
			</tr>
			<tr>
				<td>
					End Time
				</td>
				<td>
					Event Type
				</td>
			</tr>
			<tr>
				<td>
					<input type="time" name= "etim" value= "<?php echo $output['e_etime']; ?>"></input>
				</td>
				<td>
					<select name="etype" value= "<?php echo $output['etype']; ?>">
					
						<?php
							if($output['etype'] == "Wedding"){
						?>
								<option value="Wedding" selected>Wedding</option>
						<?php
							}
							else{
						?>
								<option value="Wedding">Wedding</option>
						<?php
							}
						?>
						
						<?php
							if($output['etype'] == "Bachelor Party"){
						?>
								<option value="Bachelor Party" selected>Bachelor Party</option>
						<?php
							}
							else{
						?>
								<option value="Bachelor Party">Bachelor Party</option>
						<?php
							}
						?>
						
						<?php
							if($output['etype'] == "Birthday"){
						?>
								<option value="Birthday" selected>Birthday</option>
						<?php
							}
							else{
						?>
								<option value="Birthday">Birthday</option>
						<?php
							}
						?>
						
						<?php
							if($output['etype'] == "Friends reunion"){
						?>
								<option value="Friends reunion" selected>Friends reunion</option>
						<?php
							}
							else{
						?>
								<option value="Friends reunion">Friends reunion</option>
						<?php
							}
						?>
						
						<?php
							if($output['etype'] == "Family reunion"){
						?>
								<option value="Family reunion" selected>Family reunion</option>
						<?php
							}
							else{
						?>
								<option value="Family reunion">Family reunion</option>
						<?php
							}
						?>
						
						<?php
							if($output['etype'] == "Office meeting"){
						?>
								<option value="Office meeting" selected>Office meeting</option>
						<?php
							}
							else{
						?>
								<option value="Office meeting">Office meeting</option>
						<?php
							}
						?>
						
						<?php
							if($output['etype'] == "Farewell party"){
						?>
								<option value="Farewell party" selected>Farewell party</option>
						<?php
							}
							else{
						?>
								<option value="Farewell party">Farewell party</option>
						<?php
							}
						?>
					</select>
				</td>
			</tr>
			<tr>
				<td colspan=2>
					Description
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<input type="text" name= "dscr" value= "<?php echo $output['edetail']; ?>"></input>
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<button name= "update_event" type="submit">Update Event</button>
				</td>
			</tr>
		</form>
			
	</table>
	
</div>