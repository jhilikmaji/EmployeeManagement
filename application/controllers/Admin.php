<?php

class Admin extends CI_Controller{

	public function index()
	{
		$this->load->view('Organization/Organization_login');
	}

// Organization login

	public function login(){
	
		if($this->form_validation->run('organization_login rules')){
			$OrEmail = $this->input->post('username');
			$OrPassword = $this->input->post('password');

			$this->load->model('AdminloginModel');
			$checkAdmin = $this->AdminloginModel->logincheck($OrEmail,$OrPassword);
			// echo $checkAdmin; die;
			if($checkAdmin){
				// $this->load->view('Organization/Organization_dashboard');
				 $this->session->set_userdata('adminId',$checkAdmin);
				//  echo $this->session->userdata('adminId');
				// print_r($_SESSION);
				// echo $checkAdmin; die;
				redirect('Admin/welcomePage');
				$this->welcomePage();
				return;
			}
			else{
				// $msg = '<div class="alert alert-danger> User Name or Password not matched </div>';
				//  echo "<div class='alert alert-danger'> User Name or Password not matched </div>";
				$this->index();
				return;
			}

		}
		else{
			echo "error" ;
			$this->index();
			// redirect('Admin/index');
			return;
		}	
	}

	//Open add employee page (connected with organization_dashboard button)
	public function welcomePage(){
		$this->load->model('ShowEmpModel');
		$employeeData = $this->ShowEmpModel->viewEmployeeData();
		$empChartData = $this->ShowEmpModel->genderFormat();
		$empActiveData = $this->ShowEmpModel->activeFormat();

		// echo $employeeData; die;
		$this->load->view('Organization/Organization_dashboard',['employeeData'=>$employeeData,'empChartData'=>$empChartData,'empActiveData'=>$empActiveData]);
	}

	public function addEmployee(){
		$this->load->view('Organization/Create_Employee');
	}

	public function addEmployeeValidation(){

		if($this->form_validation->run('create_Employee_rules')){
			$this->load->helper('string');
			//FOR STORING DATE AND TIME
			$now = new DateTime();
			$now->setTimezone(new DateTimezone('Asia/Kolkata'));
			// echo $now->format('Y-m-d H:i:s');
			$add_date = $now->format('Y-m-d');
			$add_time = $now->format('H:i:s');

			// generate random number
			
			$year = date("Y");
			$random_string = random_string('alpha',  4);
			$random_number = random_string('numeric',  4);
			$uniq_number = 'EMPCODE'.$year.$random_string.$random_number;
			$admin =  $this->session->userdata('adminId');
			$arrayOfEmpData = [
				'emp_first_name' => $this->input->post('first_name'),
				'emp_middle_name' => $this->input->post('middle_name'),
				'emp_last_name' => $this->input->post('last_name'),
				'emp_dob' => $this->input->post('dob'),
				'emp_email' => $this->input->post('email'),
				'emp_mobile_no' => $this->input->post('phone_number'),
				'emp_gender' => $this->input->post('gender'),
				'emp_code' => $uniq_number,
				'create_user_date' => $add_date,
				'created_time' => $add_time,
				'admin_id_fk' => $admin
			];

			$this->load->model('CreateEmployeeModel');
			$addStatus = $this->CreateEmployeeModel->createEmp($arrayOfEmpData);

			if($addStatus){
				$msg = '<div class="alert alert-success"> One New Employee added successfully <?div>';
				$this->session->set_flashdata('message',$msg);
				redirect('Admin/welcomePage');
				$this->welcomePage();
				return;
			}
			else{
				$msg = '<div class="alert alert-danger"> New Employee added unsuccessful <?div>';
				$this->session->set_flashdata('message',$msg);
				redirect('Admin/welcomePage');
				$this->addEmployee();
				return;
			}
			
		}
		else{
			echo "error";
		}

	}

}



?>
