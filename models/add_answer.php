<?php 
defined('BASEPATH') OR exit ('No Direct Script Access Allowed');

class Add_answer extends CI_Model
{
	function __construct()  
      {  
         // Call the Model constructor  
         parent::__construct();  
         $this->load->database();
      }  

	function insert_answer($data)
	{
		$qry = $this->db->insert('query_answer',$data);
		return $qry;	
	}

	function change_status($data,$id)
	{
		 $this->db->where('query_id', $id);
		 $this->db->update('query_table_admin',$data);
	}

	function select()
	{
		$query = $this->db->get('query_answer');  
        return $query; 
	}
}

?>