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
$a = mysqli_query($con,"SELECT * FROM `tbl_policy` WHERE `pid` = $id ");
$b = mysqli_fetch_array($a);


if(isset($_POST['btnpay']))
{
	$pid = mysqli_real_escape_string($con,$_POST['pid']);
	$pay_date = mysqli_real_escape_string($con,$_POST['pay_date']);
	$uid = mysqli_real_escape_string($con,$_POST['uid']);
	$uname = mysqli_real_escape_string($con,$_POST['uname']);
	$month = mysqli_real_escape_string($con,$_POST['month']);
	$installments = mysqli_real_escape_string($con,$_POST['installments']);

     $mc = $month-1;

	$s = mysqli_query($con,"SELECT * FROM `tbl_payment` WHERE `month`= '".$mc."' AND `pid` = '".$pid."' AND `uid` = '".$uid."' ");
    $s1 = mysqli_fetch_array($s);
	/*if(!empty($s1['month']))
	{
		echo "Not empty";
	}else{
		echo "Empty";
	}
  exit;*/
   if($mc==0 || (!empty($s1['month'])))
   {
   	mysqli_query($con,"INSERT INTO `tbl_payment`(`pid`,`uid`,`uname`,`pay_date`,`month`,`installment`)VALUES('".$pid."','".$uid."','".$uname."','".$pay_date."','".$month."','".$installments."') ");
		echo "<script>
      alert('Successfully deposited your $month month installment');
      window.location.href='mychart?id=$id';
      </script>";
   }
	else
	{
      echo "<script>
      alert('Please pay previous month installment');
      window.location.href='mychart?id=$id';
      </script>";
	}/*else{
		mysqli_query($con,"INSERT INTO `tbl_payment`(`pid`,`uid`,`uname`,`pay_date`,`month`,`installment`)VALUES('".$pid."','".$uid."','".$uname."','".$pay_date."','".$month."','".$installments."') ");
		echo "<script>
      alert('Successfully deposited your $month month installment');
      window.location.href='mychart?id=$id';
      </script>";
	}*/
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>User Policy Chart Page</title>
	<?php include('bootcdn.php') ?>
	<style type="text/css">
		.well-sm {box-shadow:0 0 2px #010E28;}
		.panel-default .panel-heading {background-color:#010E28;
		               color:white;
		               text-align:center;}

		
	</style>
</head>
<body>

	<?php include('header.php'); ?>

	<div class="container">

		<div class="well well-sm">
			<span class="glyphicon glyphicon-calendar"></span>
			<b>INSTALLMENT CHART PAGE</b>
		</div>

		<div class="row">

			<?php
			$y = 1;
			$x = $b['months'];
			while($y<=$x){
			?>

			<div class="col-sm-2 col-xs-6">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 style="padding:0;margin:0;"><?php echo $y; ?> Month</h4>
					</div>
					<div class="panel-body">
						<p style="text-align:center;color:red"><?php
		$pdata = mysqli_query($con,"SELECT * FROM `tbl_payment` WHERE `pid`='".$id."' AND `uid`='".$_SESSION['uid']."' AND `month`='".$y."' ");
		$pdata1 = mysqli_num_rows($pdata);
		if($pdata1>0)
		{
          echo "PAID";
		}else{
			echo "";
		}
		?></p>
					</div>
					<div style="padding:0;" class="panel-footer">
						
						<form method="post">
        					<input type="hidden" name="pid" value="<?php echo $id ?>">
							<input type="hidden" name="pay_date" value="<?php echo date('Y-m-d') ?>">
							<input type="hidden" name="uid" value="<?php echo $_SESSION['uid'] ?>">
							<input type="hidden" name="uname" value="<?php echo $_SESSION['uname'] ?>">
							<input type="hidden" name="month" value="<?php echo $y ?>">
							<input type="hidden" name="installments" value="<?php echo $b['installments'] ?>">
						<button style="<?php
		$pdata = mysqli_query($con,"SELECT * FROM `tbl_payment` WHERE `pid`='".$id."' AND `uid`='".$_SESSION['uid']."' AND `month`='".$y."' ");
		$pdata1 = mysqli_num_rows($pdata);
		if($pdata1>0)
		{
          echo "display:none;";
		}else{
			echo "";
		}
		?>" type="submit" name="btnpay" class="btn btn-default btn-block">Pay</button>
					    </form>
					</div>
				</div>
			</div>
		<?php $y++; } ?>
			
		</div>
		
	</div>

</body>
</html>