<?php require('Header.php'); ?>
	<div class="container mt-5 w-50">
		<h1>Organization Login</h1>
		<?php echo form_open('admin/login'); ?>

					<div class="mb-3">
				<div class="row">
					<label for="exampleInputEmail1" class="form-label">User Name</label>
					
					<?php echo form_input(['class' => 'form-control', 'type' => 'text' , 'placeholder' =>'Enter your User Name' , 'name' => 'username']); ?>
				</div>
				<div class="row">
					<?php echo form_error('username'); ?>
				</div>
    			
  			</div>
  			<div class="mb-3">
				<div class="row">
					<label for="exampleInputPassword1" class="form-label">Password</label>
    				<?php echo form_password(['class' => 'form-control', 'placeholder' => 'Enter password', 'type' => 'password', 'name' => 'password']); ?>
				</div>
				<div class="row">
					<?php echo form_error('password'); ?>
				</div>
    			
  			</div>
  			
  			<!-- <button type="submit" class="btn btn-primary">Submit</button> -->
			<?php echo form_submit(['type' => 'submit' , 'class' => 'btn btn-primary' , 'value' => 'Submit']); ?>

			


	<?php require('Footer.php') ?>
