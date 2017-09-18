<?php 
	
	class View_model extends CI_Model{


		public function tengok($userid){


			$this->db->select('*');
			
			$this->db->where('id',$userid);
			$query = $this->db->get('daftar');

			// $query = $this->db->query("SELECT * from daftar where id = '$userid'");

			return $query->result();

		}










	}




 ?>