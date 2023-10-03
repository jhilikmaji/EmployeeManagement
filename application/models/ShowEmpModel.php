<?php 
 class ShowEmpModel extends CI_Model {

	public function viewEmployeeData(){
		
		$query = $this->db->select('*')
					->get('employee');

		return $query->result();
	}

	public function getEmployeeData($data1 , $data2){
		$query = $this->db->where(['emp_code'=>$data1, 'emp_dob'=>$data2])
				->get('employee');

		if($query->num_rows()){
			return $query->row()->emp_code;
		}
		else{
			return false;
		}
	}

	public function viewEmpData(){
		$id= $this->session->userdata('userInfo');
		$query = $this->db->select('*')
				->from('employee')
					->where(['emp_code'=>$id])
					->get();
				

		return $query->result();
	}

	public function genderFormat(){
		$sql = "select count(emp_gender) from employee group by emp_gender";
		$query = $this->db->query($sql);
		return $query->result();
	}

	public function activeFormat(){
		$plsql = "select count(active) from employee group by active";
		$query = $this->db->query($plsql);
		return $query->result();
	}

	public function loginDetails(){
		
		$uId = $this->session->userdata('userInfo')
		$plsql = "INSERT INTO login_info (
			login_id,
			login_date
			)
		VALUES
			($uId,current_timestamp);"
		// $query = $this->db->insert('login_info',$checkLoginArray)

		$query = $this->db->query($plsql);
		
		return $this->db->insert_id();
	}


 }




?>
