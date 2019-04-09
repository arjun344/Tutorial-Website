<?php 

defined('BASEPATH') OR exit ('No Direct Script Access Allowed');

class TestingWeb extends CI_Controller
{
	public function __construct()
		{
			parent::__construct();
			$this->load->library("unit_test");	
		}

}

?>