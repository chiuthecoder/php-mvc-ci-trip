<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Destination</title>
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
	<a class="btn btn-default"  id='logout' href='<?= base_url('login/logout') ?>'>Logout</a>
	<div class="wrapper">
		<h2><?= $trip['tripName'] ?></h2>
		<div class="container">			
			<p>Planned By: <?= $trip['name'] ?></p>	
			<p>Description: <?= $trip['description'] ?></p>
			<p>Travel Date From: <?= $trip['date_start'] ?></p>
			<p>Travel Date to: <?= $trip['date_end'] ?></p>


		</div>

		
	</div>
</div>
</div>
</div>
</body>
</html>