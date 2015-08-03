<?php 
	
	class new_project_model extends CI_Model{
		
		public function members(){
			
			// mysql_query("SELECT * FROM members");
			
			$this->db->select("*");
			$this->db->get("members");
			
			echo $this->db->last_query();
			
			
		} 
	}
	
?>