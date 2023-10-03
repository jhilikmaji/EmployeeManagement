<?php require('Header.php'); ?>
	<div class="container mt-5 w-50">
		<h1>Employee Login</h1>
		<?php echo form_open('Users/userLogin'); ?>
  			<div class="mb-3">
				<div class="row">
					<label for="exampleInputEmail1" class="form-label">Emplyee Id</label>
					<!-- <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"> -->
					<?php echo form_input(['class' => 'form-control', 'type' => 'text' , 'placeholder' =>'Enter your email' , 'name' => 'eployeeId']); ?>
				</div>
				<div class="row">
					<?php echo form_error('eployeeId'); ?>
				</div>
    			
  			</div>
  			<div class="mb-3">
				<div class="row">
					<label for="exampleInputPassword1" class="form-label">Password</label>
    				<?php echo form_password(['class' => 'form-control', 'placeholder' => 'Enter your Date of birth(yyyymmdd)', 'type' => 'password', 'name' => 'password']); ?>
				</div>
				<div class="row">
					<?php echo form_error('password'); ?>
				</div>
    			
  			</div>
  			
  			<!-- <button type="submit" class="btn btn-primary">Submit</button> -->
			<?php echo form_submit(['type' => 'submit' , 'class' => 'btn btn-primary' , 'value' => 'Submit']); ?>
		</form>

	<?php require('Footer.php') ?>
