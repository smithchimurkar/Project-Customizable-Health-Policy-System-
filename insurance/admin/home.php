<?php
session_start();
include('../connect.php');

if(empty($_SESSION['aname']))
{
	header('location:index');
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Home Page</title>
	<?php include('../bootcdn.php') ?>
	<style type="text/css">
       .well-sm, .well {box-shadow:0 0 2px #010E28;}
		#gicon {text-align:center;
		         background-color:#010E28;
		         padding:15px;
		         border-radius:30px;
		         font-size:30px;
		         color:white;}

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
			<span class="glyphicon glyphicon-home"></span>
			<b>HOME PAGE</b>
		</div>
		

		<!-- -------------------- Content page start ----------------------------- -->

       <div class="row">

       	<div class="col-sm-3">
       		<div class="well">
       			<?php
       			$a = mysqli_query($con,"SELECT * FROM `tbl_users` ");
       			$aa = mysqli_num_rows($a);
       			?>
       			<center>
       				<span id="gicon" class="glyphicon glyphicon-user"></span>
       				<h4>Candidates - <?php echo $aa; ?></h4>
       			</center>
       		</div>
       	</div>


       	<div class="col-sm-3">
       		<div class="well">
       			<?php
       			$b = mysqli_query($con,"SELECT * FROM `tbl_profile` ");
       			$bb = mysqli_num_rows($b);
       			?>
       			<center>
       				<span id="gicon" class="glyphicon glyphicon-list-alt"></span>
       				<h4>Profiles - <?php echo $bb; ?></h4>
       			</center>
       		</div>
       	</div>


       	<div class="col-sm-3">
       		<div class="well">
       			<?php
       			$c = mysqli_query($con,"SELECT * FROM `tbl_policy` ");
       			$cc = mysqli_num_rows($c);
       			?>
       			<center>
       				<span id="gicon" class="glyphicon glyphicon-th"></span>
       				<h4>Policy - <?php echo $cc; ?></h4>
       			</center>
       		</div>
       	</div>
       	
       </div>

		<!-- -------------------- Content page end ----------------------------- -->


              <div class="row">

                     <div class="col-sm-8">
                            <div class="well">
                                   <div class="row">
                                     <div class="col-sm-6">
                                       <h4>Todays Payment:-</h4>
                                     </div>
                                     <div class="col-sm-6">
                                       <script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
<input type="text" id="myInput" class="form-control" placeholder="Filter Result.." autofocus="">
                                     </div>
                                   </div>
                                   <br>
                                   <div class="table-responsive">
                                          <table class="table table-striped table-hover table-bordered">
                                                 <thead>
                                                        <tr>
                                                                <th>Sr No</th>
                                                                <th>Payment Date</th>
                                                                <th>Payment Id</th>
                                                                <th>Policy Id</th>
                                                                <th>Candidate Name</th>
                                                                <th>Month</th>
                                                                <th>Installment</th>
                                                        </tr>
                                                 </thead>
                                                  <tbody id="myTable">
                                   <?php
                                   $ulist = mysqli_query($con,"SELECT * FROM `tbl_payment` ORDER BY pay_id desc");
                                   $counter = 1;
                                   while($ulist_data = mysqli_fetch_assoc($ulist)){
                                   ?>
                                   <tr>
                                          <td><?php echo $counter; ?></td>
                                          <td><?php echo $ulist_data['pay_date'] ?></td>
                                          <td><?php echo $ulist_data['pay_id'] ?></td>
                                          <td><?php echo $ulist_data['pid'] ?></td>
                                          <td><?php echo $ulist_data['uname'] ?></td>
                                          <td><?php echo $ulist_data['month'] ?></td>
                                          <td><?php echo number_format($ulist_data['installment'],2) ?></td>
                                   </tr>
                            <?php $counter++;} ?>
                            </tbody>
                                          </table>
                                   </div>
                            </div>
                     </div>
                     
              </div>
		
	</div>

</body>
</html>