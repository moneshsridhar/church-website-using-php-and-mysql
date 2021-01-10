<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>Carmel Infant Jesus Church</title>

		<!-- Loading third party fonts -->
		<link href="fonts/novecento-font/novecento-font.css" rel="stylesheet" type="text/css">
		<link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">
		

		<!-- Loading main css file -->
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="flipcard.css">
		<!--[if lt IE 9]>
		<script src="js/ie-support/html5.js"></script>
		<script src="js/ie-support/respond.js"></script>
		<![endif]-->
		<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/emailjs-com@2/dist/email.min.js"></script>
	    <script type="text/javascript">
	        (function() {
	            // https://dashboard.emailjs.com/admin/integration
	            emailjs.init('user_3YCQbPgZFKgzIzuY4BTVb');
	        })();
	    </script>
		<script type="text/javascript">
        window.onload = function() {
            document.getElementById('contact-form-details').addEventListener('submit', function(event) {
                event.preventDefault();
                // generate a five digit number for the contact_number variable
                //this.contact_number.value = Math.random() * 100000;
                // these IDs from the previous steps
                emailjs.sendForm('service_r3dpjeo', 'template_eivnzma', this)
                    .then(function() {
                        alert('Your feedback has been sent successfully!');
                        console.log('suc');
                    }, function(error) {
                        alert('FAILED... Please retry :)', error);
                        console.log('err');
                    });
            });
        }
    	</script>

    	<!-- HISTORY -->

    	<meta name="viewport" content="width=device-width, initial-scale=1">

	</head>


	<body>
		<div class="site-content">
			<header class="site-header">
				<div class="container">
					<a href="index.php" class="branding">
						<img src="images/final.jpg"alt="" class="logo" style="border-radius: 50% " height="90" width="65">
						<h1 class="site-title"><br><br>&nbsp;&nbsp;Carmel Infant<br/>Jesus Church</h1>
					</a>
					<div class="main-navigation">
						<button class="menu-toggle"><i class="fa fa-bars"></i> Menu</button>
						<ul class="menu" >
							<?php
									if (isset($_SESSION["useruid"])) {
										echo "<li class='menu-item'><a href='events.php'>Events </a></li>";
										echo "<li class='menu-item'><a href='gallery.php'>Gallery</a></li>";
										echo "<li class='menu-item'><a href='includes/logout.inc.php'>Logout</a></li>";
									}
									else {
										echo "<li class='menu-item current-menu-item'><a href='index.php'>Homepage</a></li>";
										//echo "<li class='menu-item'><a href='#'>Activities</a></li>";
										echo "<li class='menu-item'><a href='gallery.php'>Gallery</a></li>";
										echo "<li class='menu-item'><a href='new_events.php'>Events </a></li>";
										//echo "<li class='menu-item'><a href='#'>About Us</a></li>";
										echo "<li class='menu-item'><a href='signup.php'>Sign Up</a></li>";
										echo "<li class='menu-item'><a href='login.php'>Login</a></li>";
									}
								?>
						</ul>
					</div>

					<div class="mobile-navigation" style="text-align: right;"></div>
				</div>

			</header> <!-- .site-header -->
