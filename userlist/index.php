

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive sidebar template with sliding effect and dropdown menu based on bootstrap 3">
    <title>Sidebar template</title>
    <link rel="stylesheet" type="text/css" href="../thirdparties/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/admin.css">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">

   
</head>

<body>
<div class="page-wrapper chiller-theme toggled">
  <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
    <i class="fas fa-bars"></i>
  </a>
  <nav id="sidebar" class="sidebar-wrapper">
    <div class="sidebar-content">
      <div class="sidebar-brand">
        <a href="#">pro sidebar</a>
        <div id="close-sidebar">
          <i class="fas fa-times"></i>
        </div>
      </div>
      <div class="sidebar-header">
        <div class="user-pic">
          <img class="img-responsive img-rounded" src="https://raw.githubusercontent.com/azouaoui-med/pro-sidebar-template/gh-pages/src/img/user.jpg"
            alt="User picture">
        </div>
        <div class="user-info">
          <span class="user-name">
            <strong></strong>
          </span>
          <span class="user-role">Administrator</span>
          <span class="user-status">
            <i class="fa fa-circle"></i>
            <span>Online</span>
          </span>
        </div>
      </div>
      <!-- sidebar-header  -->
      <div class="sidebar-search">
        <div>
          <div class="input-group">
            <input type="text" class="form-control search-menu" placeholder="Search...">
            <div class="input-group-append">
              <span class="input-group-text">
                <i class="fa fa-search" aria-hidden="true"></i>
              </span>
            </div>
          </div>
        </div>
      </div>
      <!-- sidebar-search  -->
      <div class="sidebar-menu">
        <ul>
          <li class="header-menu">
            <span>General</span>
          </li>


          <li class="header-menu">
            <a href="../admin">
              <i class="fa fa-shopping-cart"></i>
              <span>Dashboard</span>
              
            </a>
          </li>
          <li class="header-menu">
            <a href="../userlist">
              <i class="fa fa-shopping-cart"></i>
              <span>Manage Users</span>
              
            </a>
          </li>
          <li class="header-menu">
            <a href="#">
              <i class="far fa-gem"></i>
              <span>Components</span>
            </a>
          
          </li>
          <li class="sidebar-dropdown">
            <a href="#">
              <i class="fa fa-chart-line"></i>
              <span>Charts</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="#">Pie chart</a>
                </li>
                <li>
                  <a href="#">Line chart</a>
                </li>
                <li>
                  <a href="#">Bar chart</a>
                </li>
                <li>
                  <a href="#">Histogram</a>
                </li>
              </ul>
            </div>
          </li>
          
        </ul>
      </div>
      <!-- sidebar-menu  -->
    </div>
    <!-- sidebar-content  -->
    <div class="sidebar-footer">
      <a href="#">
        <i class="fa fa-bell"></i>
        <span class="badge badge-pill badge-warning notification">3</span>
      </a>
      <a href="#">
        <i class="fa fa-envelope"></i>
        <span class="badge badge-pill badge-success notification">7</span>
      </a>
      <a href="#">
        <i class="fa fa-cog"></i>
        <span class="badge-sonar"></span>
      </a>
      <a href="#">
        <i class="fa fa-power-off"></i>
      </a>
    </div>
  </nav>
  <!-- sidebar-wrapper  -->
  <main class="page-content">
    <div class="container-fluid">
      <h2>User List</h2>
      <hr>
      
      

      

        <div class="card shadow container table-responsive">
          <div class=" services">
            <table class="table table-striped table-bordered table-sm" id="dataTable" width="100%" cellspacing="0">

              <?php
              require "../functions/functions.php";
                userList();

              ?>


            </table>
          </div>

        </div>

        
        
      
      

      <footer class="text-center">
        
      </footer>
    </div>
  </main>
  <!-- page-content" -->
</div>
<script type="text/javascript" src="../thirdparties/jquery/jquery.min.js"></script>
<script type="text/javascript" src="../thirdparties/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../js/admin.js"></script>
<script type="text/javascript" src="../thirdparties/accounting/accounting.js"></script>


  


  





</body>
</html>