
<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>84Detik | make better your phone</title>
	<meta charset="UTF-8">
	<meta name="description" content="Instyle Fashion HTML Template">
	<meta name="keywords" content="instyle, fashion, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Stylesheets -->
	<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}"/>
	<link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}"/>
	<link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}"/>
	<!-- Main Stylesheets -->
	<link rel="stylesheet" href="{{asset('css/style.css')}}"/>


	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section -->
	<header class="header-section">
		<nav class="navbar navbar-expand-md navbar-dark bg-dark site-navbar">
			<a class="navbar-brand site-logo" href="index.html#">
				<h2><span>84</span>Detik</h2>
				<p>Phone Case</p>
			</a>
			<button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
				aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="collapsibleNavId">
				<!-- Main menu -->
				<ul class="navbar-nav ml-auto mt-2 mt-lg-0">
					<li class="nav-item">
						<a class="nav-link" href="{{url('home')}}">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="{{url('Portfolio')}}">Portfolio</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="{{url('contact')}}">Contact</a>
					</li>                                                                
				</ul>
				<div class="social-links my-2 my-lg-0">
                <a href="https://www.instagram.com/84detik/"><i class="fa fa-instagram"></i></a>
				<a href="https://twitter.com/itsuitsalwaysu"><i class="fa fa-twitter"></i></a>
				</div>
			</div>
		</nav>
	</header>
	<!-- Header section end-->

	<!-- Page top section -->
	<section class="page-top-section set-bg" data-setbg="{{asset('img/1.JPEG')}}">
		<h2>Contact</h2>
		<div class="hero-social-warp">
			<p>Follow us on Social MEdia</p>
			<div class="hero-social-links">
            <a href="https://www.instagram.com/84detik/"><i class="fa fa-instagram"></i></a>
			<a href="https://twitter.com/itsuitsalwaysu"><i class="fa fa-twitter"></i></a>
			</div>
		</div>
	</section>
	<!-- Page top section end-->


	<!-- Contact page -->
	<section class="page-warp contact-page">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="section-title">
						<span>fashion, event, lifestyle</span>
						<h2>Get in touch</h2>
					</div>
					<form class="comment-form">
						<div class="row">
							<div class="col-md-6">
								<input type="text" placeholder="Your Name">
							</div>
							<div class="col-md-6">
								<input type="text" placeholder="Your Email">
							</div>
							<div>
								<textarea placeholder="Comment"></textarea>
								<button class="site-btn sb-dark">SEND <i class="fa fa-angle-double-right"></i></button>
							</div>
						</div>
					</form>
				</div>
				<div class="col-lg-4 col-sm-5">
					<div class="map">
						<img src="{{asset('img/portfolio/32.JPEG')}}">
					</div>
				<div class="contact-text">
					<p>About Us </p>
					<ul>
						<li>Jl. Barito no 14, Kuala Kapuas</li>
						<li>+62 895 7002 11628</li>
						<li>asfiradaniaa@gmail.com</li>
					</ul>
				</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Contact page end-->
	
	<!-- Back to top -->
	<div class="container">
		<div class="backtotop">
			<div class="up-btn" id="backTotop">UP</div>
		</div>
	</div>

	<!-- Footer section -->
	<footer class="footer-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget fw-about">
						<p>SosMed</p>
						<div class="fw-social">
                        <a href="https://www.instagram.com/84detik/"><i class="fa fa-instagram"></i></a>
				        <a href="https://twitter.com/itsuitsalwaysu"><i class="fa fa-twitter"></i></a>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget contact-widget">
						<h2 class="fw-title">Contact</h2>
						<ul>
                            <li><span>Address:</span>Jl. Barito no 14, Kuala Kapuas</li>
							<li><span>Phone:</span>+62 895 7002 11628</li>
							<li><span>Mail:</span>asfiradaniaa@gmail.com</li>
						</ul>
					</div>
				</div>
			</div>

<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. >
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
< Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

		</div>
	</footer>
	<!-- Footer section end -->
	
	
	<!--====== Javascripts & Jquery ======-->
	<script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
	<script src="{{asset('js/bootstrap.min.js')}}"></script>
	<script src="{{asset('js/owl.carousel.min.js')}}"></script>
	<script src="{{asset('js/main.js')}}"></script>

	</body>
</html>