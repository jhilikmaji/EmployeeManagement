
<?php require('Header.php'); ?>

<div class="container mt-5 w-50">
		<h1>Create Employee</h1>
		<?php echo form_open('Admin/addEmployeeValidation'); ?>
  			<div class="mb-3">
				<div class="row">
					<label for="exampleInputEmail1" class="form-label">First Name</label>
					<?php echo form_input(['class' => 'form-control', 'type' => 'text' , 'placeholder' =>'Enter your First Name' , 'name' => 'first_name']); ?>
				</div>
				<div class="row">
					<?php echo form_error('first_name'); ?>
				</div>
    		</div>
			<div class="mb-3">
				<div class="row">
					<label for="exampleInputEmail1" class="form-label">Middle Name</label>
					<?php echo form_input(['class' => 'form-control', 'type' => 'text' , 'placeholder' =>'Enter your Middle name' , 'name' => 'middle_name']); ?>
				</div>
				
    		</div>
			<div class="mb-3">
				<div class="row">
					<label for="exampleInputEmail1" class="form-label">Last Name</label>
					<?php echo form_input(['class' => 'form-control', 'type' => 'text' , 'placeholder' =>'Enter your Last name' , 'name' => 'last_name']); ?>
				</div>
				<div class="row">
					<?php echo form_error('last_name'); ?>
				</div>
    		</div>

  			<div class="mb-3">
				<div class="row">
					<label for="exampleInputEmail1" class="form-label">Date of Birth</label>
					<!-- <?php $js = 'onChange="calculateAge()"'; ?> -->
					<?php echo form_input(['class' => 'form-control', 'type' => 'date' , 'placeholder' =>'Enter your date of birth' , 'name' => 'dob' , 'max' => date('Y-m-d',strtotime('-16 year')),'id'=>'dob']) ?>
				</div>
				<div class="row">
					<?php echo form_error('dob'); ?>
				</div>
    		</div>
			<div class="mb-3">
				<div class="row">
					<label for="exampleInputEmail1" class="form-label" >Age</label>
					<?php echo form_input(['class' => 'form-control', 'type' => 'text' , 'name' => 'age', 'readonly' => 'true', 'id'=>'age']); ?>
				</div>
				
	 		</div>
			 <div class="mb-3">
				<div class="row">
					<label for="exampleInputEmail1" class="form-label">Email</label>
					<?php echo form_input(['class' => 'form-control', 'type' => 'email' , 'placeholder' =>'Enter Email Id' , 'name' => 'email']); ?>
				</div>
				<div class="row">
					<?php echo form_error('email'); ?>
				</div>
    		</div>
			<div class="mb-3">
				<div class="row">
					<label for="exampleInputEmail1" class="form-label">Phone Number</label>
					<?php echo form_input(['class' => 'form-control', 'type' => 'number' , 'placeholder' =>'Enter phone number' , 'name' => 'phone_number']); ?>
				</div>
				<div class="row">
					<?php echo form_error('phone_number'); ?>
				</div>
    		</div>
			
			<div class="mb-3">
				Gender
    			<select name="gender" class="form-control">
        			<option value="0" selected="selected">--Gender--</option>
        			<option value="1">Male</option>
        			<option value="2">Female</option>
        			
    			</select>
			</div>

  			
  			<!-- <button type="submit" class="btn btn-primary">Submit</button> -->
			<?php echo form_submit(['type' => 'submit' , 'class' => 'btn btn-primary' , 'value' => 'Submit']); ?>
			


			<?php require('Footer.php') ?>

			<!-- <script>
				function calculateAge(){
					console.log("age cal");
				}
			</script> -->

			<script src=
"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
    </script>
 
    <!-- jQuery code to show the working of this method -->
    <script>
        $(document).ready(function () {
			console.log("hello");
            $("#dob").change(function () {
              var birthDate = $("#dob").val();
			  var birthDateFormat = new Date(birthDate);
			//   var today = new Date();
			  var result = new Date().getFullYear()-birthDateFormat.getFullYear();
			  $("#age").val(result);
            });
        });
    </script>
