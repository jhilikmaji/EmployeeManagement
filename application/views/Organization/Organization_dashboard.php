<?php 
require('header.php');
require('Navbar.php');
?>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-4">

			<canvas id="myChart" style="width:100%;"></canvas>
		</div>
		<div class="col-md-4">

			<canvas id="myChart2" style="width:100%;"></canvas>
		</div>

		
	</div>
</div>
<div class="row">
	<div class="col-md-8">
		<?php
				if($this->session->flashdata('message')) {
				echo $this->session->flashdata('message'); 
			}
			?>
		</div>
	</div>
	<div class="container col-md-10">
	
	
	<a href="addEmployee"class="btn btn-primary btn-sm float-right">
		Create Employee
	</a>
	<br><br>
		<table  id="employeeDetails">
			<thead>
				<tr>
					<th></th>
					<th>Employee Code</th>
					<th >Full Name</th>
					<th>Email</th>
					<th>Mobile no</th>
					<th>Age</th>
					<th>Gender</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($employeeData as $ed): ?>
				<tr>
					<td>
			<div class="iconActive" style="background-color: <?php echo $ed->active == 'true' ? '#08d255' : 'red' ; ?>">
			</div>
		</td>
		<td><?= $ed->emp_code ?></td>
		<td><?= $ed->emp_first_name. ' '.$ed->emp_middle_name. ' '.$ed->emp_last_name ?></td>
		
		<td><?= $ed->emp_email ?></td>
		<td><?= $ed->emp_mobile_no ?></td>
		
	  <td>
		  <?php 
	  		$birthday = $ed->emp_dob ;
			  $today = date("Y-m-d");
			  $diff = date_diff(date_create($birthday), date_create($today));
			  $age_now = $diff->format('%y');
			  echo $age_now;
			  ?>
	  </td>
      <td><?php echo $gender = ($ed->emp_gender == 1) ? "Male" :  "Female" ?></td>
      
      
	  <td><i class="fa-solid fa-pen-to-square" style="color: #1f2151;"></i></td>
    </tr>
    
    <?php endforeach; ?>  
      
  </tbody>
</table>
</div>
</div>

<?php
require('Footer.php');

?>

<!-- <?php print_r($empChartData[0]->count) ?>
<?php print_r($empChartData[1]->count) ?> -->

<script
src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js">
</script>

<!-- <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script> -->
		<script src=
"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
    </script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.6.2/js/dataTables.buttons.min.js"></script>

<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/jquery.dataTables.min.js" integrity="sha512-BkpSL20WETFylMrcirBahHfSnY++H2O1W+UnEEO4yNIl+jI2+zowyoGJpbtk6bx97fBXf++WJHSSK2MV4ghPcg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->
<script>
	

	
var male = <?php echo $empChartData[0]->count ?> ;

 var female = <?php echo $empChartData[1]->count?>;
var xValues = ["Male", "Female"];
var yValues = [male,female ];
console.log(yValues);

var barColors = ["#00AFBB", "#FC4E07"];

new Chart("myChart", {
  type: "doughnut",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
	title: {
      display: true,
      text: "Gender Wise Distribution"
    }
  }
});

var active = <?php echo $empActiveData[0]->count ?> ;
var inActive = <?php echo $empActiveData[1]->count ?>;
var xValuesActive = ["Active", "InActive"];
 var yValuesActive = [active, inActive];
var barColorsActive = ["#08d255", "red"];
// console.log(yValuesActive);

new Chart("myChart2", {
  type: "doughnut",
  data: {
    labels: xValuesActive,
    datasets: [{
      backgroundColor: barColorsActive,
      data: yValuesActive
    }]
  },
  options: {
	title: {
      display: true,
      text: "Employee Status"
    }
  }
});
</script>


<script type="text/javascript">
            $(document).ready(function () {
                $('#employeeDetails').DataTable({
                    // dom: 'Bfrtip',
                    // "bSort": false,
                    // buttons: [
                    //     {
                    //         extend: 'excelHtml5',
                    //         title: 'Data export'
                    //     }
                    // ]
                });
            });
        </script>
	



