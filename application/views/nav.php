				<nav>
					<div id="nav_container">
						<div id="logo" class="left">
							<a href="index.php">
								<img src="<?php echo base_url('assets/images/header/logo/logo_img.png'); ?>" id="logo_img" class="left " ></img>
								<img src="<?php echo base_url('assets/images/header/logo/logo_text.png'); ?>" id="logo_txt" class="right " ></img>
							</a>
						</div>
						<div id="links" class="right full_height" >
							<div class="links_container full_width full_height">
								<ul class="left full_height" id="firstlist">
									<li class="active">
										<a href="../Home">Main Page / Home </a>
									</li>
									<li>
										<a href="<?php echo base_url()?>index.php/event_controller/CreateEventView">Create New Event</a>
									</li>
									<li>
										<a href="<?php echo base_url()?>index.php/event_controller/SendInvitation">Send Invitations</a>
									</li>
									<li>
										<a href="<?php echo base_url()?>index.php/event_controller/ViewAllEvent">View All Events</a>
									</li>
									<li>
										<a href="<?php echo base_url()?>index.php/user_controller/ViewAllUser">View All Users</a>
									</li>
									<li>
										<?php
											if (session_status() == PHP_SESSION_NONE) {
												session_start();
											}
											if(isset($_SESSION['session_email'])){
												?>
													<a href="<?php echo base_url();?>index.php/user_controller/Userlogout">Sign out / Logout</a>
												<?php
											}
											else{
												?>
												<div id="home_login" >Sign in / Login</div>
												
												<script>
													$(document).ready(function(){
														$("#home_login").click(function(){
															$("#login").animate({
																"top":"0%"
															}, 300);
														});
													});
												</script>
												<?php
											}
										?>
									</li>
								</ul>
								
								<ul class="right full_height" id="seclist">
									<li id="child101">
											<img src="<?php echo base_url('assets/images/header/menu_line.png'); ?>"></img>
									</li >
									<li id="child201">
											<img src="<?php echo base_url('assets/images/header/search-icon1.png'); ?>"></img>
									</li>
								</ul>
							</div>
							
						</div>
						
					</div>
				</nav>