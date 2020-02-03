<!DOCTYPE html>
<html lang="en">
<head>

<script type="text/javascript">
  		var base_url = "<?php echo base_url() ?>";
  </script>


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dynamic Navber Control</title>

	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo base_url() ?>/style/headstyle.css">

</head>
<body>

<div class="mainhead">
	<div class="headmain1">
	<div class="mainhead_left">
		<div class="logo">
			<a href="<?php echo base_url() ?>admin/home">
				<img src="<?php echo base_url() ?>logo.png" class="logoimg"  alt="">
			</a>
		</div>
		<div class="headcontent ml-5 mt-3">
			<h4>Estd: 45124</h4>
			<h2>Shahjalal University of Science and Technology</h2>
			<h3>Sylhet, Bangladesh</h3>
		</div>
	</div>
	<div class="mainhead_right">

	</div>
	</div>
</div>
<header class="headerstyle">
<div class="content">



	 
		<ul class="exo-menu">
			<li><a class="active" href="<?php echo base_url() ?>admin/home"><i class="fa fa-home"></i> Home</a></li>
			<li class="drop-down"><a href="#"><i class="fa fa-cogs"></i> About US</a>
				<!--Drop Down-->
				<ul class="drop-down-ul animated fadeIn">
				<li class="flyout-right"><a href="#">Flyout Right</a><!--Flyout Right-->
					<ul class="animated fadeIn">
						<li><a href="<?php echo base_url() ?>admin/about_us">About US</a></li>
						<li><a href="<?php echo base_url() ?>admin/campus">Campus Life</a></li>
						<li><a href="#">Watch</a></li>
					</ul>
				</li>
				
				<li class="flyout-left"><a href="#">Flyout Left</a><!--Flyout Left-->
					<ul class="animated fadeIn">
						<li><a href="#">Mobile</a></li>
						<li><a href="#">Computer</a></li>
						<li><a href="#">Watch</a></li>
					</ul>			
				</li>
				
				<li><a href="#">No Flyout</a></li>
				</ul>
				<!--//End drop down-->
			
			</li>
			<li><a href="<?php echo base_url() ?>admin/academics"><i class="fas fa-graduation-cap"></i> Academics</a></li>
			<li><a href="<?php echo base_url() ?>admin/addmission"><i class="fas fa-user-plus"></i> Addmission</a></li>
			<li class="mega-drop-down"><a href="<?php echo base_url() ?>admin/research"><i class="fas fa-flask"></i> RESOURCE</a>
				<div class="animated fadeIn mega-menu">
					<div class="mega-menu-wrap">
						<div class="row">
						<div class="col-md-4">
							<h4 class="row mega-title">Feature</h4>
								<img class="img-responsive" src="https://3.bp.blogspot.com/-rUk36pd-LbM/VcLb48X4f-I/AAAAAAAAGCI/Y_UxBAgEqwA/s1600/Magento_themes.jpg">
							</div>
							<div class="col-md-2">
									<h4 class="row mega-title">Standers</h4>
								<ul class="stander">
									<li><a href="<?php echo base_url() ?>admin/about_us">About US</a></li>
									<li><a href="#">Computer</a></li>
									<li><a href="#">Watch</a></li>
									<li><a href="#">laptop</a></li>
									<li><a href="#">Camera</a></li>
									<li><a href="#">I pad</a></li>
									<li><a class="view-more btn- btn-sm" href="#">View more</a></li>
								</ul>
							</div>
							<div class="col-md-3">
								<h4 class="row mega-title">Description</h4>
								<ul class="description">
									<li><a href="#">Women</a>
										<span>Description of Women</span>
									</li>
									<li><a href="#">Men</a>
											<span>Description of men Cloths</span>
									</li>
									<li><a href="#">Kids</a>
											<span>Description of Kids Cloths</span>
									</li>
									<li><a href="#">Others</a>
											<span>Description of Others Cloths</span>
									</li>
									<li>
									<a class="view-more btn btn-sm " href="#">View more</a>
											 
									</li>
								</ul>
							</div>
							<div class="col-md-3">
							<h4 class="row mega-title">Icon + Description</h4>
								<ul class="icon-des">
									<li><a href="#"><i class="fa fa-globe"></i>Web</a></li>
									<li><a href="#"><i class="fa fa-mobile"></i>Mobile</a></li>
									<li><a href="#"><i class="fa fa-arrows-h"></i>Responsive</a></li>
									<li><a href="#"><i class="fa fa-desktop"></i>Desktop</a></li>
									<li><a href="#"><i class="fa fa-paint-brush"></i>UI/UX</a></li>
								</ul>
							</div>
							
						</div>
					</div>	
				</div>
			</li>
			<li class="blog-drop-down"><a href="#"><i class="fa fa-bullhorn"></i> Blog</a>
				<div class="Blog animated fadeIn">
					<div class="row text-center">
					<div class="col-md-4 ml-5">
						<img class="img-fluid img-responsive" src="https://2.bp.blogspot.com/-VG_e0pKfrDo/VcLb6JwZqfI/AAAAAAAAGCk/8ZgA9kZqTQ8/s1600/images3.jpg">
						<div class="blog-des">
					<h4 class="blog-title">Lorem ipsum dolor sit amet</h4>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod 
							tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis
							nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. 
							Duis autem vel eum iriure dolor in hendrerit in vulputate. </p>
							<a class="view-more btn- btn-sm" href="#">Read More</a>
						</div>
					</div>
					<div class="col-md-4 ml-5">
						<img class="img-fluid img-responsive" src="https://3.bp.blogspot.com/-hUt5FrdZHio/VcLb5dlwTBI/AAAAAAAAGCU/UUH5N1JkoQc/s1600/images1.jpg">
						<div class="blog-des">
						<h4 class="blog-title">Lorem ipsum dolor sit amet</h4>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod 
							tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis
							nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. 
							Duis autem vel eum iriure dolor in hendrerit in vulputate. </p>
									<a class="view-more btn- btn-sm" href="#">Read More</a>
						</div>
					</div>
					<div class="col-md-4 ml-5">
						<img class=" img-fluid img-responsive" src="https://4.bp.blogspot.com/-A7U1uPlSq6Y/VcLb5kKHCkI/AAAAAAAAGCc/7WghyndTEuY/s1600/images2.jpg">
						<div class="blog-des">
						<h4 class="blog-title">Lorem ipsum dolor sit amet</h4>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod 
							tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis
							nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. 
							Duis autem vel eum iriure dolor in hendrerit in vulputate. </p>
									<a class="view-more btn- btn-sm" href="#">Read More</a>
						</div>
					</div>

					</div>
					 
					
				</div>
			</li>
			<li  class="images-drop-down"><a  href="<?php echo base_url() ?>admin/offices"><i class="fa fa-photo"></i> Offices</a>
				<div class="Images animated fadeIn">
					<div class="col-md-3">
						<h4>Images Title </h4>
						<img class="img-responsive" src="https://2.bp.blogspot.com/-VG_e0pKfrDo/VcLb6JwZqfI/AAAAAAAAGCk/8ZgA9kZqTQ8/s1600/images3.jpg">
					</div>
					<div class="col-md-3">
					<h4>Images Title </h4>
						<img class="img-responsive" src="https://3.bp.blogspot.com/-hUt5FrdZHio/VcLb5dlwTBI/AAAAAAAAGCU/UUH5N1JkoQc/s1600/images1.jpg">
					</div>
					<div class="col-md-3">
					<h4>Images Title </h4>
						<img class="img-responsive" src="https://4.bp.blogspot.com/-A7U1uPlSq6Y/VcLb5kKHCkI/AAAAAAAAGCc/7WghyndTEuY/s1600/images2.jpg">
					</div>
					<div class="col-md-3">
					<h4>Images Title </h4>
						<img class="img-responsive"  src="https://3.bp.blogspot.com/-hGrnZIjzL2k/VcLb47kyQKI/AAAAAAAAGCQ/J6Q2IAHIQvQ/s1600/image4.jpg">
					</div>
					
				</div>
			
			</li>
			<li><a href="<?php echo base_url() ?>admin/contectus"><i class="fa fa-envelope"></i> Contact</a>
				<div class="contact">
			
				</div>
			</li>
			<a href="#" class="toggle-menu visible-xs-block">|||</a>		
	</ul>
	 </div>
	 <div class="head-notice">
		 	<p class="head_notice_p">NOTICE</p>
		 <marquee  behavior="scroll" direction=""><a class="ml-5" href=""><i class="fas fa-check"></i> gdfgdfgdf</a>   <a class="ml-5" href=""><i class="fas fa-check"></i> gdffdsdfdsfdsfgdfgdf</a>   <a class="ml-5" href=""><i class="fas fa-check"></i> dsffdf</a><a class="ml-5" href=""><i class="fas fa-check"></i> gdfgdfgdf</a>   <a class="ml-5" href=""><i class="fas fa-check"></i> gdffdsdfdsfdsfgdfgdf</a>   <a class="ml-5" href=""><i class="fas fa-check"></i> dsffdf</a><a class="ml-5" href=""><i class="fas fa-check"></i> gdfgdfgdf</a>   <a class="ml-5" href=""><i class="fas fa-check"></i> gdffdsdfdsfdsfgdfgdf</a>   <a class="ml-5" href=""><i class="fas fa-check"></i> dsffdf</a></marquee>    
	 </div>
</header>
<div class="mainbody mb-5" style="overflow: hidden">