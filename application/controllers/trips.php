<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Trips extends CI_Controller {

	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('trip');
	}


	public function newTrip()
	{
		$this->load->view('new_review');
	}


	public function showReview()
	{
		$id = $this->input->post('id');
		$trip = $this->trip->retrieveOne($id);
		$this->load->view('show_review', array('trip' => $trip));
	}

	public function showProfile()
	{
		$id = $this->input->post('id');
		$trip = $this->trip->retrieveOne($id);
		$this->load->view('profile_view', array('trip' => $trip));
	}


}
