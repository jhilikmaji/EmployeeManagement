<?php

	class CreateEmployeeModel extends CI_Model {

		public function createEmp($empdata){

			$query = $this->db->insert('employee', $empdata);
			return $this->db->insert_id();

		}
	}




?>
