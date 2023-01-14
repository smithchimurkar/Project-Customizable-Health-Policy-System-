<?php
session_start();
include('../connect.php');

if(empty($_SESSION['aname']))
{
	header('location:index');
}
error_reporting(0);
$id = $_GET['id'];
mysqli_query($con,"DELETE FROM `tbl_policy` WHERE `pid` = $id ");

?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Insurance Page</title>
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
			<span class="glyphicon glyphicon-th-list"></span>
			<b>USERS INSURANCE LIST PAGE</b>
		</div>
		

		<!-- -------------------- Content page start ----------------------------- -->

              <div class="row">

                     <div class="col-sm-3">

                      <input style="border:1px solid #010E28;" class="form-control" id="myInput" type="text" placeholder="Filter Here..">

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
                            
                     </div>

                     <div class="col-sm-7">
                            
                     </div>

                     <div class="col-sm-2">
                            <a style="background-color:#010E28;color:white;" href="#" class="btn btn-default" onclick="print()">
                                   <span class="glyphicon glyphicon-print"></span>
                                   PRINT
                            </a>
                     </div>
                     
              </div>


              <!-- -------------- user list table start ---------- -->
             <br>
               <div class="table-responsive">

                     <table class="table table-hover table-striped table-bordered">

                            <thead>
                                   <tr>
                                          <th>Sr No</th>
                                          <th>Policy Date</th>
                                          <th>Candidate Name</th>
                                          <th>Amount</th>
                                          <th>Period</th>
                                          <th>Rate</th>
                                          <th>Rate Amount</th>
                                          <th>Total Amount</th>
                                          <th>Months</th>
                                          <th>Installments</th>
                                          <th>Status</th>
                                   </tr>
                            </thead>

                            <tbody id="myTable">
                                   <?php
                                   $ulist = mysqli_query($con,"SELECT * FROM `tbl_policy` ORDER BY pid desc");
                                   $counter = 1;
                                   while($ulist_data = mysqli_fetch_assoc($ulist)){
                                   ?>
                                   <tr>
                                          <td><?php echo $counter; ?></td>
                                          <td><?php echo $ulist_data['pdate'] ?></td>
                                          <td><?php echo $ulist_data['uname'] ?></td>
                                          <td><?php echo $ulist_data['amount'] ?></td>
                                          <td><?php echo $ulist_data['period'] ?></td>
                                          <td><?php echo $ulist_data['rate'] ?></td>
                                          <td><?php echo $ulist_data['rate_amt'] ?></td>
                                          <td><?php echo $ulist_data['tot_amt'] ?></td>
                                          <td><?php echo $ulist_data['months'] ?></td>
                                          <td><?php echo $ulist_data['installments'] ?></td>
                                          <td><?php echo $ulist_data['status'] ?></td>
                                   </tr>
                            <?php $counter++;} ?>
                            </tbody>
                            
                     </table>
                      
               </div>

              <!-- -------------- user list table send ---------- -->


		<!-- -------------------- Content page end ----------------------------- -->
		
	</div>

</body>
</html>