



<section id="body_cover" class="full_width">
	<div id="search_content_cover" class="content_cover">
		<div class="event_detail left">
			<table width=90% Height='auto' border=1 style=' text-align:center ' class="all_table">
				
				<tr>
					<th colspan="10">
						<h1>" All Events Detail "</h1>
					</th>
				</tr>
				
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
					</tr>
					
					<?php		
					//$count=0;
						
						//$Event_detail = $Events[0];
						
						foreach($Events as $array){
							
						//print_r($array);
						
						//die();
							
					//$count++;	
					?>
					
					<tr>
						<td>
							<?php echo $array['ID'] ; ?>
						</td>
						<td>
							<?php echo $array['ename'] ; ?>
						</td>
						<td>
							<?php echo $array['edate'] ; ?>
						</td>
						<td>
							<?php echo $array['e_stime'] ; ?>
						</td>
						<td>
							<?php echo $array['e_etime'] ; ?>
						</td>
						<td>
							<?php echo $array['etype'] ; ?>
						</td>
						<td>
							<?php echo $array['edetail'] ; ?>
						</td>
						<td>
							<?php echo $array['user'] ; ?>
						</td>
						<td>
							<a href="<?php echo base_url();?>index.php/event_controller/UpdateEvent/<?php echo $array['ID']; ?>" >Update</a>
						</td>
						<td>
							<a href="#" class="Delete_Event" id="<?php echo $array['ID']; ?>">Delete</a>
						</td>
					</tr>
					
					<?php
					}
					?>		
			</table> 
			
			<script>
				$(document).ready(function(){
					
					$(".Delete_Event").click(function(){
						var eid = $(this).attr("id");
						if(confirm("Are you Sure you want to delete this Event?")){
							window.location="<?php echo base_url(); ?>index.php/event_controller/DeleteEvent/" + eid;
						}
						else{
							return false;
						}
					});
					
				});
				
			</script>
			
		</div>
		
		<div class="guest right">
			
		</div>
	</div>
</section>



<?php

	

?>