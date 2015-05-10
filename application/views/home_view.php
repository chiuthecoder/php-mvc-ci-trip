<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<title>Travel Dashboard</title>
	<link rel="stylesheet" type="text/css" href="/assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/assets/css/style.css">
</head>
<body>
<div class="container">
<div class="row">
<div class="col-md-12">
		<div id='header'>
<?php 
			$logged_user = $this->session->userdata('user');
			$users = $this->session->userdata('users');
			$trips = $this->session->userdata('trips');
			echo "<h1> Hello, ".$logged_user['name']."</h1>";

?>
		<a class="btn btn-default" href='<?= base_url('login/logout') ?>'>Logout</a>
		<a class="btn btn-default" href="/trips/newTrip">Add a new Trip</a>
		</div>
		<div id='content'>
			<h2>Your Trip Schedules</h2>
			<hr>
<?php 
			// var_dump($this->session->all_userdata());
			if(!empty($trips))
			{ 
?>
			<table>
				<thead>
					<tr>
						<th>Name</th>
						<th>Description</th>
						<th>Date Start</th>
						<th>Date End</th>
					</tr>
				</thead>
				<tbody>
<?php 
				
					foreach($trips as $trip)
					{
?>
				<tr>
					<td>
						<form method="post" action="/trips/showReview/<?= $trip['id'] ?>">
							<input type="hidden" name="id" value="<?= $trip['trip_id'] ?>">
							<input class="link" type="submit" value="<?= $trip['tripName'] ?>">
						</form>

					</td>
					<td><?= $trip['description'] ?></td>
					<td><?= $trip['date_start'] ?></td>
					<td><?= $trip['date_end'] ?></td>
				</tr>
<?php
					}
			}
			else
			{
				echo "<h5>You currently dont have any trips, you should add some trips</h5>";
			}
?>
				</tbody>
			</table>
			<h2>Other User's Travel Plans</h2>
			<hr>
			
			<table>
				<thead>
					<tr>
						<th>User Name</th>
						<th>Trip Name</th>
						<th>Trip Description</th>
						<th>Date Start</th>
						<th>Date End</th>
						<th>Join?</th>
					</tr>
				</thead>
				<tbody>
<?php 
				
				foreach($users as $user)
				{
	
?>							
<?php
								if($logged_user['id'] == $user['id'] )
								{
									continue;
								}
								$found = false;
								foreach ($trips as $trip) 
								{
									if($trip['id'] == $user['id'])
									{
										$found = true;
									}

								}
								if($found == true)
								{
									continue;
								}
?>
							<tr>
							<td>
								<form method="post" action="/trips/showProfile/<?= $user['id'] ?>">
									<input type="hidden" name="users_id" value="<?= $user['users_id'] ?>">
									<input type="hidden" name="id" value="<?= $user['trip_id'] ?>">
									<input class="link" type="submit" value="<?= $user['name'] ?>">
								</form>

							</td>
							<td><?= $user['tripName'] ?></td>
							<td><?= $user['description'] ?></td>
							<td><?= $user['date_start'] ?></td>
							<td><?= $user['date_end'] ?></td>
							<td>
								<form action='<?= base_url('home/join_trip') ?>' method='post'>
									<input type='hidden' name='id' value='<?= $user['user_id'] ?>'>
									<input type='hidden' name='trip_id' value='<?= $user['trip_id'] ?>'>
									<input type='hidden' name='name' value='<?= $trip['name'] ?>'>
									<input type='hidden' name='user_id' value='<?= $logged_user['id'] ?>'>
									<input type='submit' id='add' value='Join this Trip'>
			 					</form>
<?php 							

?>
		 					</td>
							<tr>
<?php  							
						
				}
?>
				</tbody>
			</table>
		</div>
	</div>
</div>
</div>
</body>
</html>