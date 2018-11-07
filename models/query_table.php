<?php  
   class Query_table extends CI_Model  
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
         $query = $this->db->get('query_table_admin');  
         return $query;  
      }  
   }  
?>  