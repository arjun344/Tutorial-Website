<?php 
defined('BASEPATH') OR exit ('No Direct Script Access Allowed');

class Login_controller extends CI_Controller
{
	function __construct()
	{
		parent::__construct();


		if($this->session->userdata('id'))
		{
			return redirect('Admin_controller');
		}
		
	}

	function index()
	{
	
		$this->load->view('admin/admin_login/login') ;
		
	}

	function login_pro()
	{
		
        $name = $this->input->post('Username');
        $pass = $this->input->post('Password');

        $this->load->model('login_model');
		$result = $this->login_model->admin_login($name,$pass);

		if($result)
		{
			$id=$result->id;
			$this->session->set_userdata('id',$id);
			return redirect('Admin_controller');
		}

		elseif ($name='') 
		{
			$this->session->set_flashdata('blank_error', 'All Fields Required !');
			return redirect('Login_controller');
		}

		elseif ($pass='') 
		{
			$this->session->set_flashdata('blank_error', 'All Fields Required !');
			return redirect('Login_controller');
		}

		else
		{
			 $this->session->set_flashdata('login_error', 'Invalid Username or Password');
			 return redirect('Login_controller');
		}


	}
}
