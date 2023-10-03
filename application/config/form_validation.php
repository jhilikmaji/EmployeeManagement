<?php
$config=[
	'organization_login rules'=>[
		[
		'field' => 'username',
		'label' => 'Username',
		'rules' => 'required'
		],
		[
		'field' => 'password',
		'label' => 'Password',
		'rules' => 'required'
		]
		],

	'create_Employee_rules'=>[
		[
		'field' => 'first_name',
		'label' => 'First Name',
		'rules' => 'required'
		],
		
		[
			'field' => 'last_name',
			'label' => 'Last Name',
			'rules' => 'required'
		],
		[
			'field' => 'dob',
			'label' => 'Date Of Birth',
			'rules' => 'required'
		],
		[
			'field' => 'email',
			'label' => 'Email',
			'rules' => 'required'
		],
		[
			'field' => 'phone_number',
			'label' => 'Phone Number',
			'rules' => 'required'
		],
		[
			'field' => 'gender',
			'label' => 'Gender',
			'rules' => 'required'
		]
		],

		'employee_login_rules' => [
			[
				'field' => 'eployeeId',
				'label' => 'Employee Id',
				'rules' => 'required'
			],
			[
				'field' => 'password',
				'label' => 'Password',
				'rules' => 'required'
			]
		]
];



?>
