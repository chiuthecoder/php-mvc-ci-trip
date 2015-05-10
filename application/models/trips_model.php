<?php 
class Trips_Model extends CI_Model
{

	public function join_trip($trip_info)
	{
		$query = "INSERT INTO trips (users_id, trip_id)
				  VALUES (?, ?)";
		$values = array($trip_info['user_id'], $trip_info['trip_id']);
		return $this->db->query($query, $values);
	}

	public function get_trips_by_id($user_info)
	{
		$query = "SELECT users.id, users.name, email, trips.users_id, trips.trip_id, trips.name AS tripName, trips.description, DATE_FORMAT(date_start, '%M %d, %Y') AS date_start, DATE_FORMAT(date_end, '%M %d, %Y') AS date_end FROM users
				  LEFT JOIN trips ON trips.users_id = users.id
				  WHERE trips.users_id = ?";
		$values = array($user_info['id']);
		return $this->db->query($query, $values)->result_array();
	}

	public function create($content)
	{
		$query = "INSERT INTO trips (users_id, name, description, date_start, date_end, created_at, updated_at) VALUES (?, ?, ?, ?, ?, NOW(), NOW())";
		$result = $this->db->query( $query, array($content['users_id'], $content['name'],$content['description'],$content['date_start'],$content['date_end']));
		return $result;	
	}

	public function retrieveOne($id)
	{
		$query = "SELECT * FROM trips WHERE trip_id = $id";
		$trip = $this->db->query( $query, array($id))->row_array();
		return $trip;	
	}


}
 ?>