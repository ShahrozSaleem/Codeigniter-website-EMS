

<footer class="full_width">

	<div id="footer_main">
	
		<div id="footer_links" class="left">
			<ul class="left">
				<li><h2>Navigate</h2></li>
				<li><a href="">Home</a></li>
				<li><a href="">Wedding Events</a></li>
				<li><a href="">Corporate Events</a></li>
				<li><a href="">Birthday Events</a></li>
				<li><a href="">Feedback</a></li>
			</ul>
			<ul class="left">
				<li><h2>More</h2></li>
				<li><a href="">Food</a></li>
				<li><a href="">Lights</a></li>
				<li><a href="">Locations</a></li>
				<li><a href="">Countries</a></li>
				<li><a href="">Popularity</a></li>
			</ul>
			<ul class="left">
				<li><h2>Our Office</h2></li>
				<img src="<?php echo base_url('assets/images/footer/Phone-icon.png'); ?>"></img><li>+92-328-3648517</li>
				<img src="<?php echo base_url('assets/images/footer/MetroUI-Apps-Email-icon.png'); ?>"></img><li>Event.Management @gmail.com</li>
				<img src="<?php echo base_url('assets/images/footer/Location-Map-icon.png'); ?>"></img><li>3245 green town M-block, ABC 123</li>
				
			</ul>
		</div>
		
		<div id="footer_about" class="right">
			<h2>Our Purpose</h2>
			<p>
			"we are making a brand that is widely leading & recognized as a wholesome,
			complete events solution provider.
			It’s a team of young, creative, enthusiastic and dynamic professionals with
			a sparkling stream of ideas having vast experience in the field of Events & 
			Entertainments. Our goal is to give each & every event a different Meaning,
			Identity and a Vision with true professionalism to chart 
			the roads of informative & entertaining events."
			</p>
		</div>
		
	</div>
	<div id="footer_end">
	
		<ul>
			<li><a href="www.facebook.com">
				<img src="<?php echo base_url('assets/images/footer/64x64/fb.png'); ?>"></img>
			</a></li>
			<li><a href="www.gmail.com">
				<img src="<?php echo base_url('assets/images/footer/64x64/gp.png'); ?>"></img>
			</a></li>
			<li><a href="www.twitter.com">
				<img src="<?php echo base_url('assets/images/footer/64x64/tw.png'); ?>"></img>
			</a></li>
			<li><a href="www.youtube.com">
				<img src="<?php echo base_url('assets/images/footer/64x64/ut.png'); ?>"></img>
			</a></li>
			<li><a href="www.linkedin.com">
				<img src="<?php echo base_url('assets/images/footer/64x64/li.png'); ?>"></img>
			</a></li>
			<li><a href="www.pintrest.com">
				<img src="<?php echo base_url('assets/images/footer/64x64/pt.png'); ?>"></img>
			</a></li>
			<li><a href="www.tumbler.com">
				<img src="<?php echo base_url('assets/images/footer/64x64/tb.png'); ?>"></img>
			</a></li>
		</ul>
		
	</div>
	<div id="copyright" class="full_width">
		Event Management, Copyright &copy; 2017 - 2022
	</div>

</footer>



<div id="search" class="full_height full_width">
	
	<img src="<?php echo base_url('assets/images/header/x-1727490_960_720.png'); ?>" class="cancel_box right"></img>
	<img src="<?php echo base_url('assets/images/header/logo/logo_with_text.png'); ?>" class="box_logo"></img>
	
	<table>
		<form action="OO-PHP/Backend.php" method="POST">
			<tr>
				<td colspan=3>
				</td>
			</tr>
			<tr>
				<td colspan=3>
					<input  required  type="text" name="find101" placeholder="Search Your Events..."></input>
				</td>
			</tr>
			<tr >
				<td >
					<button name="b1name">Search by Event Name</button>
				</td>
				<td>
					<button name="b2id" >Search by Event ID</button>
				</td>
				<td>
					<button name="b3detail" >Search in Event Detail</button>
				</td>
			</tr>
		</form>
	</table>
</div>


<div id="menu_box" class="full_height full_width">
	
	<img src="<?php echo base_url('assets/images/header/x-1727490_960_720.png'); ?>" class="cancel_box right"></img>
	
	<table>
		<tr>
			<td id="login_menu">
				Login
			</td>
		</tr>
		<tr>
			<td id="sign_up_menu">
				Sign Up
			</td>
		</tr>
		<tr>
			<td>	
				<a href="<?php echo base_url()?>index.php/event_controller/CreateEventView">Create an Event</a>
			</td>
		</tr>
		<tr>
			<td>
				<a href="<?php echo base_url()?>index.php/event_controller/SendInvitation">Send Invitations</a>
			</td>
		</tr>
		<tr>
			<td>
				<a href="<?php echo base_url()?>index.php/event_controller/ViewAllEvent">View all Events</a>
			</td>
		</tr>
		<tr>
			<td>
				<a href="<?php echo base_url()?>index.php/user_controller/ViewAllUser">View All Users</a>
			</td>
		</tr>
		<!--<tr>
			<td>
				<a href="">Setting</a>
			</td>
		</tr>-->
		<tr>
			<td>
				<a href="<?php echo base_url();?>index.php/user_controller/Userlogout">Logout</a>
			</td>
		</tr>
	</table>
</div>


<div id="login" class="full_height full_width">
	
	<img src="<?php echo base_url('assets/images/header/x-1727490_960_720.png'); ?>" class="cancel_box right"></img>
	
	<table id="sign_in">
		<form action="<?php echo base_url();?>/index.php/user_controller/Userlogin" method="POST">
			<tr></tr>
			
			<tr>
				<img src="<?php echo base_url('assets/images/header/human-resources.png'); ?>" class="box_logo"></img>
			</tr>
			
			<tr>
				<td>
					<input  required  type="email" name="email" placeholder="Enter Your Email..."></input>
				</td>
			</tr>
			<tr>
				<td>
					<input  required  type="password" name="pswd" placeholder="Enter Your Password..."></input>
				</td>
			</tr>
			<tr>
				<td>
					<button id="sibtn1" name="sign_in_btn">Login</button>
				</td>
			</tr>
			<tr>
				<td>
					<button id="subtn2" name="sign_up_btn">Sign UP</button>
				</td>
			</tr>
			
		</form>
	</table>
	
</div>

<div id="signup" class="full_height full_width">
	
	<img src="<?php echo base_url('assets/images/header/x-1727490_960_720.png'); ?>" class="cancel_box right"></img>
	
	<table id="sign_up">
		<form action="<?php echo base_url();?>/index.php/user_controller/Sign_up" method="POST">
		
			<tr >
				<td>Name:</td>
				<td colspan="2">
					<input  required  type="text" name="name" placeholder="Enter Your First Name..."></input>
				</td>
			</tr>
			<tr >
				<td>Father Name:</td>
				<td colspan="2">
					<input  required  type="text" name="fname" placeholder="Enter Your Father Name..."></input>
				</td>
			</tr>
			
			
			<tr>
				<td>Email:</td>
				<td colspan="2">
					<input  required  type="email" name = "email" placeholder="Enter Your Email..."></input>
				</td>
			</tr>
			<tr>
				<td>Password:</td>
				<td colspan="2">
					<input  required  type="password" name="pwd" placeholder="Enter Your Password..."></input>
				</td>
			</tr>
			<tr >
				<td>Confirm Password</td>
				<td colspan="2">
					<input  required  type="password" name="c_pwd" placeholder="Confirm Your Password..."></input>
				</td>
			</tr>
			<tr >
				<td>Contact:</td>
				<td colspan="2">
					<input  required  type="text" name="contact" placeholder="Enter Your Contact No..."></input>
				</td>
			</tr>
			<tr >
				<td>Address:</td>
				<td colspan="2">
					<input  required  type="text" name="address" placeholder="Enter Your Address..."></input>
				</td>
			</tr>
			<tr >
				<td>Date Of Birth:</td>
				<td colspan="2">
					<input  required  type="date" name="DOB" placeholder="Enter Your DOB "></input>
				</td>
			</tr>
			<tr>
				<td>Gender:</td>
				<td>
					Male: <input  required  type="radio" name="gender" value="M"></input>
				</td>
				
				<td>
					Female: <input  required  type="radio" name="gender" value="F"></input>
				</td>
			</tr>
			<tr >
				<td colspan="3">
					<button name="btn_sign_up" id="btn2su">Sign Up</button>
				</td>
			</tr>
			
		</form>
	</table>
	
</div>

	
</body>

</html>