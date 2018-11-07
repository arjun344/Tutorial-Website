<?php  
   class Admin_model extends CI_Model  
   {  
      function __construct()  
      {  
         // Call the Model constructor  
         parent::__construct();  
         $this->load->database();
      }  
      //we will use the select function  
      public function select()  
      {  
         //data is retrive from this query  
         $query = $this->db->get('admin');  
         return $query;  
      }  

      public function check($kid)  
      {  
         //data is retrive from this query  
         $qry=$this->db->select('*')
                        ->where('id',$kid)
                        ->get('admin');
         return $qry;
      } 

      public function delete($id)
      {
         $this->db->delete('admin', array('id' => $id));
      } 
   }  
?>  