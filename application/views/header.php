<html>

<head>
	<link rel="stylesheet" type="text/css" href='<?php echo base_url("assets/css/style.css"); ?>' />
	<link rel="stylesheet" type="text/css" href='<?php echo base_url("assets/css/other_style.css"); ?>' />
	<link rel="stylesheet" type="text/css" href='<?php echo base_url("assets/css/event.css"); ?>' />
	
	
	
	
	<!--
	
	<link rel="stylesheet" type="text/css" href='<?php echo base_url()?>assets/css/event.css"' />
	
	<meta http-equiv="refresh" content="1">
	-->
	
	<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>-->
	<script src='<?php echo base_url("assets/js/jquery-3.2.1.min.js"); ?>' ></script>
	<script src='<?php echo base_url("assets/js/validation.js"); ?>' ></script>
	<script src='<?php echo base_url("assets/js/slider.js"); ?>' ></script>
	<script src='<?php echo base_url("assets/js/services_effect.js"); ?>' ></script>
	<script src='<?php echo base_url("assets/js/search_menu.js"); ?>' ></script>
	<script src='<?php echo base_url("assets/js/extra_functionality.js"); ?>' ></script>
	<script src='<?php echo base_url("assets/js/chat.js"); ?>' ></script>
	
	<!--
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="C:\Users\Shahroz\Desktop\Event Management system\\jquery-3.2.1.min.js"></script>
	<script src="validation.js"></script>
	<script src="slider.js"></script>
	<script src="services_effect.js"></script>
	<script src="search_menu.js"></script>
	<script src="extra_functionality.js"></script>
	<script src="chat.js"></script> -->
	
</head>

<body>

	<?php
		include('chat.php');
	?>

<header >

	<div id="header_container" class="full_width">
		
			<div id="nav_cover">
			
				<?php
					//require('nav.php');
					$this->load->view('nav.php');
				?>
			
			</div >
			
			<div id="s1" class="content left">
				<h3>
					Hire Us
				</h3>
				<h1>
					We are Best
					for your next Event
					<br>
					<br>
					+92-012-3445678
				</h1>
			</div>
		
	</div>
</header>