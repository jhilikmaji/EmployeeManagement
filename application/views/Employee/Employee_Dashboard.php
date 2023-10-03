<?php require('Header.php') ?>

<section class="vh-100" style="background-color: #f4f5f7;">
  <div class="container py-5 h-100">

  <!-- <?php print_r($viewdata); ?> -->

    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-lg-6 mb-4 mb-lg-0">
        <div class="card mb-3" style="border-radius: .5rem;">
          <div class="row g-0">
            <div class="col-md-4 gradient-custom text-center text-white"
              style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
              <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava1-bg.webp"
                alt="Avatar" class="img-fluid my-5" style="width: 80px;" />
              <h5>Hi <?= $viewdata[0]->emp_first_name ?> Welcome</h5>
							<span>Your employee code is :</span>
			  			<p><?= $viewdata[0]->emp_code ?></p>
              
              <i class="far fa-edit mb-5"></i>
            </div>
            <div class="col-md-8">
              <div class="card-body p-4">
                <h6>Information</h6>
                <hr class="mt-0 mb-4">
                <div class="row pt-1">
                  <div class="col-4 mb-3">
                    <h6>First Name</h6>
                    <p class="text-muted"><?= $viewdata[0]->emp_first_name ?></p>
                  </div>
				  <div class="col-4 mb-3">
                    <h6>Middle Name</h6>
                    <p class="text-muted"><?= $viewdata[0]->emp_middle_name ?></p>
                  </div>
				  <div class="col-4 mb-3">
                    <h6>Last Name</h6>
                    <p class="text-muted"><?= $viewdata[0]->emp_last_name ?></p>
                  </div>
                </div>

				<div class="row pt-1">
                  <div class="col-6 mb-3">
                    <h6>Date Of Birth</h6>
                    <p class="text-muted"><?= $viewdata[0]->emp_dob ?></p>
					
                  </div>
				  <div class="col-6 mb-3">
                    <h6>Age</h6>
                    <p class="text-muted">
						<?php
						$birthday = $viewdata[0]->emp_dob ;
						$today = date("Y-m-d");
						$diff = date_diff(date_create($birthday), date_create($today));
						$age_now = $diff->format('%y');
						echo $age_now;
					
						?>
					</p>
                  </div>
                </div>

				<div class="row pt-1">
                  <div class="col-6 mb-3">
                    <h6>Mobile Number</h6>
                    <p class="text-muted"><?= $viewdata[0]->emp_mobile_no ?></p>
                  </div>
				  <div class="col-6 mb-3">
                    <h6>Gender</h6>
                    <p class="text-muted"><?php echo $gender = ($viewdata[0]->emp_gender == 1) ? "Male" : (($viewdata[0]->emp_gender == 2)  ? "Female" : "Other") ?></p>
                  </div>
                </div>

				




             </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php require('Footer.php') ?>

