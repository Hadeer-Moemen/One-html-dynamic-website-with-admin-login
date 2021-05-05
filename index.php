<!DOCTYPE html>
<html lang="en">
<head> 
	<meta charset="utf-8"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<meta name="description" content="Creative One Page Parallax Template">
	<meta name="keywords" content="Creative, Onepage, Parallax, HTML5, Bootstrap, Popular, custom, personal, portfolio" /> 
	<meta name="author" content=""> 
	<title>HIMU - OnePage HTML Parallax template</title> 
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/prettyPhoto.css" rel="stylesheet"> 
	<link href="css/font-awesome.min.css" rel="stylesheet"> 
	<link href="css/animate.css" rel="stylesheet"> 
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet"> 
	<!--[if lt IE 9]> <script src="js/html5shiv.js"></script> 
	<script src="js/respond.min.js"></script> <![endif]--> 
	<link rel="shortcut icon" href="images/ico/favicon.png"> 
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png"> 
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png"> 
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png"> 
	<link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->
<body>
	
	<header id="navigation"> 
		<div class="navbar navbar-inverse navbar-fixed-top" role="banner"> 
			<div class="container"> 
				<div class="navbar-header"> 
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> 
						<span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> 
					</button> 
					<a class="navbar-brand" href="index.html"><h1><img src="images/logo.png" alt="logo"></h1></a> 
				</div> 
				<div class="collapse navbar-collapse"> 
					<ul class="nav navbar-nav navbar-right"> 
						<li class="scroll active"><a href="#navigation">Home</a></li> 
						<li class="scroll"><a href="#about-us">About Us</a></li> 
						<li class="scroll"><a href="#services">Services</a></li> 
						<li class="scroll"><a href="#our-team">Our Team</a></li> 
						<li class="scroll"><a href="#portfolio">Portfolio</a></li> 
						<li class="scroll"><a href="#clients">Clients</a></li> 
						<li class="scroll"><a href="#blog">Blog</a></li> 
						<li class="scroll"><a href="#contact">Contact</a></li> 
					</ul> 
				</div> 
			</div> 
		</div><!--/navbar--> 
	</header> <!--/#navigation--> 

<?php require('slider.php'); ?>

<section id="about-us">
	<div class="container">
		<div class="text-center">
			<div class="col-sm-8 col-sm-offset-2">
				<h2 class="title-one">Why With Us?</h2>
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
			</div>
		</div>
		
		<div class="about-us">
			<div class="row">
				<?php
        require '../site_admin/connect_database.php';
		$_sql="select * from `with-us`";
		$with=$conn->query($_sql);
		?>
		
				<div class="col-sm-6">
					<h3>Why with us?</h3>

					<ul class="nav nav-tabs">
						<?php foreach ($with as $key => $value) {?>
						<li class="<?php if($key==0) echo"active"?>"><a href="#<?php echo $value['title'] ?>" data-toggle="tab"><i class="<?php echo $value['icon'] ?>"></i> <?php echo $value['title'] ?></a></li>
						<?php }?>
					
					</ul>

					<div class="tab-content">
						<?php foreach ($with as $key => $value) {?>
						<div class="tab-pane fade in <?php if($key==0) echo"active"?>" id="<?php echo $value['title'] ?>">
							<div class="media">
								<img  height="250" width="250" class="pull-left media-object" src="images/about-us/<?php echo $value['image'];?>" alt="about us"> 
								<div class="media-body">
									<p><?php echo $value['description'] ?></p>
								</div>
							</div>
						</div>
						<?php }?>
					
					</div>
					
				</div>
				
				<?php
		require '../site_admin/connect_database.php';
		$_sql="select * from Skills";
		$result=$conn->query($_sql);
		?>
				<div class="col-sm-6">
					<h3>Our Skills</h3>
					<div class="skill-bar">
						<?php foreach ($result as $key => $value) {?>
						<div class="skillbar clearfix " data-percent="<?php echo $value['skill-value'] ?>%">
							<div class="skillbar-title">
								<span><?php echo $value['name'] ?></span>
							</div>
							<div class="skillbar-bar"></div>
							<div class="skill-bar-percent"><?php echo $value['skill-value'] ?>%</div>
						</div> 
<?php } ?>
					</div>
					</div>
				</div>
			</div>
		</div>
	</section><!--/#about-us-->
<?php
		require '../site_admin/connect_database.php';
		$_sql="select * from service";
		$service=$conn->query($_sql);
		?>

	<section id="services" class="parallax-section">
		<div class="container">
			<div class="row text-center">
				<div class="col-sm-8 col-sm-offset-2">
					<h2 class="title-one">Services</h2>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<div class="our-service">
						<div class="services row">
							<?php foreach ($service as $key => $value) {?>
							<div class="col-sm-4">

								<div class="single-service">
									<i class="<?php echo $value['icon'] ?>"></i>
									<h2><?php echo $value['title'] ?></h2>
									<p><?php echo $value['description'] ?></p>
								</div>
							</div>
<?php }?>
						
							</div>
							
							</div></div>
						</div>
					</div>
				</div>
			</div>
		</section><!--/#service-->
		<?php
		require '../site_admin/connect_database.php';
		$_sql="select * from team";
		$team=$conn->query($_sql);
		?>

		<section id="our-team">
			<div class="container">
				<div class="row text-center">
					<div class="col-sm-8 col-sm-offset-2">
						<h2 class="title-one">Meet The Team</h2>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit.</p>
					</div>
				</div>
				<div id="team-carousel" class="carousel slide" data-interval="false">
					<a class="member-left" href="#team-carousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
					<a class="member-right" href="#team-carousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
					<div class="carousel-inner team-members">
						<div class="row item active">
							<?php foreach ($team as $key => $value) {
								$id=$value['id'];
								$sql="select * from `team-social`
								inner join `social-media` on `team-social`.`social-id` = `social-media`.id where `team-id`=$id";
								$links=$conn->query($sql);
								?>
							
							<div class="col-sm-6 col-md-3">
								<div class="single-member">
									<img src="images/our-team/<?php echo $value['image'] ?>" alt="team member" />
									<h4><?php echo $value['name'] ?></h4>
									<h5><?php echo $value['position'] ?></h5>
									<p><?php echo $value['description'] ?></p>
									<div class="socials">
										<?php foreach ($links as $key => $link) {
											?>
			
										<a href="<?php echo $link['link'] ?>"><i class="fa <?php echo $link['icon'] ?>"></i></a>
									<?php } ?>
									</div>
								</div>
							</div>
						<?php } ?>
				</div>
							 </div>
						</div>
						
					</div>
				</div>
			</div>
		</section><!--/#Our-Team-->

		<?php require('portfolio.php'); ?>

					<?php require('clients.php'); ?>

					<?php require('blog.php'); ?>
					<?php require('contact.php'); ?>

	

</body>
</html>