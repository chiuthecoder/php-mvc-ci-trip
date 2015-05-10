<?php 
class Home extends CI_Controller
{
	public function index()
	{
		$this->load->model('users_model');

		$get_users = $this->users_model->show_users();
		$this->session->set_userdata('users', $get_users);

		$this->load->model('trips_model');
		$user = $this->session->userdata('user');
		$user_info['id'] = $user['id'];
		$get_trips = $this->trips_model->get_trips_by_id($user_info);
		$this->session->set_userdata('trips', $get_trips);

		$user_data['users'] = $get_users;
		$user_data['trips'] = $get_trips;

		$this->load->view('home_view', $user_data);
	}


	public function join_trip()
	{
		$this->load->model('trips_model');
		
		$trip_info['user_id'] = $this->input->post('user_id');
		$trip_info['trip_id'] = $this->input->post('trip_id');

		$this->trips_model->join_trip($trip_info);
		redirect(base_url('home'));
	}

	public function show()
	{

		$this->load->model('trips_model');
		$user = $this->session->userdata('user');
		$user_info['id'] = $user['id'];
		$get_trips = $this->trips_model->get_trips_by_id($user_info);
		$this->session->set_userdata('trips', $get_trips);

		
		$user_data['trips'] = $get_trips;

		$this->load->view('profile_view', $user_data);
	}

	public function newTrip()
	{
		$this->load->view('new_review');
	}

	public function add_trip()
	{
		$this->load->model('trips_model');
		$result = $this->trips_model->create($this->input->post());
		if($result)
		{
			redirect(base_url('home'));
		}
		else
		{
			echo "Network is not working!";
		}
	}

	public function showReview()
	{
		$this->load->model('trips_model');
		$id = $this->input->post('id');
		$trip = $this->trips_model->retrieveOne($id);
		$this->load->view('show_review', array('trip' => $trip));
	}
}
 ?>