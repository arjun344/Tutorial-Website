<?php 
defined('BASEPATH') OR exit ('No Direct Script Access Allowed');

class Add_category_model extends CI_Model
{
	function insert_category($data)
	{
		$this->load->database();

		$qry = $this->db->insert('category_table',$data);
		return $qry;	
	}	
	
}

?>