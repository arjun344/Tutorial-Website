<?php  
   class Query_answer extends CI_Model  
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
         $query = $this->db->get('query_data_table');  
         return $query;  
      }  

      function answer($id)
      {
         $qry=$this->db->select('*')
                        ->where('query_id',$id)
                        ->get('query_data_table');

         return $qry->row();
      }
   }  
?>  