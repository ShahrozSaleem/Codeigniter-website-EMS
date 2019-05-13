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
										<!--<a href="<?php echo base_url()?>/index.php/Home">Home </a>-->
										<?php
											if (session_status() == PHP_SESSION_NONE) {
												session_start();
											}
											if($this->session->userdata('session_email')){
												?>
												<a href="<?php echo base_url();?>index.php/user_controller/Userlogout">Logout</a>
												<?php
											}
											else{
												?>
												<div id="home_login" >Login</div>
												
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
									<li>
										<a href="#who_we_are">About</a>
									</li>
									<li>
										<a href="#s4">Our Team</a>
									</li>
									<li>
										<a href="#services">Service</a>
									</li>
									<li>
										<a href="#work">Work</a>
									</li>
									<li>
										<a href="#s7">Contact</a>
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