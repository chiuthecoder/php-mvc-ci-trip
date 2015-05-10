<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Trip extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	public function create($content)
	{
		$query = "INSERT INTO trips (name, description, date_start, date_end, created_at, updated_at) VALUES (?, ?, ?, ?, NOW(), NOW())";
		$result = $this->db->query( $query, array($content['name'],$content['description'],$content['date_start'],$content['date_end']));
		return $result;	
	}

	public function retrieveAll()
	{
		$query = "SELECT * FROM trips";
		$trips = $this->db->query( $query)->result_array();
		return $trips;	
	}

	public function retrieveOne($id)
	{
		$query = "SELECT users.id, users.name, email, trips.users_id, trips.trip_id, trips.name AS tripName, trips.description, DATE_FORMAT(date_start, '%M %d, %Y') AS date_start, DATE_FORMAT(date_end, '%M %d, %Y') AS date_end FROM users
				  LEFT JOIN trips ON trips.users_id = users.id WHERE trip_id = $id";
		$trip = $this->db->query( $query, array($id))->row_array();
		return $trip;	
	}


}
