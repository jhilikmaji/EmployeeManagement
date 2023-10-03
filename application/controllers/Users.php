<?php

class Users extends CI_Controller {

	public function index(){
		$this->load->view('Employee/Employee_login');
	}
	public function userLogin(){

		if($this->form_validation->run('employee_login_rules')){

			$username = $this->input->post('eployeeId');
			$password = $this->input->post('password');
			$date = strtotime($password);
			$formatting = date('Y-m-d', $date);

			$this->load->model('ShowEmpModel');
			$checkloginuser = $this->ShowEmpModel->getEmployeeData($username,$formatting);
			if($checkloginuser){
				//set session
				$this->session->set_userdata('userInfo',$username);
				// $userId = $this->session->userdata('userInfo')
				// $checkLoginArray = [
				// 	'login_id' => $userId,
				// 	'login_date'=> date('Y-m-d');
				// ];
				// $this->load->model('ShowEmpModel');
				// $valuelogin = $this->ShowEmpModel->loginDetails();
				// if($valuelogin){
				// 	echo "pass";
				// }
				// else{
				// 	echo "not";
				// }
				redirect('Users/userDashboard');
				$this->userDashboard();
				return;
			}
			else{
				print "Error";
			}
		}
	}
	public function userDashboard(){
		
		$this->load->model('ShowEmpModel');
		$viewdata = $this->ShowEmpModel->viewEmpData();
		// $valuelogin = $this->ShowEmpModel->loginDetails();
		// 		if($valuelogin){
		// 			echo "pass";
		// 		}
		// 		else{
		// 			echo "not";
		// 		}
	
			$this->load->view('Employee/Employee_Dashboard',['viewdata'=>$viewdata]);
			// $this->load->view('Organization/Organization_dashboard',['employeeData'=>$employeeData]);
		
	}

}

?>
