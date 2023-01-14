<?php
session_start();
include('connect.php');
error_reporting(0);
if(empty($_SESSION['uid']))
{
	header('location:index');
}

error_reporting(0);
$id = $_GET['id'];
mysqli_query($con,"DELETE FROM `tbl_policy` WHERE `pid` = '".$id."' ");

if(isset($_POST['btnhidid']))
{
	$hidid = $_POST['hidid'];
	mysqli_query($con,"UPDATE `tbl_policy` SET `status` = 'Active' WHERE `pid` = '".$hidid."' ");
	echo "<script>
	alert('Congratulation your policy is activated');
	window.location.href='create_policy';
	</script>";
}

if(isset($_POST['create_policy']))
{
	$pdate = date('Y-m-d');
	$uid = $_SESSION['uid'];
	$uname = $_SESSION['uname'];
	$amount = mysqli_real_escape_string($con,$_POST['amount']);
	$period = mysqli_real_escape_string($con,$_POST['period']);

	if($amount<100000)
	{
		$msg = "Please enter amount above 1,00,000/-";
	}else if($amount>1000000)
	{
		$msg = "Please enter amount below 10,00,000/-";
	}else{

	 if(($amount>=100000 && $amount<=200000) && $period==10)
	{
        $msg = '15';
	}else if(($amount>=100000 && $amount<=200000) && $period==8)
	{
        $msg = '14';
	}else if(($amount>=100000 && $amount<=200000) && $period==6)
	{
        $msg = '13';
	}else if(($amount>=100000 && $amount<=200000) && $period==4)
	{
        $msg = '12';
	}else if(($amount>=100000 && $amount<=200000) && $period==2)
	{
        $msg = '11';
	}

	else if(($amount>=200001 && $amount<=500000) && $period==10)
	{
        $msg = '10';
	}else if(($amount>=200001 && $amount<=500000) && $period==8)
	{
        $msg = '9';
	}else if(($amount>=200001 && $amount<=500000) && $period==6)
	{
        $msg = '8';
	}else if(($amount>=200001 && $amount<=500000) && $period==4)
	{
        $msg = '7';
	}else if(($amount>=200001 && $amount<=500000) && $period==2)
	{
        $msg = '6';
	}

	else if(($amount>=500001 && $amount<=1000000) && $period==10)
	{
        $msg = '5';
	}else if(($amount>=500001 && $amount<=1000000) && $period==8)
	{
        $msg = '4';
	}else if(($amount>=500001 && $amount<=1000000) && $period==6)
	{
        $msg = '3';
	}else if(($amount>=500001 && $amount<=1000000) && $period==4)
	{
        $msg = '2';
	}else if(($amount>=500001 && $amount<=1000000) && $period==2)
	{
        $msg = '1';
	}

	if($period == 2)
	{
        $msg1 = '24';
	}else if($period == 4)
	{
        $msg1 = '48';
	}else if($period == 6)
	{
        $msg1 = '72';
	}else if($period == 8)
	{
        $msg1 = '96';
	}else if($period == 10)
	{
        $msg1 = '120';
	}

	$rate = $msg/100*$amount;
	$totalamt = $amount + $rate;

	$div = $totalamt/$msg1;

	mysqli_query($con,"INSERT INTO `tbl_policy`(`pdate`,`uid`,`uname`,`amount`,`period`,`rate`,`rate_amt`,`tot_amt`,`months`,`installments`,`status`)VALUES('".$pdate."','".$uid."','".$uname."','".$amount."','".$period."','".$msg."','".$rate."','".$totalamt."','".$msg1."','".$div."','Inactive') ");
	header('location:create_policy');
	}
	
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>User Create Policy Page</title>
	<?php include('bootcdn.php') ?>
	<style type="text/css">
		.well-sm {box-shadow:0 0 2px #010E28;}
		.panel-header {background-color:#010E28;
		               color:white;
		               text-align:center;}

		.table-bordered thead tr th {background-color:#010E28;color:white;}
	</style>
</head>
<body>

	<?php include('header.php'); ?>

	<div class="container">

		<div class="well well-sm">
			<span class="glyphicon glyphicon-edit"></span>
			<b>CREATE POLICY PAGE</b>
		</div>

		<div class="row">

			<div class="col-sm-4">
				<!-- form start -->
				<div class="panel panel-default">
					<div class="panel panel-header">
						<h4>Create Your Insurance Policy</h4>
					</div>
					<div class="panel panel-body">
						<form method="post">
							<label>Insurance Policy Amount</label>
							<input type="number" name="amount" class="form-control" placeholder="Enter Amount" autofocus="">
							<span style="color:red;"><?php echo $msg; ?></span>
							<span style="color:red;"><?php echo $rate; ?></span>
							<span style="color:red;"><?php echo $totalamt; ?></span>
							<br>

							<label>Policy Period</label>
							<select type="text" name="period" class="form-control" required="">
								<option value="">Select Policy Period</option>
								<option value="2">2 Years</option>
								<option value="4">4 Years</option>
								<option value="6">6 Years</option>
								<option value="8">8 Years</option>
								<option value="10">10 Years</option>
							</select>
							<span style="color:red;"><?php echo $msg1; ?></span>
							<span style="color:red;"><?php echo $div; ?></span>
							<hr>

							<button type="submit" name="create_policy" class="btn btn-default btn-block">Create Policy</button>
						</form>
					</div>
				</div>
				<!-- form end -->
			</div>


			<div class="col-sm-8">

				<!-- policy chart start -->
				<h4>Policy Chart:-</h4>
				<div class="table-responsive">
					<table class="table table-bordered">
						<thead>
							<tr>
								<th>Policy Id</th>
								<th>Policy Amount</th>
								<th>Policy Period (in_year)</th>
								<th>Rate (%)</th>
								<th>Rate (in_amount)</th>
								<th>Total Amount</th>
								<th>Total Months</th>
								<th>Installments (per_month)</th>
								<th colspan="2">Action</th>
							</tr>
						</thead>

						<tbody>
							<?php
							$a = mysqli_query($con,"SELECT * FROM `tbl_policy` WHERE `uid` = '".$_SESSION['uid']."' ORDER BY pid desc ");
							while($b = mysqli_fetch_assoc($a)){
							?>
							<tr style="<?php if($b['status']=='Active'){echo 'background-color:green;color:white;';}else{echo '';} ?>">
								<td><?php echo $b['pid'] ?></td>
								<td><?php echo $b['amount'] ?></td>
								<td><?php echo $b['period'] ?></td>
								<td><?php echo $b['rate'] ?></td>
								<td><?php echo $b['rate_amt'] ?></td>
								<td><?php echo number_format($b['tot_amt'],2) ?></td>
								<td><?php echo $b['months'] ?></td>
								<td><?php echo number_format($b['installments'],2) ?></td>
								<td <?php if($b['status']=='Active'){echo 'colspan="2"';}else{echo '';} ?>>
									<a style="<?php if($b['status']=='Active'){echo 'display:none;';}else{echo '';} ?>" title="Delete" href="create_policy?id=<?php echo $b['pid'] ?>">
										<span class="glyphicon glyphicon-trash"></span>
									</a>
                                    <a style="color:white;" href="mychart?id=<?php echo $b['pid'] ?>">
									<?php if($b['status']=='Active'){echo 'Policy Active';}else{echo '';} ?>
								    </a>
								</td>
								<td style="<?php if($b['status']=='Active'){echo 'display:none;';}else{echo '';} ?>">
									<form style="<?php if($b['status']=='Active'){echo 'display:none;';}else{echo '';} ?>" method="post">
										<input type="hidden" name="hidid" value="<?php echo $b['pid'] ?> ?>">
										<button style="background:none;border:none;" type="submit" name="btnhidid">
											<span class="glyphicon glyphicon-ok"></span>
										</button>
									</form>
								</td>
							</tr>
						<?php } ?>
						</tbody>
					</table>
				</div>
				<!-- policy chart end -->
				
			</div>
			
		</div>
		
	</div>

</body>
</html>