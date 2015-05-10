<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
	<title>Login/Registration</title>
	<link rel="stylesheet" type="text/css" href="/assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/assets/css/style.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1>Welcome! </h1>
				<hr>
				<div id='alerts'>
<?php
				echo "<div id='success'>".$this->session->flashdata('success')."</div>";
				echo "<div id='error'>".$this->session->flashdata('errors')."</div>";
?>
				</div>
			</div>
			<div class="col-md-6">
				<div id='header'>
					<h2>Register</h2>
				</div>
				<div id='register'>
					<form action='<?= base_url('register/registration') ?>' method='post'>
						<p><b>Name:</b><br> <input type='text' name='name'></p>
						
						<p><b>Email Address:</b><br> <input type='text' name='email'></p>
						<p><b>Password:</b><br> <input type='password' name='password'></p>
						<p><b>Confirm Password:</b><br> <input type='password' name='confirm_password'></p>
						
						<input id='add' type='submit' value='Register'>
					</form>
				</div>	
			</div>
			<hr>
			<div class="col-md-6">
				<div id='header'>
					<h2>Login</h2>
				</div>
				<div id='login'>
					<form action='<?= base_url('login/signin') ?>' method='post'>
						<p><b>Email:</b><br> <input type='text' name='email'></p>
						<p><b>Password:</b><br> <input type='password' name='password'></p>
						<input type='submit' id='add' value='Login'>
					</form>
				</div>
			</div>
		</div>
	</div>
	</body>
</html>