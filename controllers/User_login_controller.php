<?php 
defined('BASEPATH') OR exit ('No Direct Script Access Allowed');

class User_login_controller extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		
		if($this->session->userdata('userid'))
		{
			return redirect('user_controller');
		}
		
	}

	function index()
	{
		$this->load->model('dropdown_category');
		$data['k']=$this->dropdown_category->selectlimited();
		$this->load->view('user/Main Content/landing_page.php',$data);	
		
	}

	function login_pro()
	{
		
        $name = $this->input->post('Username');
        $pass = $this->input->post('Password');

        $this->load->model('login_model');
		$result = $this->login_model->user_login($name,$pass);

		if($result)
		{
			$id=$result->id;
			$this->session->set_userdata('userid',$id);
			$this->session->set_userdata('username',$name);
			$this->load->model('getuserdata');
			$this->load->model('dropdown_category');
			$data['k']=$this->dropdown_category->selectlimited();
			$data['userdata'] = $this->getuserdata->select($name);
			$this->load->view('user/Main Content/landing_page.php',$data);
		}

		 else if(is_null($name) || is_null($pass))
		 {
		 	$this->session->set_flashdata('blank_error', 'All Fields are Required');
		 	return redirect('user_controller');
		 }

		else
		{
			 $this->session->set_flashdata('login_error', 'Invalid Username or Password');
			 return redirect('user_controller');
		}


	}

	}

