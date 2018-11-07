<?php 
defined('BASEPATH') OR exit ('No Direct Script Access Allowed');

class Add_admin_model extends CI_Model
{
	function insert_admin($data)
	{
		$this->load->database();
		$qry = $this->db->insert('admin',$data);
		return $qry;	
	}
}

?>