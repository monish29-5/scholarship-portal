<?php
error_reporting(0);
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Scholaro</title>
<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen">
	<link rel="stylesheet" href="assets/css/style.css">
	<link href='https://fonts.googleapis.com/css?family=Abril Fatface' rel='stylesheet'>
</head>
<body>
<div class="navbar navbar-inverse">
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
				<a class="navbar-brand" href="index.php">
                Scholaro
					</a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right mainNav">
					
					<?php
					
					if(isset($_SESSION['sid']))
					{
					echo '<li class="active"><a href="staffdashboard.php">Staff Dashboard</a></li>';
					}
					?>
					<?php
					if(isset($_SESSION['aid']))
					{
					echo '<li class="active"><a href="admindashboard.php">Add Scholarship</a></li>';
					echo '<li class="active"><a href="view_scholarship.php">View Scholarship</a></li>';
					echo '<li class="active"><a href="view_user.php">View Students</a></li>';
					echo '<li class="active"><a href="viewapply_reg_scholarship.php">Approval scholarship</a></li>';
					}
					?>
					<?php
					if(isset($_SESSION['stid']))
					{
					echo '<li class="active"><a href="studentdashboard.php">Student Dashboard</a></li>';
					echo '<li class="active"><a href="viewreg_scholarship.php">View Applied Scholarship</a></li>';
					echo '<li class="active"><a href="viewapply_reg_scholarship1.php">View Approval</a></li>';
					}
					else if(($_SESSION['sid']=='')&&($_SESSION['aid']=='')&&($_SESSION['stid']==''))
					{
					?>
					<li><a href="admin_login.php">Admin Login</a></li>
					<li><a href="student_register.php">Student Register</a></li>
					<li><a href="student_login.php">Student Login</a></li>
					<?php
					}
					?>
					<li><a href="logout.php">Logout</a></li>
				</ul>
			</div>
			<!--/.nav-collapse -->
		</div>
	</div>
	<header id="head">
		
	</header>


