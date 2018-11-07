<?php  
   class dropdown_category extends CI_Model  
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
         $query = $this->db->get('category_table');  
         return $query;  
      }  

      public function selectlimited()  
      {  
         //data is retrive from this query  
         $query = $this->db->get('category_table');  
         return $query;  
      }  

      public function check($id)  
      {  
         //data is retrive from this query  
         $qry=$this->db->select('*')
                        ->where('category_id',$id)
                        ->get('category_table');

         return $qry;
      }  

      public function delete($id,$name)
      {
         $this->db->delete('category_table', array('category_id' => $id));
         

      }
   }  
?>  