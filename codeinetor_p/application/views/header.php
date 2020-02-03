<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Dashboard</title>

  <script type="text/javascript">
  		var base_url = "<?php echo base_url() ?>";
  </script>


  <style type="text/css">


#input {
    border-radius: 0px;
    background: #4a4a4a;
    color: #96f226;
    border: 1px solid #454545;
    height: 0 0 30px;
}

#input:hover {
    background: #656565
}
#input:active {
    box-shadow: 0 0 30px #96f226
}
#input:focus {
    box-shadow: 0 0 30px #96f226
}
.ui-tooltip {
    background: #4a4a4a;
    color: red !important;
    border: 2px solid #454545;
    border-radius: 0px;
    margin-top: 20px !important;
    box-shadow: 0 0 
}
.ui-autocomplete {
    width: 15% !important;
    background: #ada465;
    border: 2px #000 !important;
/*    padding: 0 !important;*/
    padding: 5px 0px 0px 0px !important;
    z-index: 99999;
    list-style: none;
}
.ui-autocomplete li{
  border: 2px solid #616161 !important;
  background: #bc9cf1;
  border-radius: 6px;
  margin-top:6px; 
  margin-bottom: 2px;
}
.ui-autocomplete.source:hover {
    background: #454545;
}

.ui-menu .ui-menu-item a{
    background: white;
    width: 20px;
    border: 2px solid red;
    height:10px;
	 font-size:18px;
}

  </style>

  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url() ?>/font_end/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="<?php echo base_url() ?>/font_end/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url() ?>/font_end/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?php echo base_url() ?>/font_end/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url() ?>/font_end/dist/css/adminlte.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url() ?>/font_end/cropimg/croppie.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo base_url() ?>/font_end/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url() ?>/font_end/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="<?php echo base_url() ?>/font_end/plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light" style="z-index: 99999 !important">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?php echo base_url() ?>users" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>




    <!-- SEARCH FORM -->
    <form class="form-inline ml-3" id="search">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar search_text"  type="text" id="autocomplete" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
        	<input type="hidden" id="tagsid" name="tagsid">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>






    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#"><i class="fas fa-user-circle"></i></a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header" style="font-size: 20px; font-weight: bold;">Profile</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item text-center">
            
          </a>
          <div class="dropdown-divider">
          	
          </div>
          <a href="<?php echo base_url() ?>admin_logout" class="dropdown-item dropdown-footer"><i class="fas fa-power-off mr-1" aria-hidden="true"></i>LogOut</a>
        </div>
      </li>





      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#"><i class="fas fa-pen-square"></i></a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header" style="font-size: 20px; font-weight: bold;">change header color:</span>
          <div class="dropdown-divider">
          </div>
          <a href="#" class="dropdown-item text-center">
            <button class="Change_header_Background_red" style="width: 50px; height: 20px; background: red; border-radius: 20px"></button>
            <button class="Change_header_Background_blue" style="width: 50px; height: 20px; background: blue; border-radius: 20px"></button>
            <button class="Change_header_Background_pink" style="width: 50px; height: 20px; background: pink; border-radius: 20px"></button>
          </a>


          <span class="dropdown-item dropdown-header" style="font-size: 20px; font-weight: bold;">change leftSideber color:</span>
          <div class="dropdown-divider">
          </div>
          <a href="#" class="dropdown-item text-center">
            <button class="Change_leftsideber_Background_green" style="width: 50px; height: 20px; background: green; border-radius: 20px"></button>
            <button class="Change_leftsideber_Background_yellow" style="width: 50px; height: 20px; background: yellow; border-radius: 20px"></button>
            <button class="Change_leftsideber_Background_white" style="width: 50px; height: 20px; background: white; border-radius: 20px"></button>
          </a>



          <span class="dropdown-item dropdown-header" style="font-size: 20px; font-weight: bold;">change Body color:</span>
          <div class="dropdown-divider">
          </div>
          <a href="#" class="dropdown-item text-center">
            <button class="Change_body_Background_orange" style="width: 50px; height: 20px; background: orange; border-radius: 20px"></button>
            <button class="Change_body_Background_lalic" style="width: 50px; height: 20px; background: #B660CD; border-radius: 20px"></button>
            <button class="Change_body_Background_lime" style="width: 50px; height: 20px; background: #AEF35A; border-radius: 20px"></button>
          </a>


          <div class="dropdown-divider">
            
          </div>
          <a href="#" class="dropdown-item dropdown-footer"><i class="fas fa-power-off mr-1" aria-hidden="true"></i>Hide</a>
        </div>
      </li>





      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->


<!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <a href="#" class="d-block">Muhammod Jamil</a>
  </aside>
  <!-- /.control-sidebar -->




<!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo base_url() ?>users" class="brand-link">
      <img src="<?php echo base_url() ?>/font_end/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light" style="font-size: bold;">Users</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <!-- <img src="font_end/dist/img/jamil.jpg" class="img-circle elevation-2" alt="User Image"> -->
        </div>
        <div class="info">
          <a href="#" class="d-block">All Information</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="<?php echo base_url() ?>all_product" class="nav-link active">
              <i class="fas fa-cog"></i>
               <p>
                 DETAILS
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">

              <li class="nav-item">
                <a href="<?php echo base_url() ?>users" class="nav-link active">
                  <i class="fas fa-store-alt"></i>
                  <p>all_users</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="<?php echo base_url() ?>advance_search" class="nav-link active">
                  <i class="fas fa-search"></i>
                  <p>advance_search</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="<?php echo base_url() ?>search" class="nav-link active">
                  <i class="fas fa-store-alt"></i>
                  <p>Search_users</p>
                </a>
              </li>


              <li class="nav-item">
                <a href="<?php echo base_url() ?>add_user" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Prectice</p>
                </a>
              </li>

               <li class="nav-item">
                <a href="<?php echo base_url() ?>add_user" class="nav-link">
                  <i class="fas fa-user-plus"></i>
                  <p>Add_User</p>
                </a>
              </li>


              <li class="nav-item">
                <a href="<?php echo base_url() ?>prectice" class="nav-link">
                  <i class="fab fa-accessible-icon"></i>
                  <p>Prectice</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="<?php echo base_url() ?>invoice" class="nav-link">
                  <i class="fab fa-accessible-icon"></i>
                  <p>Invoice</p>
                </a>
              </li>


              <li class="nav-item">
                <a href="<?php echo base_url() ?>ninvoice" class="nav-link">
                  <i class="fab fa-accessible-icon"></i>
                  <p>NInvoice</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="<?php echo base_url() ?>data_table_search" class="nav-link">
                  <i class="fab fa-accessible-icon"></i>
                  <p>Data_Table_Search</p>
                </a>
              </li>

              

          </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>

  </aside>



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="min-width: 500px">