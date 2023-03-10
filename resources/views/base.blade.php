<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Google tag (gtag.js) -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=AW-11096916840"></script>
		<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'AW-11096916840');
		</script>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="If you are looking for business setup in Dubai, UAE or company formation in Dubai, UAE, Aurega can help. Aurega is one of UAE’s largest and most trusted business setup advisory firms">
        <meta name="keywords" content="">
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<title>{{ $title }}</title>
		<!-- Favicon -->
        <link href="{{ public_path().'/assets/images/aurega/favicon.ico' }}" rel="shortcut icon">
		<!-- CSS -->
		<link href="{{ public_path().'/assets/plugins/bootstrap/bootstrap.min.css' }}" rel="stylesheet">
		<link href="{{ public_path().'/assets/plugins/owl-carousel/owl.carousel.min.css' }}" rel="stylesheet">
		<link href="{{ public_path().'/assets/plugins/owl-carousel/owl.theme.default.min.css' }}" rel="stylesheet">
		<link href="{{ public_path().'/assets/plugins/magnific-popup/magnific-popup.min.css' }}" rel="stylesheet">
		<link href="{{ public_path().'/assets/plugins/sal/sal.min.css' }}" rel="stylesheet">
		<link href="{{ public_path().'/assets/css/theme.css' }}" rel="stylesheet">
		<!-- Fonts/Icons -->
		<link href="{{ public_path().'/assets/plugins/bootstrap-icons/bootstrap-icons.css' }}" rel="stylesheet">
		<link href="{{ public_path().'/assets/plugins/font-awesome/css/all.css' }}" rel="stylesheet">
	</head>
	<body data-preloader="1">
		
		<!-- Header -->
		<div class="header right dark sticky-autohide">
			<div class="container">
				<!-- Logo -->
				<div class="header-logo">
					<!--<h3><a href="#">mono</a></h3>-->
					
					<img class="logo-light" src="{{ public_path().'/assets/images/aurega/logo.jpeg' }}" alt="Aurega Corporate Services">
					<!-- <img class="logo-dark" src="../assets/images/your-logo-light.png" alt=""> 
					-->
				</div>
				<!-- Menu -->
				<div class="header-menu">
					<ul class="nav">
						<li class="nav-item">
							<a class="nav-link" href="/">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="/about">About Us</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Services</a>
							<ul class="nav-dropdown">
								<li class="nav-dropdown-item"><a class="nav-dropdown-link" href="/services/company-incorporation-and-trade-license">Company Incorporation & Trade Licenses</a></li>
								<li class="nav-dropdown-item"><a class="nav-dropdown-link" href="/services/golden-visa">Golden Visa</a></li>
								<li class="nav-dropdown-item"><a class="nav-dropdown-link" href="/services/business-consulting">Business Consulting</a></li>
								<li class="nav-dropdown-item"><a class="nav-dropdown-link" href="/services/accounting-and-book-keeping">Accounting & Book-keeping</a></li>
								<li class="nav-dropdown-item"><a class="nav-dropdown-link" href="/services/pro-service">PRO Services</a></li>
								<li class="nav-dropdown-item"><a class="nav-dropdown-link" href="/services/trademark-registration-and-intellectual-property">Trademark Registration & Intellectual Property</a></li>
							</ul>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="/contact">Contact Us</a>
						</li>
						<li class="nav-item">
							<a class="nav-link text-warning" href="https://auregagroup.com" target="_blank">Aurega Group</a>
						</li>
					</ul>
				</div>
				<!-- Menu Extra -->
				<div class="header-menu-extra">
					<ul class="list-inline">
						<li><a href="https://facebook.com/auregagroup/" target="_blank"><i class="bi bi-facebook"></i></a></li>
						<li><a href="https://instagram.com/auregagroup/?hl=en" target="_blank"><i class="bi bi-instagram"></i></a></li>
						<li><a href="https://linkedin.com/company/auregaglobal/" target="_blank"><i class="bi bi-linkedin"></i></a></li>
					</ul>
				</div>
				<!-- Menu Toggle -->
				<button class="header-toggle">
					<span></span>
				</button>
			</div><!-- end container -->
		</div>
		<!-- end Header -->

		@yield("content")

		<footer>
			<div class="section-sm bg-black">
				<div class="container">
					<div class="row g-4">
						<div class="col-6 col-sm-6 col-lg-3">
							<a href="/"><img class="logo-footer" src="{{ public_path().'/assets/images/aurega/logo.jpeg' }}" alt="Aurega Corporate Services"></a>
						</div>
						<div class="col-6 col-sm-6 col-lg-3">
							<h6 class="font-small fw-medium uppercase">Useful Links</h6>
							<ul class="list-dash animate-links">
								<li><a href="/about">About Aurega</a></li>
								<li><a href="/services">Services</a></li>
								<li><a href="/contact">Contact</a></li>
								<li><a href="/careers">Careers</a></li>
							</ul>
							<p>Our Parent Organization</p>
							<ul class="list-dash animate-links">
								<li><a href="https://auregagroup.com" target="_blank">Aurega Group</a></li>
							</ul>
						</div>
						<div class="col-6 col-sm-6 col-lg-3">
							<h6 class="font-small fw-medium uppercase">Services We offered</h6>
							<ul class="list-dash animate-links">
								<li><a href="/services/company-incorporation-and-trade-license">Company Incorporation</a></li>
								<li><a href="/services/golden-visa">Golden Visa</a></li>
								<li><a href="/services/business-consulting">Business Consulting</a></li>
								<li><a href="/services/accounting-and-book-keeping">Accounting & Book-keeping</a></li>
								<li><a href="/services/pro-service">PRO Services</a></li>
								<li><a href="/services/trademark-registration-and-intellectual-property">Trademark Registration</a></li>																
							</ul>
						</div>
						<div class="col-6 col-sm-6 col-lg-3">
							<h6 class="font-small fw-medium uppercase">Contact Info</h6>
							<ul class="list-unstyled">
								<li>#1403, The Prism Tower, Business Bay, Dubai</li>
								<li>mkt@auregagroup.com</li>
								<li>+(971) 52 868 6158</li>
								<li>+(971) 50 693 9558</li>
							</ul>
						</div>
					</div><!-- end row -->
				</div><!-- end container -->
			</div>
			<div class="bg-black py-4">	
				<div class="container">
					<div class="row align-items-center g-2 g-lg-3">
						<div class="col-12 col-md-6 text-center text-md-start">
							<p>&copy; {{ date('Y') }} Aurega Corporate Services, All Rights Reserved.</p>
						</div>
					</div><!-- end row -->
				</div><!-- end container -->
			</div>
		</footer>
		<script  type="text/javascript">  var config = {    phone :" 971506939558",    call :"Let\'s Talk",    position :"ww-right",    size : "ww-normal",    text : "Hi, I\'m interested in your service",    type: "ww-standard",    brand: "Aurega Corporate Services",    subtitle: "",    welcome: "Hi, how can we help you today?"  };  var proto = document.location.protocol, host = "cloudfront.net", url = proto + "//d3kzab8jj16n2f." + host;    var s = document.createElement("script"); s.type = "text/javascript"; s.async = true; s.src = url + "/v2/main.js";    s.onload = function () { tmWidgetInit(config) };    var x = document.getElementsByTagName("script")[0]; x.parentNode.insertBefore(s, x);</script>
		<!-- Scroll to top button-->
		<div class="scrolltotop">
			<a class="button-circle button-circle-md button-circle-dark" href="#"><i class="bi bi-arrow-up"></i></a>
		</div>
		<!--end Scroll to top button -->

		<!-- ***** JAVASCRIPTS ***** -->
		<script src="{{ public_path().'/assets/plugins/jquery.min.js' }}"></script>
		<script src="{{ public_path().'/assets/plugins/plugins.js' }}"></script>
		<script src="{{ public_path().'/assets/js/functions.js' }}"></script>
		<script>
			$(function(){
    			"use strict";

				$.ajaxSetup({
					headers: {
						'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
					}
				});

				$('form').submit(function(){
					$(".btn-submit").attr("disabled", true);
					$(".btn-submit").html("<span class='spinner-grow spinner-grow-sm' role='status' aria-hidden='true'></span>");
				});

				$("#whatsapp-widget a").attr("href", "https://web.whatsapp.com/send?phone=+971528686158&text=Hello! I am interested in your service");
				$(".scrolltotop").css({'position': 'fixed', 'right': '20px', 'bottom': '100px'});
			});
		</script>
		<!--Start of Tawk.to Script-->
		<script type="text/javascript">
		var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
		(function(){
		var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
		s1.async=true;
		s1.src='https://embed.tawk.to/63fa0e5531ebfa0fe7ef4636/1gq4cfvrn';
		s1.charset='UTF-8';
		s1.setAttribute('crossorigin','*');
		s0.parentNode.insertBefore(s1,s0);
		})();
		</script>
		<!--End of Tawk.to Script-->
	</body>
</html>