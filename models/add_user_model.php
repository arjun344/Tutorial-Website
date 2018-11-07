<?php 
defined('BASEPATH') OR exit ('No Direct Script Access Allowed');

class Add_user_model extends CI_Model
{
	function insert_user($data)
	{
		$this->load->database();
		$qry = $this->db->insert('user',$data);
		return $qry;	
	}
}

?>