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
        <span class="glyphicon glyphicon-user"></span> 
        <?php echo $_SESSION['aname'] ?>
        </a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li>
          <a href="home">
            <span class="glyphicon glyphicon-home"></span>
          Home
          </a>
        </li>

        <li>
          <a href="users">
            <span class="glyphicon glyphicon-list"></span>
          User List
          </a>
        </li>

        <li>
          <a href="profiles">
            <span class="glyphicon glyphicon-th"></span>
          Profiles
          </a>
        </li>

        <li>
          <a href="insurance">
            <span class="glyphicon glyphicon-hdd"></span>
          Insurance
          </a>
        </li>

        <li>
          <a href="payment">
            <span class="glyphicon glyphicon-list-alt"></span>
          Payment
          </a>
        </li>

        <!-- <li>
          <a href="hpolicy">
            <span class="glyphicon glyphicon-leaf"></span>
          Health Policy
          </a>
        </li> -->

        <li>
          <a href="history">
            <span class="glyphicon glyphicon-hdd"></span>
          History
          </a>
        </li>

        <li>
          <a href="logout">
            <span class="glyphicon glyphicon-off"></span>
          Logout
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>