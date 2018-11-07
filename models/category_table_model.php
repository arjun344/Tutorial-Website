<?php 
defined('BASEPATH') OR exit ('No Direct Script Access Allowed');

class Category_table_model extends CI_Model
{
	function create_category_table($tablename)
	{
		$this->load->database();
		$tablename=preg_replace('/\s+/', '_', $tablename);

		$query = $this->db->query("CREATE TABLE IF NOT EXISTS $tablename(
								    id int AUTO_INCREMENT,
								    topic varchar(255) NOT NULL,
								    category_name varchar(255) NOT NULL,
								    topic_group varchar(255) NOT NULL,
								    data LONGTEXT,
								    PRIMARY KEY (id)
								);");
	}

	
}

?>