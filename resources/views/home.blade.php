<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>84Detik | make better your phone </title>
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
						<a class="nav-link"  href="{{url('Portfolio')}}">Portfolio</a>
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

	<!-- Hero section -->
	<section class="hero-section">
		<div class="hero-slider owl-carousel">
			<div class="hs-item set-bg" data-setbg="{{asset('img/1.jpeg')}}" data-hash="slide-1">
				<div class="container">
					<h2>MY Phone Is Beautiful</h2>
					<a href="#" class="site-btn">Read More <i class="fa fa-angle-double-right"></i></a>
				</div>
				<div class="col-lg-4 col-md-7" data-setbg="{{asset('img/16.JPEG')}}">
					<a href="#slide-2" class="nest-hs-btn">Next</a>
				</div>
			</div>
			<div class="hs-item set-bg" data-setbg="{{asset('img/2.JPEG')}}" data-hash="slide-2">
				<div class="container">
					<h2>Style is Everything</h2>
					<a href="#" class="site-btn">Read More <i class="fa fa-angle-double-right"></i></a>
				</div>
				<div class="next-hs set-bg" data-setbg="{{asset('img/3.JPEG')}}">
					<a href="#slide-1" class="nest-hs-btn">Next</a>
				</div>
			</div>
		</div>
		<div class="hero-social-warp">
			<p>Follow us on Social MEdia</p>
			<div class="hero-social-links">
				<a href="https://www.instagram.com/84detik/"><i class="fa fa-instagram"></i></a>
				<a href="https://twitter.com/itsuitsalwaysu"><i class="fa fa-twitter"></i></a>
			</div>
		</div>
	</section>
	<!-- Hero section end-->

	<!-- Intro section -->
	<section class="intro-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-5">
					<img src="{{asset('img/17.JPEG')}}" alt="">
				</div>
				<div class="col-lg-7 intro-text">
					<span>Quotes</span>
					<h2>"Jagalah Handphone Mu Seperti Kamu Menjaga Dirimu"</h2>
					<p>Jual case hp lucu, cantik dan kece seleramu dengan harga terjangkau</p>
					<a href="#" class="site-btn sb-dark">Read More <i class="fa fa-angle-double-right"></i></a>
				</div>
			</div>
		</div>
	</section>
	<!-- Intro section end-->

	<!-- Portfolio section -->
	<section class="portfolio-section">
		<div class="container">
			<div class="row">
			<div class="col-lg-4 col-sm-10">
						<img src="{{asset('img/4.JPEG')}}" alt="">
						<p> <div class="font weight-bold text-black">Kode Product :</div> SC01 </p>
					    <p> <div class="font weight-bold text-black">Type : </div> Xiomi, Samsung, Iphone </p>
					    <p> <div class="font weight-bold text-black">Harga : </div> Rp. 40.000 </p>  
			</div>
				<div class="col-lg-4 col-sm-5">
					<!--a href="portfolio.html" class="portfolio-item"-->
						<img src="{{asset('img/6.JPEG')}}" alt="">
				    <p> <div class="font weight-bold text-black">Kode Product :</div> SC02 </p>
					<p> <div class="font weight-bold text-black">Type : </div> Xiomi, Samsung, Iphone </p>
					<p> <div class="font weight-bold text-black">Harga : </div> Rp. 40.000 </p>     		
				</div>
				<div class="col-lg-4 col-sm-5">
						<img src="{{asset('img/5.JPEG')}}" alt="">
						<p> <div class="font weight-bold text-black">Kode Product :</div> SC03 </p>
						<p> <div class="font weight-bold text-black">Type : </div> Xiomi, Samsung, Iphone </p>
						<p> <div class="font weight-bold text-black">Harga : </div> Rp. 40.000 </p> 
				</div>
				<div class="col-lg-4 col-sm-5">
						<img src="{{asset('img/7.JPEG')}}" alt="">
						<p> <div class="font weight-bold text-black">Kode Product :</div> SC04 </p>
						<p> <div class="font weight-bold text-black">Type : </div> Xiomi, Samsung, Iphone </p>
						<p> <div class="font weight-bold text-black">Harga : </div> Rp. 40.000 </p> 
				</div>
				<div class="col-lg-4 col-sm-5">
						<img src="{{asset('img/8.JPEG')}}" alt="">
						<p> <div class="font weight-bold text-black">Kode Product :</div> SC05 </p>
						<p> <div class="font weight-bold text-black">Type : </div> Xiomi, Samsung, Iphone </p>
						<p> <div class="font weight-bold text-black">Harga : </div> Rp. 40.000 </p>
				</div>	
				<div class="col-lg-4 col-sm-5">	
						<img src="{{asset('img/9.JPEG')}}" alt="">
						<p> <div class="font weight-bold text-black">Kode Product :</div> SC06 </p>
						<p> <div class="font weight-bold text-black">Type : </div> Xiomi, Samsung, Iphone </p>
						<p> <div class="font weight-bold text-black">Harga : </div> Rp. 40.000 </p>
				</div>	
				<div class="col-lg-4 col-sm-5">
						<img src="{{asset('img/10.JPEG')}}" alt="">
						<p> <div class="font weight-bold text-black">Kode Product :</div> SC07 </p>
						<p> <div class="font weight-bold text-black">Type : </div> Xiomi, Samsung, Iphone </p>
						<p> <div class="font weight-bold text-black">Harga : </div> Rp. 40.000 </p>
				</div>	
				<div class="col-lg-4 col-sm-5">	
						<img src="{{asset('img/11.JPEG')}}" alt="">
						<p> <div class="font weight-bold text-black">Kode Product :</div> SC08 </p>
						<p> <div class="font weight-bold text-black">Type : </div> Xiomi, Samsung, Iphone </p>
						<p> <div class="font weight-bold text-black">Harga : </div> Rp. 40.000 </p>
				</div>	
				<div class="col-lg-4 col-sm-5">
						<img src="{{asset('img/12.JPEG')}}" alt="">
						<p> <div class="font weight-bold text-black">Kode Product :</div> SC09 </p>
						<p> <div class="font weight-bold text-black">Type : </div> Xiomi, Samsung, Iphone </p>
						<p> <div class="font weight-bold text-black">Harga : </div> Rp. 40.000 </p>
				</div>	
				<div class="col-lg-4 col-sm-5">
						<img src="{{asset('img/13.JPEG')}}" alt="">
						<p> <div class="font weight-bold text-black">Kode Product :</div> SC10 </p>
						<p> <div class="font weight-bold text-black">Type : </div> Xiomi, Samsung, Iphone </p>
						<p> <div class="font weight-bold text-black">Harga : </div> Rp. 40.000 </p>
				</div>	
				<div class="col-lg-4 col-sm-5">
						<img src="{{asset('img/14.JPEG')}}" alt="">
						<p> <div class="font weight-bold text-black">Kode Product :</div> SC11 </p>
						<p> <div class="font weight-bold text-black">Type : </div> Xiomi, Samsung, Iphone </p>
						<p> <div class="font weight-bold text-black">Harga : </div> Rp. 40.000 </p>
				</div>	
				<div class="col-lg-4 col-sm-5">
						<img src="{{asset('img/15.JPEG')}}" alt="">
						<p> <div class="font weight-bold text-black">Kode Product :</div> SC12 </p>
						<p> <div class="font weight-bold text-black">Type : </div> Xiomi, Samsung, Iphone </p>
						<p> <div class="font weight-bold text-black">Harga : </div> Rp. 40.000 </p>
				</div>	
			</div>
		</div>
	</section>
	<!-- Portfolio section end-->

	<!-- Blog section -->
	<section class="blog-section spad">
		<div class="container">
			<div class="blog-slider owl-carousel">
				<div class="blog-item">
					<div class="blog-thumb set-bg" data-setbg="{{asset('img/16.JPEG')}}">
						<div class="blog-date">
							<h2>20</h2>
							<p>Jan</p>									
						</div>
					</div>
					<div class="blog-head">
						<div class="blog-tags">fashion, event, lifestyle</div>
						<h2><a href="single-blog.html">Our fashion App</a></h2>
					</div>
					<center><p>Case berwarna pink dn warna pink dengan tambahan gambar boneka lucu membuat case hp mu semakin unik dan cantik .</p></center>
				</div>
				<div class="blog-item">
					<div class="blog-thumb set-bg" data-setbg="{{asset('img/17.JPEG')}}">
						<div class="blog-date">
							<h2>20</h2>
							<p>Jan</p>									
						</div>
					</div>
					<div class="blog-head">
						<div class="blog-tags">fashion, fevent, lifestyle</div>
						<h2><a href="single-blog.html">Our fashion App</a></h2>
					</div>
					<center><p>soft case bening dengan sticker astronot dan bintang mempercatik case dengan gaya yang sederhana</p></center>
				</div>
				<div class="blog-item">
					<div class="blog-thumb set-bg" data-setbg="{{asset('img/18.JPEG')}}">
						<div class="blog-date">
							<h2>20</h2>
							<p>Jan</p>									
						</div>
					</div>
					<div class="blog-head">
						<div class="blog-tags">fashion, event, lifestyle</div>
						<h2><a href="single-blog.html">Our fashion App</a></h2>
					</div>
					<center><p>Gabungan hard case dengan pinggirannya soft case</p></center>
				</div>
			</div>
		</div>
	</section>
	<!-- Blog section end-->

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
						<!--img src="img/footer-logo.png" alt=""-->
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
