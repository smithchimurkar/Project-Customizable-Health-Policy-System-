<?php
session_start();
include('connect.php');

if(empty($_SESSION['uid']))
{
	header('location:index');
}

if(isset($_POST['delbtn']))
{
mysqli_query($con,"DELETE FROM `tbl_entry1` WHERE `uid` = '".$_SESSION['uid']."' ");
}

/*if(isset($_POST['btn']))
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
*/

if(isset($_POST['btnp']))
{
  $ab = mysqli_query($con,"SELECT * FROM `tbl_entry1` WHERE `uid` = '".$_SESSION['uid']."' AND `cat` = '1001' ");
  $abc = mysqli_num_rows($ab);
  if($abc>0)
  {
   echo "<script>
   alert('Already Submited..');
   window.location.href='hpolicy';
   </script>";
  }
  else
  {
  $rdate = date('Y-m-d');
  $uid = $_SESSION['uid'];
  $uname = $_SESSION['uname'];
  $hidamt1 = $_POST['hidamt1'];
  $hidamt2 = $_POST['hidamt2'];

  $totalamt = $hidamt1 + ($hidamt2);

  mysqli_query($con,"INSERT INTO `tbl_entry1`(`rdate`,`uid`,`user`,`amt1`,`amt2`,`totalamt`,`cat`) VALUES ('".$rdate."','".$uid."','".$uname."','".$hidamt1."','".$hidamt2."','".$totalamt."','1001') ");
  header('location:hpolicy');
}
}

if(isset($_POST['btnp1']))
{
  $ab = mysqli_query($con,"SELECT * FROM `tbl_entry1` WHERE `uid` = '".$_SESSION['uid']."' AND `cat` = '1001' ");
  $abc = mysqli_num_rows($ab);
  if($abc>0)
  {
   echo "<script>
   alert('Already Submited..');
   window.location.href='hpolicy';
   </script>";
  }
  else
  {
  $rdate = date('Y-m-d');
  $uid = $_SESSION['uid'];
  $uname = $_SESSION['uname'];
  $hidamt11 = $_POST['hidamt11'];
  $hidamt22 = $_POST['hidamt22'];

  $totalamt1 = $hidamt11 + $hidamt22;

  mysqli_query($con,"INSERT INTO `tbl_entry1`(`rdate`,`uid`,`user`,`amt1`,`amt2`,`totalamt`,`cat`) VALUES ('".$rdate."','".$uid."','".$uname."','".$hidamt11."','".$hidamt22."','".$totalamt1."','1001') ");
  header('location:hpolicy');
}
}

if(isset($_POST['btnp2']))
{
  $ab = mysqli_query($con,"SELECT * FROM `tbl_entry1` WHERE `uid` = '".$_SESSION['uid']."' AND `cat` = '1001' ");
  $abc = mysqli_num_rows($ab);
  if($abc>0)
  {
   echo "<script>
   alert('Already Submited..');
   window.location.href='hpolicy';
   </script>";
  }
  else
  {
  $rdate = date('Y-m-d');
  $uid = $_SESSION['uid'];
  $uname = $_SESSION['uname'];
  $hidamt111 = $_POST['hidamt111'];
  $hidamt222 = $_POST['hidamt222'];

  $totalamt11 = $hidamt111 + $hidamt222;

  mysqli_query($con,"INSERT INTO `tbl_entry1`(`rdate`,`uid`,`user`,`amt1`,`amt2`,`totalamt`,`cat`) VALUES ('".$rdate."','".$uid."','".$uname."','".$hidamt111."','".$hidamt222."','".$totalamt11."','1001') ");
  header('location:hpolicy');
}
}


/*second start*/
if(isset($_POST['btnsecond1']))
{
  $absecond = mysqli_query($con,"SELECT * FROM `tbl_entry1` WHERE `uid` = '".$_SESSION['uid']."' AND `cat` = '1002' ");
  $abcsecond = mysqli_num_rows($absecond);
  if($abcsecond>0)
  {
   echo "<script>
   alert('Already Submited..');
   window.location.href='hpolicy';
   </script>";
  }
  else
  {
  $rdate = date('Y-m-d');
  $uid = $_SESSION['uid'];
  $uname = $_SESSION['uname'];
  $s11 = $_POST['s11'];
  $s22 = $_POST['s22'];

  $totalamt2 = $s11 + ($s22);

  mysqli_query($con,"INSERT INTO `tbl_entry1`(`rdate`,`uid`,`user`,`amt1`,`amt2`,`totalamt`,`cat`) VALUES ('".$rdate."','".$uid."','".$uname."','".$s11."','".$s22."','".$totalamt2."','1002') ");
  header('location:hpolicy');
}
}

if(isset($_POST['btnsecond2']))
{
  $absecond2 = mysqli_query($con,"SELECT * FROM `tbl_entry1` WHERE `uid` = '".$_SESSION['uid']."' AND `cat` = '1002' ");
  $abcsecond2 = mysqli_num_rows($absecond2);
  if($abcsecond2>0)
  {
   echo "<script>
   alert('Already Submited..');
   window.location.href='hpolicy';
   </script>";
  }
  else
  {
  $rdate = date('Y-m-d');
  $uid = $_SESSION['uid'];
  $uname = $_SESSION['uname'];
  $s111 = $_POST['s111'];
  $s222 = $_POST['s222'];

  $totalamt22 = $s111 + $s222;

  mysqli_query($con,"INSERT INTO `tbl_entry1`(`rdate`,`uid`,`user`,`amt1`,`amt2`,`totalamt`,`cat`) VALUES ('".$rdate."','".$uid."','".$uname."','".$s111."','".$s222."','".$totalamt22."','1002') ");
  header('location:hpolicy');
}
}

if(isset($_POST['btnsecond3']))
{
  $absecond3 = mysqli_query($con,"SELECT * FROM `tbl_entry1` WHERE `uid` = '".$_SESSION['uid']."' AND `cat` = '1002' ");
  $abcsecond3 = mysqli_num_rows($absecond3);
  if($abcsecond3>0)
  {
   echo "<script>
   alert('Already Submited..');
   window.location.href='hpolicy';
   </script>";
  }
  else
  {
  $rdate = date('Y-m-d');
  $uid = $_SESSION['uid'];
  $uname = $_SESSION['uname'];
  $s1111 = $_POST['s1111'];
  $s2222= $_POST['s2222'];

  $totalamt222 = $s1111 + $s2222;

  mysqli_query($con,"INSERT INTO `tbl_entry1`(`rdate`,`uid`,`user`,`amt1`,`amt2`,`totalamt`,`cat`) VALUES ('".$rdate."','".$uid."','".$uname."','".$s1111."','".$s2222."','".$totalamt222."','1002') ");
  header('location:hpolicy');
}
}
/*second end*/


/*third start*/
if(isset($_POST['btnthird1']))
{
  $abthird = mysqli_query($con,"SELECT * FROM `tbl_entry1` WHERE `uid` = '".$_SESSION['uid']."' AND `cat` = '1003' ");
  $abcthird1 = mysqli_num_rows($abthird);
  if($abcthird1>0)
  {
   echo "<script>
   alert('Already Submited..');
   window.location.href='hpolicy';
   </script>";
  }
  else
  {
  $rdate = date('Y-m-d');
  $uid = $_SESSION['uid'];
  $uname = $_SESSION['uname'];
  $t11 = $_POST['t11'];
  $t22 = $_POST['t22'];

  $totalamt3 = $t11 + ($t22);

  mysqli_query($con,"INSERT INTO `tbl_entry1`(`rdate`,`uid`,`user`,`amt1`,`amt2`,`totalamt`,`cat`) VALUES ('".$rdate."','".$uid."','".$uname."','".$t11."','".$t22."','".$totalamt3."','1003') ");
  header('location:hpolicy');
}
}

if(isset($_POST['btnthird2']))
{
  $abthird2 = mysqli_query($con,"SELECT * FROM `tbl_entry1` WHERE `uid` = '".$_SESSION['uid']."' AND `cat` = '1003' ");
  $abcthird22 = mysqli_num_rows($abthird2);
  if($abcthird22>0)
  {
   echo "<script>
   alert('Already Submited..');
   window.location.href='hpolicy';
   </script>";
  }
  else
  {
  $rdate = date('Y-m-d');
  $uid = $_SESSION['uid'];
  $uname = $_SESSION['uname'];
  $t111 = $_POST['t111'];
  $t222 = $_POST['t222'];

  $totalamt33 = $t111 + $t222;

  mysqli_query($con,"INSERT INTO `tbl_entry1`(`rdate`,`uid`,`user`,`amt1`,`amt2`,`totalamt`,`cat`) VALUES ('".$rdate."','".$uid."','".$uname."','".$t111."','".$t222."','".$totalamt33."','1003') ");
  header('location:hpolicy');
}
}

if(isset($_POST['btnthird3']))
{
  $abthird3 = mysqli_query($con,"SELECT * FROM `tbl_entry1` WHERE `uid` = '".$_SESSION['uid']."' AND `cat` = '1003' ");
  $abcthird33 = mysqli_num_rows($abthird3);
  if($abcthird33>0)
  {
   echo "<script>
   alert('Already Submited..');
   window.location.href='hpolicy';
   </script>";
  }
  else
  {
  $rdate = date('Y-m-d');
  $uid = $_SESSION['uid'];
  $uname = $_SESSION['uname'];
  $t1111 = $_POST['t1111'];
  $t2222 = $_POST['t2222'];

  $totalamt333 = $t1111 + $t2222;

  mysqli_query($con,"INSERT INTO `tbl_entry1`(`rdate`,`uid`,`user`,`amt1`,`amt2`,`totalamt`,`cat`) VALUES ('".$rdate."','".$uid."','".$uname."','".$t1111."','".$t2222."','".$totalamt3."','1003') ");
  header('location:hpolicy');
}
}
/*third end*/

/*fourth start*/
if(isset($_POST['btnfourth1']))
{
  $abfourth = mysqli_query($con,"SELECT * FROM `tbl_entry1` WHERE `uid` = '".$_SESSION['uid']."' AND `cat` = '1004' ");
  $abcfourth1 = mysqli_num_rows($abfourth);
  if($abcfourth1>0)
  {
   echo "<script>
   alert('Already Submited..');
   window.location.href='hpolicy';
   </script>";
  }
  else
  {
  $rdate = date('Y-m-d');
  $uid = $_SESSION['uid'];
  $uname = $_SESSION['uname'];
  $f11 = $_POST['f11'];
  $f22 = $_POST['f22'];

  $totalamt4 = $f11 + ($f22);

  mysqli_query($con,"INSERT INTO `tbl_entry1`(`rdate`,`uid`,`user`,`amt1`,`amt2`,`totalamt`,`cat`) VALUES ('".$rdate."','".$uid."','".$uname."','".$f11."','".$f22."','".$totalamt4."','1004') ");
  header('location:hpolicy');
}
}

if(isset($_POST['btnfourth2']))
{
  $abfourth2 = mysqli_query($con,"SELECT * FROM `tbl_entry1` WHERE `uid` = '".$_SESSION['uid']."' AND `cat` = '1004' ");
  $abcfourth22 = mysqli_num_rows($abfourth2);
  if($abcfourth22>0)
  {
   echo "<script>
   alert('Already Submited..');
   window.location.href='hpolicy';
   </script>";
  }
  else
  {
  $rdate = date('Y-m-d');
  $uid = $_SESSION['uid'];
  $uname = $_SESSION['uname'];
  $f111 = $_POST['f111'];
  $f222 = $_POST['f222'];

  $totalamt44 = $f111 + ($f222);

  mysqli_query($con,"INSERT INTO `tbl_entry1`(`rdate`,`uid`,`user`,`amt1`,`amt2`,`totalamt`,`cat`) VALUES ('".$rdate."','".$uid."','".$uname."','".$f111."','".$f222."','".$totalamt44."','1004') ");
  header('location:hpolicy');
}
}

if(isset($_POST['btnfourth3']))
{
  $abfourth3 = mysqli_query($con,"SELECT * FROM `tbl_entry1` WHERE `uid` = '".$_SESSION['uid']."' AND `cat` = '1004' ");
  $abcfourth33 = mysqli_num_rows($abfourth3);
  if($abcfourth33>0)
  {
   echo "<script>
   alert('Already Submited..');
   window.location.href='hpolicy';
   </script>";
  }
  else
  {
  $rdate = date('Y-m-d');
  $uid = $_SESSION['uid'];
  $uname = $_SESSION['uname'];
  $f1111 = $_POST['f1111'];
  $f2222 = $_POST['f2222'];

  $totalamt444 = $f1111 + ($f2222);

  mysqli_query($con,"INSERT INTO `tbl_entry1`(`rdate`,`uid`,`user`,`amt1`,`amt2`,`totalamt`,`cat`) VALUES ('".$rdate."','".$uid."','".$uname."','".$f1111."','".$f2222."','".$totalamt444."','1004') ");
  header('location:hpolicy');
}
}

if(isset($_POST['btnfourth4']))
{
  $abfourth4 = mysqli_query($con,"SELECT * FROM `tbl_entry1` WHERE `uid` = '".$_SESSION['uid']."' AND `cat` = '1004' ");
  $abcfourth44 = mysqli_num_rows($abfourth4);
  if($abcfourth44>0)
  {
   echo "<script>
   alert('Already Submited..');
   window.location.href='hpolicy';
   </script>";
  }
  else
  {
  $rdate = date('Y-m-d');
  $uid = $_SESSION['uid'];
  $uname = $_SESSION['uname'];
  $f11111 = $_POST['f11111'];
  $f22222 = $_POST['f22222'];

  $totalamt4444 = $f11111 + ($f22222);

  mysqli_query($con,"INSERT INTO `tbl_entry1`(`rdate`,`uid`,`user`,`amt1`,`amt2`,`totalamt`,`cat`) VALUES ('".$rdate."','".$uid."','".$uname."','".$f11111."','".$f22222."','".$totalamt4444."','1004') ");
  header('location:hpolicy');
}
}
/*fourthn end*/

/*fifth start*/
if(isset($_POST['btnfifth1']))
{
  $abfifth = mysqli_query($con,"SELECT * FROM `tbl_entry1` WHERE `uid` = '".$_SESSION['uid']."' AND `cat` = '1005' ");
  $abcfifth1 = mysqli_num_rows($abfifth);
  if($abcfifth1>0)
  {
   echo "<script>
   alert('Already Submited..');
   window.location.href='hpolicy';
   </script>";
  }
  else
  {
  $rdate = date('Y-m-d');
  $uid = $_SESSION['uid'];
  $uname = $_SESSION['uname'];
  $fi11 = $_POST['fi11'];
  $fi22 = $_POST['fi22'];

  $totalamt5 = $fi11 + ($fi22);

  mysqli_query($con,"INSERT INTO `tbl_entry1`(`rdate`,`uid`,`user`,`amt1`,`amt2`,`totalamt`,`cat`) VALUES ('".$rdate."','".$uid."','".$uname."','".$fi11."','".$fi22."','".$totalamt5."','1005') ");
  header('location:hpolicy');
}
}

if(isset($_POST['btnfifth2']))
{
  $abfifth2 = mysqli_query($con,"SELECT * FROM `tbl_entry1` WHERE `uid` = '".$_SESSION['uid']."' AND `cat` = '1005' ");
  $abcfifth22 = mysqli_num_rows($abfifth2);
  if($abcfifth22>0)
  {
   echo "<script>
   alert('Already Submited..');
   window.location.href='hpolicy';
   </script>";
  }
  else
  {
  $rdate = date('Y-m-d');
  $uid = $_SESSION['uid'];
  $uname = $_SESSION['uname'];
  $fi111 = $_POST['fi111'];
  $fi222 = $_POST['fi222'];

  $totalamt55 = $fi111 + ($fi222);

  mysqli_query($con,"INSERT INTO `tbl_entry1`(`rdate`,`uid`,`user`,`amt1`,`amt2`,`totalamt`,`cat`) VALUES ('".$rdate."','".$uid."','".$uname."','".$fi111."','".$fi222."','".$totalamt55."','1005') ");
  header('location:hpolicy');
}
}
/*fifth end*/

/*sixsth start*/
if(isset($_POST['btnsixsth1']))
{
  $absixsth = mysqli_query($con,"SELECT * FROM `tbl_entry1` WHERE `uid` = '".$_SESSION['uid']."' AND `cat` = '1006' ");
  $abcsixsth1 = mysqli_num_rows($absixsth);
  if($abcsixsth1>0)
  {
   echo "<script>
   alert('Already Submited..');
   window.location.href='hpolicy';
   </script>";
  }
  else
  {
  $rdate = date('Y-m-d');
  $uid = $_SESSION['uid'];
  $uname = $_SESSION['uname'];
  $si11 = $_POST['si11'];
  $si22 = $_POST['si22'];

  $totalamt6 = $si11 + ($si22);

  mysqli_query($con,"INSERT INTO `tbl_entry1`(`rdate`,`uid`,`user`,`amt1`,`amt2`,`totalamt`,`cat`) VALUES ('".$rdate."','".$uid."','".$uname."','".$si11."','".$si22."','".$totalamt6."','1006') ");
  header('location:hpolicy');
}
}

if(isset($_POST['btnsixsth2']))
{
  $absixsth2 = mysqli_query($con,"SELECT * FROM `tbl_entry1` WHERE `uid` = '".$_SESSION['uid']."' AND `cat` = '1006' ");
  $abcsixsth22 = mysqli_num_rows($absixsth2);
  if($abcsixsth22>0)
  {
   echo "<script>
   alert('Already Submited..');
   window.location.href='hpolicy';
   </script>";
  }
  else
  {
  $rdate = date('Y-m-d');
  $uid = $_SESSION['uid'];
  $uname = $_SESSION['uname'];
  $si111 = $_POST['si111'];
  $si222 = $_POST['si222'];

  $totalamt66 = $si111 + ($si222);

  mysqli_query($con,"INSERT INTO `tbl_entry1`(`rdate`,`uid`,`user`,`amt1`,`amt2`,`totalamt`,`cat`) VALUES ('".$rdate."','".$uid."','".$uname."','".$si111."','".$si222."','".$totalamt66."','1006') ");
  header('location:hpolicy');
}
}

if(isset($_POST['btnsixsth3']))
{
  $absixsth3 = mysqli_query($con,"SELECT * FROM `tbl_entry1` WHERE `uid` = '".$_SESSION['uid']."' AND `cat` = '1006' ");
  $abcsixsth33 = mysqli_num_rows($absixsth3);
  if($abcsixsth33>0)
  {
   echo "<script>
   alert('Already Submited..');
   window.location.href='hpolicy';
   </script>";
  }
  else
  {
  $rdate = date('Y-m-d');
  $uid = $_SESSION['uid'];
  $uname = $_SESSION['uname'];
  $si1111 = $_POST['si1111'];
  $si2222 = $_POST['si2222'];

  $totalamt666 = $si1111 + ($si2222);

  mysqli_query($con,"INSERT INTO `tbl_entry1`(`rdate`,`uid`,`user`,`amt1`,`amt2`,`totalamt`,`cat`) VALUES ('".$rdate."','".$uid."','".$uname."','".$si1111."','".$si2222."','".$totalamt666."','1006') ");
  header('location:hpolicy');
}
}
/*sixsth end*/


/*seventh start*/
if(isset($_POST['btnseventh1']))
{
  $abseventh = mysqli_query($con,"SELECT * FROM `tbl_entry1` WHERE `uid` = '".$_SESSION['uid']."' AND `cat` = '1007' ");
  $abcseventh1 = mysqli_num_rows($abseventh);
  if($abcseventh1>0)
  {
   echo "<script>
   alert('Already Submited..');
   window.location.href='hpolicy';
   </script>";
  }
  else
  {
  $rdate = date('Y-m-d');
  $uid = $_SESSION['uid'];
  $uname = $_SESSION['uname'];
  $se11 = $_POST['se11'];
  $se22 = $_POST['se22'];

  $totalamt7 = $se11 + ($se22);

  mysqli_query($con,"INSERT INTO `tbl_entry1`(`rdate`,`uid`,`user`,`amt1`,`amt2`,`totalamt`,`cat`) VALUES ('".$rdate."','".$uid."','".$uname."','".$se11."','".$se22."','".$totalamt7."','1007') ");
  header('location:hpolicy');
}
}

if(isset($_POST['btnseventh2']))
{
  $abseventh2 = mysqli_query($con,"SELECT * FROM `tbl_entry1` WHERE `uid` = '".$_SESSION['uid']."' AND `cat` = '1007' ");
  $abcseventh22 = mysqli_num_rows($abseventh2);
  if($abcseventh22>0)
  {
   echo "<script>
   alert('Already Submited..');
   window.location.href='hpolicy';
   </script>";
  }
  else
  {
  $rdate = date('Y-m-d');
  $uid = $_SESSION['uid'];
  $uname = $_SESSION['uname'];
  $se111 = $_POST['se111'];
  $se222 = $_POST['se222'];

  $totalamt77 = $se111 + ($se222);

  mysqli_query($con,"INSERT INTO `tbl_entry1`(`rdate`,`uid`,`user`,`amt1`,`amt2`,`totalamt`,`cat`) VALUES ('".$rdate."','".$uid."','".$uname."','".$se111."','".$se222."','".$totalamt77."','1007') ");
  header('location:hpolicy');
}
}
/*seventh end*/

/*eight start*/
if(isset($_POST['btneight1']))
{
  $abeight = mysqli_query($con,"SELECT * FROM `tbl_entry1` WHERE `uid` = '".$_SESSION['uid']."' AND `cat` = '1008' ");
  $abceight1 = mysqli_num_rows($abeight);
  if($abceight1>0)
  {
   echo "<script>
   alert('Already Submited..');
   window.location.href='hpolicy';
   </script>";
  }
  else
  {
  $rdate = date('Y-m-d');
  $uid = $_SESSION['uid'];
  $uname = $_SESSION['uname'];
  $e11 = $_POST['e11'];
  $e22 = $_POST['e22'];

  $totalamt8 = $e11 + ($e22);

  mysqli_query($con,"INSERT INTO `tbl_entry1`(`rdate`,`uid`,`user`,`amt1`,`amt2`,`totalamt`,`cat`) VALUES ('".$rdate."','".$uid."','".$uname."','".$e11."','".$e22."','".$totalamt8."','1008') ");
  header('location:hpolicy');
}
}

if(isset($_POST['btneight2']))
{
  $abeight2 = mysqli_query($con,"SELECT * FROM `tbl_entry1` WHERE `uid` = '".$_SESSION['uid']."' AND `cat` = '1008' ");
  $abceight22 = mysqli_num_rows($abeight2);
  if($abceight22>0)
  {
   echo "<script>
   alert('Already Submited..');
   window.location.href='hpolicy';
   </script>";
  }
  else
  {
  $rdate = date('Y-m-d');
  $uid = $_SESSION['uid'];
  $uname = $_SESSION['uname'];
  $e111 = $_POST['e111'];
  $e222 = $_POST['e222'];

  $totalamt88 = $e111 + ($e222);

  mysqli_query($con,"INSERT INTO `tbl_entry1`(`rdate`,`uid`,`user`,`amt1`,`amt2`,`totalamt`,`cat`) VALUES ('".$rdate."','".$uid."','".$uname."','".$e111."','".$e222."','".$totalamt88."','1008') ");
  header('location:hpolicy');
}
}
/*eight end*/
?>
<!DOCTYPE html>
<html>
<head>
	<title>Health Policy Page</title>
	<?php include('bootcdn.php') ?>
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
			<!-- <span class="glyphicon glyphicon-leaf"></span>
			<b>Room Rent Limit</b> -->
      <form method="post">
        <button type="submit" name="delbtn">
          <span class="glyphicon glyphicon-refresh"></span>
          Refresh
        </button>
      </form>
		</div>

    <!-- policy chart start -->
    <div class="row">

      <div class="col-sm-3">
        <form method="post">
          <input type="hidden" name="hidamt1" value="2251">
          <input type="hidden" name="hidamt2" value="-100">
        <button style="width:100%;background:none;border:none;" type="submit" name="btnp">
        <div class="well">
          <h4>Room Rent Limit</h4>
          <p>5 Lakh</p> 
          <p>Rs. -100 Premium/month</p>
        </div>
      </button>
    </form>
      </div>

       <div class="col-sm-3">
        <form method="post">
          <input type="hidden" name="hidamt11" value="2251">
          <input type="hidden" name="hidamt22" value="200">
        <button style="width:100%;background:none;border:none;" type="submit" name="btnp1">
        <div class="well">
          <h4>Room Rent Limit</h4>
          <p>20 Lakh</p>
          <p>Rs. +200 Premium/month</p>
        </div>
      </button>
      </div>

       <div class="col-sm-3">
        <form method="post">
          <input type="hidden" name="hidamt111" value="2251">
          <input type="hidden" name="hidamt222" value="0">
          <button style="width:100%;background:none;border:none;" type="submit" name="btnp2">
        <div style="border:1px solid green;background-color:lightsteelblue;" class="well">
          <h4>Room Rent Limit <span class="glyphicon glyphicon-ok"></span> </h4>
          <p>10 Lakh</p>
          <p>Rs. +0 Premium/month</p>
        </div>
      </button>
      </div>   
    </div>

    <!-- second start -->
    <div class="row">

      <div class="col-sm-3">
        <form method="post">
          <input type="hidden" name="s11" value="2251">
          <input type="hidden" name="s22" value="-70">
        <button style="width:100%;background:none;border:none;" type="submit" name="btnsecond1">
        <div class="well">
          <h4>Free Health Check-Up</h4>
          <p>Rs. 100 for Every Lakh (Once a year)</p> 
          <p>Rs. -70 Premium/month</p>
        </div>
      </button>
    </form>
      </div>

      <div class="col-sm-3">
        <form method="post">
          <input type="hidden" name="s111" value="2251">
          <input type="hidden" name="s222" value="30">
        <button style="width:100%;background:none;border:none;" type="submit" name="btnsecond2">
        <div class="well">
          <h4>Free Health Check-Up</h4>
          <p>Rs. 600 for Every Lakh (Once a year)</p> 
          <p>Rs. +30 Premium/month</p>
        </div>
      </button>
    </form>
      </div>

      <div class="col-sm-3">
        <form method="post">
          <input type="hidden" name="s1111" value="2251">
          <input type="hidden" name="s2222" value="0">
        <button style="width:100%;background:none;border:none;" type="submit" name="btnsecond3">
        <div style="border:1px solid green;background-color:lightsteelblue;" class="well">
          <h4>Free Health Check-Up</h4>
          <p>Rs. 500 for Every Lakh (Once a year)</p> 
          <p>Rs. +0 Premium/month</p>
        </div>
      </button>
    </form>
      </div>


    </div>
    <!-- second end -->


    <!-- third start -->
    <div class="row">

      <div class="col-sm-3">
        <form method="post">
          <input type="hidden" name="t11" value="2251">
          <input type="hidden" name="t22" value="-50">
        <button style="width:100%;background:none;border:none;" type="submit" name="btnthird1">
        <div class="well">
          <h4>Pre Hospitalization Check-Up</h4>
          <p>Uo to 30 days</p> 
          <p>Rs. -50 Premium/month</p>
        </div>
      </button>
    </form>
      </div>

     <div class="col-sm-3">
        <form method="post">
          <input type="hidden" name="t111" value="2251">
          <input type="hidden" name="t222" value="50">
        <button style="width:100%;background:none;border:none;" type="submit" name="btnthird2">
        <div class="well">
          <h4>Pre Hospitalization Check-Up</h4>
          <p>Uo to 90 days</p> 
          <p>Rs. +50 Premium/month</p>
        </div>
      </button>
    </form>
      </div>

      <div class="col-sm-3">
        <form method="post">
          <input type="hidden" name="t1111" value="2251">
          <input type="hidden" name="t2222" value="0">
        <button style="width:100%;background:none;border:none;" type="submit" name="btnthird3">
        <div style="border:1px solid green;background-color:lightsteelblue;" class="well">
          <h4>Pre Hospitalization Check-Up</h4>
          <p>Uo to 60 days</p> 
          <p>Rs. +0 Premium/month</p>
        </div>
      </button>
    </form>
      </div>


    </div>
    <!-- third end -->


    <!-- fourth start -->
    <div class="row">

      <div class="col-sm-3">
        <form method="post">
          <input type="hidden" name="f11" value="2251">
          <input type="hidden" name="f22" value="-100">
        <button style="width:100%;background:none;border:none;" type="submit" name="btnfourth1">
        <div class="well">
          <h4>Post Hospitalization Coverage</h4>
          <p>Uo to 60 days</p> 
          <p>Rs. -100 Premium/month</p>
        </div>
      </button>
    </form>
      </div>

      <div class="col-sm-3">
        <form method="post">
          <input type="hidden" name="f111" value="2251">
          <input type="hidden" name="f222" value="-50">
        <button style="width:100%;background:none;border:none;" type="submit" name="btnfourth2">
        <div class="well">
          <h4>Post Hospitalization Coverage</h4>
          <p>Uo to 90 days</p> 
          <p>Rs. -50 Premium/month</p>
        </div>
      </button>
    </form>
      </div>

      <div class="col-sm-3">
        <form method="post">
          <input type="hidden" name="f1111" value="2251">
          <input type="hidden" name="f2222" value="100">
        <button style="width:100%;background:none;border:none;" type="submit" name="btnfourth3">
        <div class="well">
          <h4>Post Hospitalization Coverage</h4>
          <p>Uo to 240 days</p> 
          <p>Rs. +100 Premium/month</p>
        </div>
      </button>
    </form>
      </div>

      <div class="col-sm-3">
        <form method="post">
          <input type="hidden" name="f11111" value="2251">
          <input type="hidden" name="f22222" value="0">
        <button style="width:100%;background:none;border:none;" type="submit" name="btnfourth4">
        <div style="border:1px solid green;background-color:lightsteelblue;" class="well">
          <h4>Post Hospitalization Coverage</h4>
          <p>Uo to 180 days</p> 
          <p>Rs. +0 Premium/month</p>
        </div>
      </button>
    </form>
      </div>

    </div>
    <!-- fourth end -->

    <!-- fifth start -->
    <div class="row">

      <div class="col-sm-3">
        <form method="post">
          <input type="hidden" name="fi11" value="2251">
          <input type="hidden" name="fi22" value="-40">
        <button style="width:100%;background:none;border:none;" type="submit" name="btnfifth1">
        <div class="well">
          <h4>Ambulance Charges</h4>
          <p>No</p> 
          <p>Rs. -40 Premium/month</p>
        </div>
      </button>
    </form>
      </div>

       <div class="col-sm-3">
        <form method="post">
          <input type="hidden" name="fi111" value="2251">
          <input type="hidden" name="fi222" value="0">
        <button style="width:100%;background:none;border:none;" type="submit" name="btnfifth2">
        <div style="border:1px solid green;background-color:lightsteelblue;" class="well">
          <h4>Ambulance Charges</h4>
          <p>2000/Hospitalization</p> 
          <p>Rs. +0 Premium/month</p>
        </div>
      </button>
    </form>
      </div>

    </div>
    <!-- fifth end -->


    <!-- sixsth start -->
    <div class="row">

      <div class="col-sm-3">
        <form method="post">
          <input type="hidden" name="si11" value="2251">
          <input type="hidden" name="si22" value="-50">
        <button style="width:100%;background:none;border:none;" type="submit" name="btnsixsth1">
        <div class="well">
          <h4>Existing Illness Cover</h4>
          <p>1 Year</p> 
          <p>Rs. -50 Premium/month</p>
        </div>
      </button>
    </form>
      </div>

      <div class="col-sm-3">
        <form method="post">
          <input type="hidden" name="si111" value="2251">
          <input type="hidden" name="si222" value="+100">
        <button style="width:100%;background:none;border:none;" type="submit" name="btnsixsth2">
        <div class="well">
          <h4>Existing Illness Cover</h4>
          <p>5 Years</p> 
          <p>Rs. +100 Premium/month</p>
        </div>
      </button>
    </form>
      </div>

      <div class="col-sm-3">
        <form method="post">
          <input type="hidden" name="si1111" value="2251">
          <input type="hidden" name="si2222" value="0">
        <button style="width:100%;background:none;border:none;" type="submit" name="btnsixsth3">
        <div style="border:1px solid green;background-color:lightsteelblue;" class="well">
          <h4>Existing Illness Cover</h4>
          <p>3 Years</p> 
          <p>Rs. +0 Premium/month</p>
        </div>
      </button>
    </form>
      </div>

</div>
    <!-- sixsth end -->

    <!-- seventh start -->
    <div class="row">

      <div class="col-sm-3">
        <form method="post">
          <input type="hidden" name="se11" value="2251">
          <input type="hidden" name="se22" value="-30">
        <button style="width:100%;background:none;border:none;" type="submit" name="btnseventh1">
        <div class="well">
          <h4>Domestic Evacuation</h4>
          <p>No</p> 
          <p>Rs. -30 Premium/month</p>
        </div>
      </button>
    </form>
      </div>

       <div class="col-sm-3">
        <form method="post">
          <input type="hidden" name="se111" value="2251">
          <input type="hidden" name="se222" value="0">
        <button style="width:100%;background:none;border:none;" type="submit" name="btnseventh2">
        <div style="border:1px solid green;background-color:lightsteelblue;" class="well">
          <h4>Domestic Evacuation</h4>
          <p>10 Lakh (for cashless)</p> 
          <p>Rs. +0 Premium/month</p>
        </div>
      </button>
    </form>
      </div>

    </div>
    <!-- seventh end -->

    <!-- eigth start -->
    <div class="row">

      <div class="col-sm-3">
        <form method="post">
          <input type="hidden" name="e11" value="2251">
          <input type="hidden" name="e22" value="-30">
        <button style="width:100%;background:none;border:none;" type="submit" name="btneight1">
        <div class="well">
          <h4>Daily Cash Allowance</h4>
          <p>No</p> 
          <p>Rs. -30 Premium/month</p>
        </div>
      </button>
    </form>
      </div>

     <div class="col-sm-3">
        <form method="post">
          <input type="hidden" name="e111" value="2251">
          <input type="hidden" name="e222" value="0">
        <button style="width:100%;background:none;border:none;" type="submit" name="btneight2">
        <div style="border:1px solid green;background-color:lightsteelblue;" class="well">
          <h4>Daily Cash Allowance</h4>
          <p>2000/day</p> 
          <p>Rs. +0 Premium/month</p>
        </div>
      </button>
    </form>
      </div>


    </div>
    <!-- eight end -->

    <!-- policy chart end -->
		

		<!-- -------------------- Content page end ----------------------------- -->
		
	</div>

</body>
</html>