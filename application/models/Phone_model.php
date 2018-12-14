<?php 
	class Phone_model extends CI_Model {

		public function savePhone($data){
			$this->db->insert('tb_product',$data);
			//$this->db->insert('tb_student_profile',$data);
		}
		public function select_all($data){
			$this->db->select('*'); 
			$this->db->from('tb_product'); 

			$result = $this->db->get();
			$result = $result->result();
			return $result; 
		}

		public function deletePhone($id){
			$this->db->where('id',$id); 
			$this->db->delete('tb_product'); 
		}

	}
?>