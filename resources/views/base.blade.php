<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
        <meta name="keywords" content="">
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<title>{{ $title }}</title>
		<!-- Favicon -->
        <link href="{{ public_path().'/assets/images/favicon.png' }}" rel="shortcut icon">
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
					</ul>
				</div>
				<!-- Menu Extra -->
				<div class="header-menu-extra">
					<ul class="list-inline">
						<li><a href="#"><i class="bi bi-facebook"></i></a></li>
						<li><a href="#"><i class="bi bi-twitter"></i></a></li>
						<li><a href="#"><i class="bi bi-linkedin"></i></a></li>
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
							<img class="logo-footer" src="{{ public_path().'/assets/images/aurega/logo.jpeg' }}" alt="Aurega Corporate Services">
						</div>
						<div class="col-6 col-sm-6 col-lg-3">
							<h6 class="font-small fw-medium uppercase">Useful Links</h6>
							<ul class="list-dash animate-links">
								<li><a href="/about">About Aurega</a></li>
								<li><a href="/services">Services</a></li>
								<li><a href="/contact">Contact</a></li>
								<li><a href="/careers">Careers</a></li>
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
								<li>acs@auregagroup.com</li>
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

		<!-- Scroll to top button -->
		<div class="scrolltotop">
			<a class="button-circle button-circle-md button-circle-dark" href="#"><i class="bi bi-arrow-up"></i></a>
		</div>
		<!-- end Scroll to top button -->

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

			});
		</script>
	</body>
</html>