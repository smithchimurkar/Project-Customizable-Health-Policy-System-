<?php
session_start();
include('connect.php');

if(empty($_SESSION['uid']))
{
	header('location:index');
}

/* -------------- resume post query start --------------------- */

if(isset($_POST['post_profile']))
{
	$pdate = date('Y-m-d');
	$cid = $_SESSION['uid'];
	$cname = mysqli_real_escape_string($con,$_POST['cname']);
	$contact = mysqli_real_escape_string($con,$_POST['contact']);
	$email = mysqli_real_escape_string($con,$_POST['email']);
	$address = mysqli_real_escape_string($con,$_POST['address']);
	$company = mysqli_real_escape_string($con,$_POST['company']);
	$caddress = mysqli_real_escape_string($con,$_POST['caddress']);
	$designation = mysqli_real_escape_string($con,$_POST['designation']);
	$income = mysqli_real_escape_string($con,$_POST['income']);
	$assets = mysqli_real_escape_string($con,$_POST['assets']);
	$liability = mysqli_real_escape_string($con,$_POST['liability']);
  $photo = mysqli_real_escape_string($con,$_FILES['photo']['name']);
  $extra = 'e';
	$a = ' - ';

	mysqli_query($con,"INSERT INTO `tbl_profile`(`pdate`,`cid`,`cname`,`contact`,`email`,`address`,`company`,`caddress`,`designation`,`income`,`assets`,`liability`,`photo`) VALUES('".$pdate."','".$cid."','".$cname."','".$contact."','".$email."','".$address."','".$company."','".$caddress."','".$designation."','".$income."','".$assets."','".$liability."','".$extra.$photo."') ");
	echo "<script>
	alert('Profile uploaded successfully..');
	window.location.href='home';
	</script>";

  $post_photo=$_FILES['photo']['name'];
$post_photo_tmp=$_FILES['photo']['tmp_name'];

$ext=pathinfo($post_photo, PATHINFO_EXTENSION);   //getting image extension

if($ext=='png' || $ext=='PNG' ||
   $ext=='jpg' || $ext=='jpeg' ||
   $ext=='JPG' || $ext=='JPEG' ||
   $ext=='gif' || $ext=='GIF' )   //checking image extension

  if($ext =='jpg' || $ext=='jpeg' || $ext =='JPG' || $ext=='JPEG')
  {
    $src=imagecreatefromjpeg($post_photo_tmp);

  }
  if($ext=='png'  || $ext=='PNG')
  {
    $src=imagecreatefrompng($post_photo_tmp);
  }
  if($ext=='gif'  || $ext=='GIF')
  {
    $src=imagecreatefromgif($post_photo_tmp);
  }


  list($width_min,$height_min)=getimagesize($post_photo_tmp);  //fetching original image width & height

  $newwidth_min=200;  //set compression image width
  $newheight_min=200; //set compression image height
  /*$newheight_min=($height_min / $width_min)*$newwidth_min; */   // equation for compressed image height
  $temp_min= imagecreatetruecolor($newwidth_min, $newheight_min);   //craere frame for compressed image
  imagecopyresampled($temp_min, $src, 0, 0, 0, 0, $newwidth_min, $newheight_min, $width_min, $height_min);  // compressing image
    imagejpeg($temp_min,"pimgs/e".$post_photo,80);   //copy image in folder
}

/* -------------- resume post query end --------------------- */

?>
<!DOCTYPE html>
<html>
<head>
	<title>Upload Profile Page</title>
	<?php include('bootcdn.php') ?>
	<style type="text/css">
		.well-sm {box-shadow:0 0 2px #010E28;}
		.panel-header {background-color:#010E28;
		               color:white;
		               text-align:center;}

		.btn-default {color:white;}
		#pbtn:hover {color:white;}
	</style>
</head>
<body>

	<?php include('header.php'); ?>

	<div class="container">

		<div class="well well-sm">
			<span class="glyphicon glyphicon-list-alt"></span>
			<b>UPLOAD PROFILE PAGE</b>
		</div>

		<!-- --------------- Resume form start ---------------- -->

        <div class="row">
         <form method="post" enctype="multipart/form-data">

        	<div class="col-sm-4">
        		<div class="panel panel-default">
        			<div class="panel panel-header">
        				<h4>Personal Information</h4>
        			</div>

                   <div class="panel panel-body">

                   <label>Candidate Profile Photo</label>
                   <input type="file" name="photo" class="form-control" required="">
                   <br>

                   <label>Candidate Name</label>
                   <input type="text" name="cname" placeholder="Candidate Name" class="form-control" required="">
                   <br>
                   
                   <label>Candidate Contact</label>
                   <input type="text" name="contact" placeholder="Candidate Contact" class="form-control" required="">
                   <br>

                   <label>Candidate Email Id</label>
                   <input type="text" name="email" placeholder="Candidate Email" class="form-control" required="">
                   <br>

                   <label>Candidate Address</label>
                   <textarea type="text" name="address" placeholder="Candidate Address" class="form-control" required=""></textarea>
                   <br>


                   </div>

        		</div>
        	</div>

        	<div class="col-sm-4">
        		<div class="panel panel-default">
        			<div class="panel panel-header">
        				<h4>Professional Information</h4>
        			</div>

                   <div class="panel panel-body">

                   <label>Company Name</label>
                   <input type="text" name="company" class="form-control" placeholder="Company Name">
                   <br>

                   <label>Company Address</label>
                   <textarea name="caddress" class="form-control" placeholder="Company Address"></textarea>
                   <br>

                   <label>Designation</label>
                   <input type="text" name="designation" class="form-control" placeholder="Designation">
                   <br>

                   <label>Income (in amount)</label>
                   <input type="text" name="income" class="form-control" placeholder="Income (in amount)">
                   	
                   </div>

        		</div>

        		
        	</div>

        	<div class="col-sm-4">
        		<div class="panel panel-default">
        			<div class="panel panel-header">
        				<h4>Personal Asset</h4>
        			</div>
        			<div class="panel panel-body">
        				<textarea type="text" class="form-control" name="assets" placeholder="Specify Your assets.."></textarea>
        			</div>
        		</div>

        		<div class="panel panel-default">
        			<div class="panel panel-header">
        				<h4>Any Liability</h4>
        			</div>
        			<div class="panel panel-body">
        				<textarea type="text" class="form-control" name="liability" placeholder="Any Liability Yes/No. If yes then specify.."></textarea>
        			</div>
        		</div>
        	</div>

        </div>
<hr>
        <div class="row">

        	<div class="col-sm-3">
        <?php
        $avl = mysqli_query($con,"SELECT * FROM `tbl_profile` WHERE `cid` = '".$_SESSION['uid']."' ");
        $avl1 = mysqli_num_rows($avl);
        ?>
        		<button style="background-color:#010E28;" class="btn btn-primary" name="post_profile" <?php if($avl1==0){echo 'enabled';}else{echo 'disabled';} ?>>
        			<span class="glyphicon glyphicon-send"></span>
        		<span id="pbtn">Post Your Profile</span>
        	    </button>
        	</div>

        	<div class="col-sm-7"></div>

        	<div class="col-sm-2">
        		<button style="background-color:#010E28;" class="btn btn-primary">
        			<span class="glyphicon glyphicon-refresh"></span>
        		<span id="pbtn">Reset Entries</span>
        	    </button>
        	</div>
        	
        </div>
    </form>
        <hr>

		<!-- --------------- Resume form end ---------------- -->
		
	</div>

</body>
</html>