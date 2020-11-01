<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description-gambolthemes" content="">
	<meta name="author-gambolthemes" content="">
	<title>Suvidhaye</title>
	<link href="/admin/css/styles.css" rel="stylesheet">
	<link href="/admin/css/admin-style.css" rel="stylesheet">
	
	<!-- Vendor Stylesheets -->
	<link href="/admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="/admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
	
</head>

<body class="sb-nav-fixed">
  <nav class="sb-topnav navbar navbar-expand navbar-light bg-clr">
    <a class="navbar-brand logo-brand" href="index.html">Gambo Supermarket</a>
      <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
      <a href="http://gambolthemes.net/html-items/gambo_supermarket_demo/index.html" class="frnt-link"><i class="fas fa-external-link-alt"></i>Home</a>
      <ul class="navbar-nav ml-auto mr-md-0">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
              <a class="dropdown-item admin-dropdown-item" href="edit_profile.html">Edit Profile</a>
  				    <a class="dropdown-item admin-dropdown-item" href="change_password.html">Change Password</a>
              <a class="dropdown-item admin-dropdown-item" href="login.html">Logout</a>
            </div>
        </li>
      </ul>
  </nav>
      @include('admin.layout.sidebar')  

            @yield('content')

          </div>
    <script src="/admin/js/jquery-3.4.1.min.js"></script>
    <script src="/admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
		<script src="/admin/vendor/chart/highcharts.js"></script>
		<script src="/admin/vendor/chart/exporting.js"></script>
		<script src="/admin/vendor/chart/export-data.js"></script>
		<script src="/admin/vendor/chart/accessibility.js"></script>
    <script src="/admin/js/scripts.js"></script>
    <script src="/admin/js/chart.js"></script>       
  </body>
</html>
