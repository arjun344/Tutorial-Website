<?php 
defined('BASEPATH') OR exit ('No Direct Script Access Allowed');

class Add_file_model extends CI_Model
{
	function __construct()  
      {  
         // Call the Model constructor  
         parent::__construct();  
         $this->load->database();
      } 

     public function select($categoryname)  
		{  
		 //data is retrive from this query 
		 $name=str_replace("%20"," ",$categoryname); 
		 $query = $this->db->select('*')
                        ->where('category_name',$name)
                        ->get('assignment_table');  
		 return $query;  
		}

	public function select1($categoryname)  
		{  
		 //data is retrive from this query 
		 $name=str_replace("%20"," ",$categoryname); 
		 $query = $this->db->select('*')
                        ->where('category_name',$name)
                        ->get('assignment_table',1);  
		 return $query;  
		}

	function insert_file($data)
	{
		$qry = $this->db->insert('assignment_table',$data);
		return $qry;	
	}

	 public function check($id)  
      {  
         //data is retrive from this query  
         $qry=$this->db->select('*')
                        ->where('id',$id)
                        ->get('assignment_table');

         return $qry;
      } 

      function delete_file($id)
	{
		$this->db->delete('assignment_table', array('id' => $id));	
	} 
	
}

?>