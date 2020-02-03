<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	
	<script type="text/javascript">
		var base_url = "<?php echo base_url() ?>";
	</script>

	<title>Schoool Templete</title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>font_end/plugins/fontawesome-free/css/all.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<!-- Tempusdominus Bbootstrap 4 -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>font_end/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
	<!-- iCheck -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>font_end/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
	<!-- JQVMap -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>font_end/plugins/jqvmap/jqvmap.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>font_end/dist/css/adminlte.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>style.css">
		<!-- Theme style -->
	<!-- <link rel="stylesheet" href="<?php echo base_url(); ?>font_end/dist/css/stylesautocomplete.css"> -->
	<!-- overlayScrollbars -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>font_end/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
	<!-- Daterange picker -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>font_end/plugins/daterangepicker/daterangepicker.css">
	<!-- summernote -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>font_end/plugins/summernote/summernote-bs4.css">
	<!-- Google Font: Source Sans Pro -->
	<link href="https://fonts.googleapis.com/css?family=Ewert|Modak|Zhi+Mang+Xing&display=swap" rel="stylesheet">

</head>
<body class="hold-transition sidebar-mini layout-fixed">

<div class="container mt-2">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url() ?>/home/home_body">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url() ?>/home/about">About</a>
      </li>
      <li class="nav-item dropdown">
				<a class="nav-link" data-toggle="dropdown" href="#">
					Acadamics
				</a>
				<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
					<span class="dropdown-item dropdown-header">15 Notifications</span>
					<div class="dropdown-divider"></div>
					<a href="#" class="dropdown-item">
						<i class="fas fa-envelope mr-2"></i> 4 new messages
						<span class="float-right text-muted text-sm">3 mins</span>
					</a>
					<div class="dropdown-divider"></div>
					<a href="#" class="dropdown-item">
						<i class="fas fa-users mr-2"></i> 8 friend requests
						<span class="float-right text-muted text-sm">12 hours</span>
					</a>
					<div class="dropdown-divider"></div>
					<a href="#" class="dropdown-item">
						<i class="fas fa-file mr-2"></i> 3 new reports
						<span class="float-right text-muted text-sm">2 days</span>
					</a>
					<div class="dropdown-divider"></div>
					<a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
				</div>
			</li>
      <li class="nav-item">
			<div class="dropdown">
			  <button class="dropbtn">Admission</button>
			  <div class="dropdown-content">
			    <a href="#">Graduate</a>
			    <a href="#">Undergraduate</a>
			    <a href="#">Link 3</a>
			    <a href="#">Link 1</a>
			    <a href="#">Link 2</a>
			    <a href="#">Other</a>
			  </div>
			</div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Course</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
    <ul navbar-nav ml-auto>
    	<li class="nav-item dropdown"> 
				<a class="nav-link" data-toggle="dropdown" href="#"><i  id="profile" class="fas fa-user-circle"></i></a>
				<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
					<span class="dropdown-item dropdown-header" style="font-size: 20px; font-weight: bold;">Profile</span>
					<div class="dropdown-divider"></div>
					<a href="#" class="dropdown-item text-center">
						<img src="<?php echo base_url(); ?>admin_photo/<?php $photo = $this->session->userdata('photo');if($photo){echo $photo;}?>" style="height: 100px; width: 100px; border-radius: 50%;"><br>
						Profile Picture
						<br>
						<?php

						 $name = $this->session->userdata('name'); 
						 if ($name) {
								echo "<h4 style=\"font-weight: bold;\">$name</h4>";
						 }


						 ?>
					</a>
					<div class="dropdown-divider"></div>
					<a href="<?php echo base_url() ?>admin_logout" class="dropdown-item dropdown-footer"><i class="fas fa-power-off mr-1" aria-hidden="true"></i>LogOut</a>
				</div>
			</li>

    </ul>
  </div>
</nav>
</div>