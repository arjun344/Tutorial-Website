<?php  
   class getuserdata extends CI_Model  
   {  
      function __construct()  
      {  
         // Call the Model constructor  
         parent::__construct();  
         $this->load->database();
      }  
      //we will use the select function  
      public function select($email)  
      {  
        $qry=$this->db->select('*')
                        ->where('username',$email)
                        ->get('user');

         return $qry;
      }  
   }  
?>  