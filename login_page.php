<?php
session_start();
?>
<html>

<head>
	<title>
		Account Login
	</title>
	<style>
		* {
			font-size: 20px;
		}

		input {
			border: 1.5px solid #030337;
			border-radius: 4px;
			padding: 7px 30px;
		}

		input[type=submit] {
			background-color: #030337;
			color: white;
			border-radius: 4px;
			padding: 7px 45px;
			margin: 0px 60px
		}

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
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.min.css">
</head>

<body>
	<!-- <img class="logo" src="images/irctc.jpg" /> -->
	<div class="logos">
		<img class="logo1" src="images/ban.png" />

	</div>
	<h1 id="title">
		<!-- IRCTC Airways </h1> -->
		<div>
			<ul>
				<li><a href="home_page.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
				<li><a href="login_page.php"><i class="fa fa-ticket" aria-hidden="true"></i> Book Tickets</a></li>
				<li><a href="home_page.php"><i class="fa fa-plane" aria-hidden="true"></i> About Us</a></li>
				<li><a href="home_page.php"><i class="fa fa-phone" aria-hidden="true"></i> Contact Us</a></li>
				<li><a href="login_page.php"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</a></li>
			</ul>
		</div>
		<br>
		<form class="float_form" style="padding-left: 40px" action="login_handler.php" method="POST">
			<fieldset>
				<legend>Thông tin đăng nhập::-</legend>
				<strong>Tên tài khoản:</strong><br>
				<input type="text" name="username" placeholder="Enter your username" required><br><br>
				<strong>Mật khẩu:</strong><br>
				<input type="password" name="password" placeholder="Enter your password" required><br><br>
				<strong>Loại người dùng:</strong><br>
				Khách hàng <input type='radio' name='user_type' value='Customer' checked /> Người quản lý <input type='radio' name='user_type' value='Administrator' />
				<br>
				<?php
				if (isset($_GET['msg']) && $_GET['msg'] == 'failed') {
					echo "<br>
						<strong style='color:red'>Invalid Username/Password</strong>
						<br><br>";
				}
				?>
				<input type="submit" name="Login" value="Login">
			</fieldset>
			<br>
			<a href="new_user.php"><i class="fa fa-user-plus" aria-hidden="true"></i> Create New User Account?</a>
		</form>
</body>

</html>