<?php 
defined('BASEPATH') OR exit ('No Direct Script Access Allowed');

class login_model extends CI_Model
{
	function admin_login($name,$pass)
	{
		$this->load->database();

		$query = $this->db->select()
				 ->where(['username'=>$name,'password'=>$pass])
				 ->get('admin');

		return ($query->row());
	}

	function user_login($name,$pass)
	{
		$this->load->database();

		$query = $this->db->select()
				 ->where(['username'=>$name,'password'=>$pass])
				 ->get('user');

		return ($query->row());
	}
}