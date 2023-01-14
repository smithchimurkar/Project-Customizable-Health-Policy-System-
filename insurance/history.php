<?php
session_start();
include('connect.php');
error_reporting(0);
if(empty($_SESSION['uid']))
{
	header('location:index');
}

$myresume = mysqli_query($con,"SELECT * FROM `tbl_profile` WHERE `cid` = '".$_SESSION['uid']."' ");
$mrdata = mysqli_fetch_array($myresume);

?>
<!DOCTYPE html>
<html>
<head>
	<title>User History Page</title>
	<?php include('bootcdn.php') ?>
	<style type="text/css">
		.well-sm {box-shadow:0 0 2px #010E28;}
		.panel-header {background-color:#010E28;
		               color:white;
		               text-align:center;}
	</style>
</head>
<body>

	<?php include('header.php'); ?>

	<div class="container">

		<div class="well well-sm">
			<span class="glyphicon glyphicon-hdd"></span>
			<b>HISTORY PAGE</b>
		</div>
<br>

<!-- table start -->
<div class="table-responsive">
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>SR No</th>
				<th>Date</th>
				<th>User Id</th>
				<th>User Name</th>
				<th>Base Amount</th>
				<th>Policy Amount</th>
				<th>Total Amount</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$ud = mysqli_query($con,"SELECT * FROM `tbl_entry1` WHERE `uid` = '".$_SESSION['uid']."' ");
			$counter = 1;
			while($ud1 = mysqli_fetch_assoc($ud))
			{
			?>
			<tr>
				<td><?php echo $counter; ?></td>
				<td><?php echo $ud1['rdate'] ?></td>
				<td><?php echo $ud1['uid'] ?></td>
				<td><?php echo $ud1['user'] ?></td>
				<td><?php echo $ud1['amt1'] ?></td>
				<td><?php echo $ud1['amt2'] ?></td>
				<td><?php echo $ud1['totalamt'] ?></td>
			</tr>
		<?php $counter++; } ?>
		</tbody>
	</table>
</div>

<button class="btn btn-default">
	 <?php
          $pdata = mysqli_query($con,"SELECT * FROM `tbl_entry1` WHERE `uid` = '".$_SESSION['uid']."' ");
          $total = 0;
          $tt = 2251;
          while($pdata1 = mysqli_fetch_assoc($pdata))
          {
             $total = $total + $pdata1['amt2'];
          }
          ?>
          <a style="background-color:;" href="#">
            <span class="glyphicon glyphicon-time"></span>
          Amount: <?php echo $total+$tt; ?>
          </a>
</button>
<!-- table end -->
		
	</div>

</body>
</html>