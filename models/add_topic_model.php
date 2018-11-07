<?php 
defined('BASEPATH') OR exit ('No Direct Script Access Allowed');

class Add_topic_model extends CI_Model
{
	function __construct()  
      {  
         // Call the Model constructor  
         parent::__construct();  
         $this->load->database();
      } 

     public function select()  
		{  
		 //data is retrive from this query  
		 $query = $this->db->get('topic_table');  
		 return $query;  
		}

		public function selectcatwise($categoryname)  
		{  
		 //data is retrive from this query 
		 $name=strtolower($categoryname);
         $name=str_replace("%20"," ",$name);  
		 $qry=$this->db->select('*')
                        ->where('category_name',$name)
                        ->get('topic_table');

         return $qry;
		}   

	function insert_topic($data)
	{
		$qry = $this->db->insert('topic_table',$data);
		return $qry;	
	}
	
}

?>