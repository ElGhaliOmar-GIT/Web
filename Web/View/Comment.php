<?php
include '../Controllers/commentC.php';
include '../Model/comment.php';
$commentC=new commentC();
$comment=$commentC->retrieveComment(1);
$list=$commentC->retrieveAllComments();
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Travel Tours Travel Category Bootstrap Responsive Web Template | Gallery :: W3layouts</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="Travel Tours Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"
	/>
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--// Meta tag Keywords -->

	<!-- Custom-Files -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
	<!-- Bootstrap-Core-CSS -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<!-- Style-CSS -->
	<link href="css/font-awesome.css" rel="stylesheet">
	<!-- Font-Awesome-Icons-CSS -->
	<link href="css/lsb.css" rel="stylesheet" type="text/css" media="all">
	<!-- For-Gallery -->
	<!-- //Custom-Files -->

	<!-- Web-Fonts -->
	<link href="//fonts.googleapis.com/css?family=Pacifico&amp;subset=cyrillic,latin-ext,vietnamese" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Amaranth:400,400i,700,700i" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
	<!-- //Web-Fonts -->

</head>

<body>
	<!-- header -->
	<div class="header-w3l">
		<!-- navigation -->
		<div class="nav-agile">
			<nav class="navbar navbar-default">
				<div class="navbar-header logo-w3layouts">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- logo -->
					<h1>
						<a href="index.html">Travel Tours</a>
					</h1>
					<!-- //logo -->
				</div>
				<!-- navbar-header -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<div class="w3l-navtop">
						<ul class="nav navbar-nav navbar-right">
							<li>
								<a href="index.html">Home</a>
							</li>
							<li>
								<a href="about.html">About</a>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages
									<b class="caret"></b>
								</a>
								<ul class="dropdown-menu agile_short_dropdown">
									<li>
										<a href="icons.html">Web Icons</a>
									</li>
									<li>
										<a href="typography.html">Typography</a>
									</li>
								</ul>
							</li>
							<li>
								<a href="gallery.html" class="active">Gallery</a>
							</li>
							<li>
								<a href="contact.html">Contact</a>
							</li>
						</ul>
					</div>
					<!-- social icons -->
					<div class="social-icons">
						<ul>
							<li>
								<a href="#" class="fa fa-facebook icon-border facebook"> </a>
							</li>
							<li>
								<a href="#" class="fa fa-twitter icon-border twitter"> </a>
							</li>
							<li>
								<a href="#" class="fa fa-google-plus icon-border googleplus"> </a>
							</li>
							<li>
								<a href="#" class="fa fa-rss icon-border rss"> </a>
							</li>
						</ul>
					</div>
					<!-- //social icons -->
					<div class="clearfix"> </div>
				</div>
			</nav>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!-- //navigation -->
	<!-- //header -->

	<!-- banner -->
	<div class="inner_banner_agile">
	</div>
	<!--//banner -->
	<!-- short -->
	<div class="services-breadcrumb">
		<div class="inner_breadcrumb">
			<ul class="short_ls">
				<li>
					<a href="index.html"><i class="fa fa-home"></i>Home</a>
				</li>
			</ul>
		</div>
	</div>
	<!-- //short-->
	<!-- //banner -->

	<!-- Welcome -->
	<!-- Container -->
	<div class="container d-flex justify-content-center">
		<div class="row d-flex justify-content-md-center content-margin">
			<div style="margin-left: 15%; margin-right: 15%;">
				<div class="card">
					<img class="post-inp" src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1574583336/AAA/4.jpg" width="820" height="600" alt="Card image cap">
					<div class="card-body text-center">					
						<h4 class="card-title">Latest Comments</h4>
						<hr>
					</div>
					<?php 
					$list=$commentC->retrieveAllComments();
					foreach($list as $u) { 
					?>
						<div class="comment-widgets">
							<!-- Comment Row -->
							<div class="d-flex flex-row comment-row m-t-0">
								<div class="p-2"><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1574583336/AAA/4.jpg" alt="user" width="50" class="rounded-circle"></div>
								<div class="comment-text w-100">
									<h4 class="font-medium">James Thomas</h4> <span class="m-b-15 d-block" style="font-size:20px;"> <?php echo $u['text'] ?> </span>
									<div class="comment-footer"><span class="text-muted pull-right"><?php echo $u['date'] ?></span></div>
									<hr>
									<div><button type="button" class="btn btn-cyan btn-size"><i class="fa fa-thumbs-up"></i></div>
									<!-- </button><button type="button" class="btn btn-success">Publish</button> <button type="button" class="btn btn-danger">Delete</button> -->
								</div>
							</div> 
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
	<hr width="800">
	<!-- //container -->
	<!-- Container -->
	<div class="container d-flex justify-content-center">
		<div class="row d-flex justify-content-md-center content-margin">
			<div style="margin-left: 15%; margin-right: 15%;">
				<div class="card">
					<img class="post-inp" src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1574583336/AAA/4.jpg" width="820" height="600" alt="Card image cap">
					<div class="card-body text-center">					
						<h4 class="card-title">Latest Comments</h4>
						<hr>
					</div>
					<?php 
					$list=$commentC->retrieveAllComments();
					foreach($list as $u) { 
					?>
						<div class="comment-widgets">
							<!-- Comment Row -->
							<div class="d-flex flex-row comment-row m-t-0">
								<div class="p-2"><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1574583336/AAA/4.jpg" alt="user" width="50" class="rounded-circle"></div>
								<div class="comment-text w-100">
									<h4 class="font-medium">James Thomas</h4> <span class="m-b-15 d-block" style="font-size:20px;"> <?php echo $u['text'] ?> </span>
									<div class="comment-footer"><span class="text-muted pull-right"><?php echo $u['date'] ?></span></div>
									<hr>
									<div><button type="button" class="btn btn-cyan btn-size"><i class="fa fa-thumbs-up"></i></div>
									<!-- </button><button type="button" class="btn btn-success">Publish</button> <button type="button" class="btn btn-danger">Delete</button> -->
								</div>
							</div> 
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
	<hr width="800">
	<!-- //container -->
	<!-- //Welcome -->


	<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="footer-row w3layouts-agile">
				<div class="col-md-4 col-xs-4 footer-grids">
					<h2>More Information</h2>
					<p class="footer-one-w3ls">This is a great you can use this space to go into a little more detail about your company. Talk about your team and
						what services you provide. </p>
				</div>
				<div class="col-md-5 col-xs-5 footer-grids w3l-agileits">
					<h3>Newsletter</h3>
					<p>Recieve our latest news straight to your inbox</p>
					<form action="#" method="post">
						<input type="email" placeholder="Email" name="email" required="">
						<input type="submit" value="Subscribe" />
					</form>
				</div>
				<div class="col-md-3 col-xs-3 footer-grids social-agileits">
					<h3>Connect With Us</h3>
					<div class="social-w3l">
						<ul>
							<li>
								<a href="#" class="wthree_facebook">
									<i class="fa fa-facebook" aria-hidden="true"></i>
								</a>
							</li>
							<li>
								<a href="#" class="wthree_twitter">
									<i class="fa fa-twitter" aria-hidden="true"></i>
								</a>
							</li>
							<li>
								<a href="#" class="wthree_dribbble">
									<i class="fa fa-dribbble" aria-hidden="true"></i>
								</a>
							</li>
						</ul>
					</div>
					<div class="social-w3r">
						<ul>
							<li>
								<a href="#">Facebook</a>
							</li>
							<li>
								<a href="#">Twitter</a>
							</li>
							<li>
								<a href="#">Dribbble</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- copyright -->
	<div class="copy-section">
		<p>© 2018 Travel Tours. All rights reserved | Design by
			<a href="http://w3layouts.com">W3layouts</a>
		</p>
	</div>
	<!-- //copyright -->
	<!-- //footer -->


	<!-- Js files -->
	<!-- JavaScript -->
	<script src="js/jquery-2.2.3.min.js"></script>
	<!-- Default-JavaScript-File -->
	<script src="js/bootstrap.js"></script>
	<!-- Necessary-JavaScript-File-For-Bootstrap -->

	<!-- js for gallery -->
	<script src="js/lsb.min.js"></script>
	<script>
		$(window).load(function () {
			$.fn.lightspeedBox();
		});
	</script>
	<!-- //js for gallery -->

	<!-- smooth scrolling -->
	<script src="js/SmoothScroll.min.js"></script>
	<!-- //smooth scrolling -->

	<!-- start-smoth-scrolling -->
	<script src="js/move-top.js"></script>
	<script src="js/easing.js"></script>
	<script>
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- start-smoth-scrolling -->

	<!-- smooth scrolling-bottom-to-top -->
	<script>
		$(document).ready(function () {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
			$().UItoTop({
				easingType: 'easeOutQuart'
			});
		});
	</script>
	<a href="#" id="toTop" style="display: block;">
		<span id="toTopHover" style="opacity: 1;"> </span>
	</a>
	<!-- //smooth scrolling-bottom-to-top -->
	<!-- //Js files -->

</body>

</html>