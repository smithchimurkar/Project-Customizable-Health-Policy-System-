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
	<title>User Home Page</title>
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
			<span class="glyphicon glyphicon-home"></span>
			<b>HOME PAGE</b>
		</div>

		<div class="row">
			
			<div class="col-sm-4">

				<div class="panel panel-default">

					<div class="panel panel-header">
						<h4>Uploaded Profile</h4>
					</div>
 
                    <div class="panel panel-body">
                    	<div class="table-responsive">
                    	<table class="table">

                    	<tr>
                    	    <th>
						         Candidate Photo :
						    </th>
						    <td>
						    	<img src="<?php echo 'pimgs/'.$mrdata['photo'] ?>" width="100px">
						    </td>
					    </tr>

                    	<tr>
                    	    <th>
						         Candidate Name :
						    </th>
						    <td>
						    	<?php echo $mrdata['cname'] ?>
						    </td>
					    </tr>

						<tr>
							<th>
								Candidate Contact :
							</th>
							<td>
								<?php echo $mrdata['contact'] ?>
							</td>
						</tr>

						<tr>
							<th>
								Candidate Email :
							</th>
							<td>
								<?php echo $mrdata['email'] ?>
							</td>
						</tr>

						<tr>
							<th>
								Candidate Address :
							</th>
							<td>
								<?php echo $mrdata['address'] ?>
							</td>
						</tr>

					</table>
				</div>


                        <!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"><?php echo $_SESSION['uname']?> Profile</h4>
      </div>
      <div class="modal-body">

      	            <div class="table-responsive">
      	            	<table class="table table-striped table-hover">
      	            	<tr>
      	            		<th>Candidate Name :</th><td><?php echo $mrdata['cname'] ?></td>
      	            	</tr>	
                        
						<tr>
      	            		<th>Candidate Contact :</th><td><?php echo $mrdata['contact'] ?></td>
      	            	</tr>

						<tr>
      	            		<th>Candidate Email :</th><td><?php echo $mrdata['email'] ?></td>
      	            	</tr>

      	            	<tr>
      	            		<th>Candidate Address :</th><td><?php echo $mrdata['address'] ?></td>
      	            	</tr>
						
						<tr>
      	            		<th>Company Name :</th><td><?php echo $mrdata['company'] ?></td>
      	            	</tr>

						<tr>
      	            		<th>Company Address :</th><td><?php echo $mrdata['caddress'] ?></td>
      	            	</tr>

						<tr>
      	            		<th>Designation :</th><td><?php echo $mrdata['designation'] ?></td>
      	            	</tr>

						<tr>
      	            		<th>Income (in amount) :</th><td><?php echo $mrdata['income'] ?></td>
      	            	</tr>

						<tr>
      	            		<th>Personal Assets :</th><td><?php echo $mrdata['assets'] ?></td>
      	            	</tr>

						<tr>
      	            		<th>Any Liability :</th><td><?php echo $mrdata['liability'] ?></td>
      	            	</tr>

      	            </table>
      	        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

					</div>

					<div class="panel panel-footer">
						<button style="background-color:#010E28;" class="btn btn-primary btn-block" data-toggle="modal" data-target="#myModal">View All Information</button>
					</div>
					
				</div>
				
			</div>


			
		</div>
		
	</div>

</body>
</html>