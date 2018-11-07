<?php 
defined('BASEPATH') OR exit ('No Direct Script Access Allowed');

class Add_post_model extends CI_Model
{
	function __construct()  
      {  
         // Call the Model constructor  
         parent::__construct();  
         $this->load->database();
      }  

	function insert_post($data)
	{
		$qry = $this->db->insert('post_table',$data);
		return $qry;	
	}

	function select()
	{
		$query = $this->db->get('post_table');  
        return $query; 
	}

	function insert_post_category($data,$tablename)
	{
		$name=strtolower($tablename);
		$name=preg_replace('/\s+/', '_', $name);
		$qry = $this->db->insert($name,$data);
	}

	function update_post($data,$id,$tablename)
	{
			$name=strtolower($tablename);
			$name=preg_replace('/\s+/', '_', $name);
		 	$this->db->where('id', $id);
		 	$this->db->update($name,$data);
	}

	public function checkdata($id,$tablename)  
      {  
         //data is retrive from this query 
         $name=strtolower($tablename);
		 $name=str_replace("%20","_",$name);  
         $qry=$this->db->select('*')
                        ->where('id',$id)
                        ->get($name);

         return $qry;
      }  

    public function deletedata($id,$tablename)
      {
      	 $name=strtolower($tablename);
		 $name=preg_replace('/\s+/', '_', $name);
         $this->db->delete($name, array('id' => $id));
         

      }

      function selectcat($tablename)
	{
		 $name=strtolower($tablename);
		 $name=preg_replace('/\s+/', '_', $name); 
		 $query = $this->db->get($name);  
        return $query; 
	}

	
}

?>