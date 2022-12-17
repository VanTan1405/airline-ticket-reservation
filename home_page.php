<?php
session_start();
?>
<html>

<head>
	<title>
		Welcome to Airlines
	</title>
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.min.css">
	<style>
		.logos {
			width: 1230px;
			height: 100px;
		}

		.logo1 {
			float: left;
			object-fit: cover;
			width: 520px;
			padding: 10px;
		}
	</style>
</head>

<body>
	<div class="logos">
		<img class="logo1" src="images/ban.png" />

	</div>
	<!-- <img class="logo" src="images/logo2.png" width="50px" height="50px" /> -->
	<h1 id="title">
		<!-- Viet Nam Airline -->
	</h1>
	<div>
		<ul>
			<li><a href="home_page.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
			<li>
				<?php
				if (isset($_SESSION['login_user']) && $_SESSION['user_type'] == 'Customer') {
					echo "<a href=\"book_tickets.php\"><i class=\"fa fa-ticket\" aria-hidden=\"true\"></i> Book Tickets</a>";
				} else if (isset($_SESSION['login_user']) && $_SESSION['user_type'] == 'Administrator') {
					echo "<a href=\"admin_ticket_message.php\"><i class=\"fa fa-ticket\" aria-hidden=\"true\"></i> Book Tickets</a>";
				} else {
					echo "<a href=\"login_page.php\"><i class=\"fa fa-ticket\" aria-hidden=\"true\"></i> Book Tickets</a>";
				}
				?>
			</li>
			<li><a href="home_page.php"><i class="fa fa-plane" aria-hidden="true"></i> About Us</a></li>
			<li><a href="home_page.php"><i class="fa fa-phone" aria-hidden="true"></i> Contact Us</a></li>
			<li><a href="pnrall.php"><i class="fa fa-ticket" aria-hidden="true"></i> Check PNR </a></li>

			<li>
				<?php
				if (isset($_SESSION['login_user']) && $_SESSION['user_type'] == 'Customer') {
					echo "<a href=\"customer_homepage.php\"><i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i> Login</a>";
				} else if (isset($_SESSION['login_user']) && $_SESSION['user_type'] == 'Administrator') {
					echo "<a href=\"admin_homepage.php\"><i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i> Login</a>";
				} else {
					echo "<a href=\"login_page.php\"><i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i> Login</a>";
				}
				?>
			</li>
		</ul>
	</div>
	<div class="container">
		<!-- <div class="welcome_text">Welcome to IRCTC !</div> -->
		<img src="images/maybay1.jpg" width=100% height="500px">
	</div>
	<!--check out addling local host in links and other places

			shift login/logout buttons to right side
		-->
</body>

</html>