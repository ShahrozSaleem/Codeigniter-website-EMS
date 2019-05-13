
<div id="event_save" class="full_width ">

	<table >
	<form action="<?php echo base_url();?>/index.php/event_controller/CreateEvent" method="POST">
		<tr>
			<th colspan="2">
				Create Your Event
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
				<input required  type="text" name= "ename"></input>
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
				<input required  type="date" name= "dte"></input>
			</td>
			<td>
				<input required  type="time" name= "stim"></input>
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
				<input required  type="time" name= "etim"></input>
			</td>
			<td>
				<select name="etype">
					<option>Wedding</option>
					<option>Bachelor Party</option>
					<option>Birthday</option>
					<option>Friends reunion</option>
					<option>Family reunion</option>
					<option>Office meeting</option>
					<option>Farewell party</option>
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
				<input type="text" name= "dscr"></input>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<button name= "adde" type="submit">Add Event</button>
			</td>
		</tr>
	</form>
	</table>

</div>