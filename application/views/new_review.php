<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Add Plan</title>
	<link rel="stylesheet" type="text/css" href="/assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/assets/css/style.css">
</head>
<body>
<div class="container">
<div class="row">
<div class="col-md-12">
<?php 
			$logged_user = $this->session->userdata('user');
			$users = $this->session->userdata('users');
			$trips = $this->session->userdata('trips');
			echo "<h3> Hello, ".$logged_user['name']."</h3>";

?>
		<a class="btn btn-default" href="/home">Home</a>
		<a class="btn btn-default" href='<?= base_url('login/logout') ?>'>Logout</a>
		<div class="wrapper">
		<h1>Add a Trip</h1>

		<div class="container">
			<form method="post" action="/home/add_trip">
				<input type='hidden' name='users_id' value='<?= $logged_user['id'] ?>'>
				<label>Destination</label>
				<input type="text" name="name">
				<label>Description</label>
				<input type="text" name="description">
				<label>Travel Date From</label>
				<input type="date" name="date_start">
				<label>Travel Date From</label>
				<input type="date" name="date_end">
				<input type="submit" value="Create">
				
			</form>
		</div>
	</div>
</div>
</div>
</div>
</body>
</html>