<style type="text/css">
  .navbar-inverse {background-color:#010E28;
                  border:none;
                  border-radius:0px;}
   #myNavbar ul li a {color:white;}
</style>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a style="color:white;" class="navbar-brand" href="#">
        <span style="background-color:white;color:#010E28;padding-top:1px;padding-bottom:4px;padding-right:2px;padding-left:2px;border-radius:10px;" class="glyphicon glyphicon-user"></span>
        <?php echo $_SESSION['uname'] ?></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="home">
        <span class="glyphicon glyphicon-home"></span>
        Home</a>
        </li>

        <li><a href="upload_profile">
        <span class="glyphicon glyphicon-list-alt"></span>
        Upload Profile</a>
        </li>

        <li><a href="create_policy">
        <span class="glyphicon glyphicon-edit"></span>
        Create Policy</a>
        </li>

        <li>
          <a href="hpolicy">
            <span class="glyphicon glyphicon-leaf"></span>
          Health Policy
          </a>
        </li>

        <li style="position:fixed;z-index:100;margin-left:-200px;">
          <?php
          $pdata = mysqli_query($con,"SELECT * FROM `tbl_entry1` WHERE `uid` = '".$_SESSION['uid']."' ");
          $total = 0;
          $tt = 2251;
          while($pdata1 = mysqli_fetch_assoc($pdata))
          {
             $total = $total + $pdata1['amt2'];
          }
          ?>
          <a style="background-color:steelblue;" href="#">
            <span class="glyphicon glyphicon-time"></span>
          Amount: <?php echo $total+$tt; ?>
          </a>
        </li>

 
      <li><a href="history">
        <span class="glyphicon glyphicon-hdd"></span>
        History</a>
        </li>
      

        <li><a href="logout">
        <span class="glyphicon glyphicon-off"></span>
        Logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>