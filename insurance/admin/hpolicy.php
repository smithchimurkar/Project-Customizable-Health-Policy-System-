<?php
session_start();
include('../connect.php');

if(empty($_SESSION['aname']))
{
	header('location:index');
}
error_reporting(0);
$id = $_GET['id'];
mysqli_query($con,"DELETE FROM `tbl_users` WHERE `uid` = $id ");


if(isset($_POST['btn']))
{
  $rdate = date('Y-m-d');
  $people = mysqli_real_escape_string($con,$_POST['people']);
  $age1 = mysqli_real_escape_string($con,$_POST['age1']);
  $age2 = mysqli_real_escape_string($con,$_POST['age2']);
  $age3 = mysqli_real_escape_string($con,$_POST['age3']);
  $age4 = mysqli_real_escape_string($con,$_POST['age4']);
  $age5 = mysqli_real_escape_string($con,$_POST['age5']);
  $title = mysqli_real_escape_string($con,$_POST['title']);
  $desc = mysqli_real_escape_string($con,$_POST['desc']);

  mysqli_query($con,"INSERT INTO `tbl_entry`(`rdate`,`people`,`age1`,`age2`,`age3`,`age4`,`age5`,`title`,`desc`) VALUES('".$rdate."','".$people."','".$age1."','".$age2."','".$age3."','".$age4."','".$age5."','".$title."','".$desc."')");
  echo "<script>
  alert('Successfully Added..');
  window.location.href='hpolicy';
  </script>";
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Users Page</title>
	<?php include('../bootcdn.php') ?>
	<style type="text/css">
		.well-sm, .well {box-shadow:0 0 2px #010E28;}

		.col-sm-3 .well h3 {color:#010E28;}
		.col-sm-3 .well:hover {border:1px solid #010E28;}

              .table thead tr th {background-color:#010E28;
                                  color:white;}
                .table thead tr {border-left:2px solid #010E28;border-right:2px solid #010E28;}                  
               .table thead tr th {border:1px solid white;}
              .table tbody tr td {border:1px solid #010E28;}
	</style>
</head>
<body>

	<?php include('header.php'); ?>

	<div class="container">

		<div class="well well-sm">
			<span class="glyphicon glyphicon-leaf"></span>
			<b>HEALTH POLICY PAGE</b>
		</div>

    <!-- policy form start -->
    <div class="row">

      <div class="col-sm-4">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4> <span class="glyphicon glyphicon-leaf"></span> Health Policy Form</h4>
          </div>
          <div class="panel-body">
            <form method="post">

            <div class="row">
              <div class="col-sm-4">
                <label>No of People</label>
                <input type="text" name="people" class="form-control" required>
              </div>
              <div class="col-sm-4">
                <label>Age1</label>
                <input type="text" name="age1" class="form-control">
              </div>
              <div class="col-sm-4">
                <label>Age2</label>
                <input type="text" name="age2" class="form-control">
              </div>
            </div>
            <br>

            <div class="row">
              <div class="col-sm-4">
                <label>Age3</label>
                <input type="text" name="age3" class="form-control" required>
              </div>
              <div class="col-sm-4">
                <label>Age4</label>
                <input type="text" name="age4" class="form-control">
              </div>
              <div class="col-sm-4">
                <label>Age5</label>
                <input type="text" name="age5" class="form-control">
              </div>
            </div>
            <br>

            <label>Select Title</label>
            <select type="text" name="title" class="form-control" required>
              <option value="">Select Title</option>
              <option>Room Rent Limit</option>
              <option>Restoration of Cover</option>
              <option>Health Check-Up</option>
              <option>No Claim Bonus</option>
              <option>Claim Settlement Ratio</option>
              <option>Covid-19 Coverage</option>
              <option>Cashless Hospital Coverage</option>
              <option>Pre-Hospitalization Coverage</option>
              <option>Day Care Treatment</option>
              <option>Hospitalization at Home</option>
              <option>Ambulance Charges</option>
              <option>Illness Cover</option>
              <option>COvid Patient Eligibility</option>
              <option>Alternate Midicine (Ayush)</option>
              <option>Worldwide Coverage</option>
              <option>Domestic Evacuation</option>
              <option>Cover for Organ Donor</option>
              <option>Animal Bite Vaccination</option>
              <option>E-Consultation</option>
              <option>Discount of Renewal</option>
              <option>Daily Cash Allowance</option>
              <option>Out Patient Convulation</option>
            </select>
            <br>

            <label>Description</label>
            <textarea class="form-control" name="desc"></textarea>

          </div>
          <div class="panel-footer">
            <button type="submit" name="btn" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>
      </div>
      
    </div>
    <!-- policy form end -->
		

		<!-- -------------------- Content page end ----------------------------- -->
		
	</div>

</body>
</html>