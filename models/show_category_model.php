<?php  
   class Show_category_model extends CI_Model  
   {  
      function __construct()  
      {  
         // Call the Model constructor  
         parent::__construct();  
         $this->load->database();
      }  
      //we will use the select function  
      public function select($categoryname)  
      {  
         $name=strtolower($categoryname);
         $name=str_replace("%20","_",$name); 
         $name=preg_replace('/\s+/', '_', $name);   
         $query = $this->db->get($name);  
         return $query;  
      }  

      public function selectcontentlib()  
      {

         $categoryname=$this->db->select('category_name')
                        ->get('category_table');
         $catnamearray = array();
         $i=0;
      
         foreach ($categoryname->result() as $row)
         {
            $name=strtolower($row->category_name); 
            $name=preg_replace('/\s+/', '_', $name);
             $catnamearray[$i]=$name;
             $i=$i+1;
         }

         $queryfin = array();
         $i=0;
         $j=0;

         foreach ($catnamearray as $value) 
         {

            $query = $this->db->get($catnamearray[$i]);

               foreach ($query->result() as $row)
               {
                   $queryfin[$i][$j]=$row->topic;
                   $j=$j+1;
               }
            $i=$i+1;  
         } 

         return $queryfin;
      }  

      public function getcatname()  
      {  
         //data is retrive from this query  
         $query = $this->db->get('category_table');  
         $catnamearray = array();
         $i=0;
      
         foreach ($query->result() as $row)
         {
             $catnamearray[$i]=$row->category_name;
             $i=$i+1;
         }

         return $catnamearray;
      }  

      public function selectcatwise($categoryname,$topicname)  
      {  
         $name=strtolower($categoryname);
         $name=str_replace("%20","_",$name); 
         $name=preg_replace('/\s+/', '_', $name);

         $tname=str_replace("%20"," ",$topicname);    
         $query = $this->db->select('*')
                        ->where('topic_group',$tname)
                        ->get($name);  
         return $query;  
      }  

      public function selectdata($categoryname)  
      {  
         $name=strtolower($categoryname);
         $name=str_replace("%20","_",$name);
         $name=preg_replace('/\s+/', '_', $name);  
         $querydata = $this->db->select('*')
                           ->get($name,1);
         return $querydata;  
      }  

      public function selectcatwisedata($categoryname,$topicname)  
      {  
         $name=strtolower($categoryname);
         $name=str_replace("%20","_",$name);
         $name=preg_replace('/\s+/', '_', $name);

         $tname=str_replace("%20"," ",$topicname);   
         $querydata = $this->db->select('*')
                        ->where('topic_group',$tname)
                        ->get($name,1); 
         return $querydata;  
      }  

      public function selectalldata($id,$categoryname)  
      {  
         $name=strtolower($categoryname);
         $name=str_replace("%20","_",$name);  
         $querydata = $this->db->select('*')
                        ->where('id',$id)
                        ->get($name);

         return $querydata;  
      }  
   }  
?>  