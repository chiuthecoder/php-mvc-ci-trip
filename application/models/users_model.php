<?php 

class Users_Model extends CI_Model
{
	function add_user($user)
	{
		$query = "INSERT INTO users (name, email, password, created_at, updated_at)
				  VALUES (?, ?, ?, NOW(), NOW())";
		$values = array($user['name'], $user['email'], $user['password']);
		return $this->db->query($query, $values);
	}

	function login_user($email)
	{
		$query = "SELECT * FROM users WHERE email = ?";

		return $this->db->query($query, array($email))->row_array();
	}

	function show_users()
	{
		$query = "SELECT users.id, users.name, email, trips.users_id, trips.trip_id, trips.name AS tripName, trips.description, DATE_FORMAT(date_start, '%M %d, %Y') AS date_start, DATE_FORMAT(date_end, '%M %d, %Y') AS date_end FROM users
				  LEFT JOIN trips ON trips.users_id = users.id";
		return $this->db->query($query)->result_array();
	}


}
 ?>