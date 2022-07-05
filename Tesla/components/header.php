<?php session_start(); ?>

<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-compatible" content="IE-edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">	
	<title><?php echo isset($title) ? $title : 'Tesla'  ?></title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
	
</head>

<body>
	<div class="sidebar-social-icons">
		<a href="#"><i class="fa fa-facebook"></i></a>
		<a href="#"><i class="fa fa-twitter"></i></a>
		<a href="#"><i class="fa fa-instagram"></i></a>
		<a href="#"><i class="fa fa-youtube"></i></a>
	</div>
	<section>
		<nav>
			<a href="#" class="logo"><img src="images/tesla_logo.png" width="66" height="57" alt=""><span class="logo-header">Tesla</span></a>

			<ul> 
				<li><a href="index.php" class="active">Home</a></li>
				<li><a href="#">Contact Us</a></li>
				<li><a href="about-us.php">About Us</a></li>
				<li><a href="#">Team</a></li>
				<li><a href="#"><i class="fa fa-user" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
				<?php
					if (isset($_SESSION['user_id'])) {
						echo '<li>Welcome '.$_SESSION['user_name'].'</li><li><a href="logout.php">Logout</a></li>';
					}
				?>
			</ul>

			<div class="toggle"></div>
		</nav>
	</section>
	<div class="container">
		
	
	