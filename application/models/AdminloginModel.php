<?php
	class AdminloginModel extends CI_Model{

		public function logincheck($username,$password){
			$query = $this->db->where(['admin_username' => $username, 'admin_password' => $password])
						->get('admin');
			// echo $this->db->last_query(); die;
						if($query->num_rows()){
							return $query->row()->admin_id_pk;
						}
						else{
							return false;
						}

		}



	}



?>
