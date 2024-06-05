<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from html.themewant.com/hostie/index-six.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 19 Mar 2024 11:49:13 GMT -->

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" type="image/x-icon" href="assets/images/fav.png">

	<link rel="apple-touch-icon" sizes="180x180" href="assets/images/apple-touch-icon.png">
	<link rel="shortcut icon" type="image/png" sizes="32x32" href="assets/images/favicon-32x32.png">
	<link rel="shortcut icon" type="image/png" sizes="16x16" href="assets/images/favicon-16x16.png">
	<link rel="manifest" href="assets/images/site.webmanifest">

	<title>The Click Creations</title>

	<!-- bootstrap css -->
	<link rel="stylesheet preload" href="assets/css/vendor/bootstrap.min.css" as="style">
	<!-- fontawesome css -->
	<link rel="stylesheet preload" href="assets/css/plugins/fontawesome.min.css" as="style">
	<!-- swiper css -->
	<link rel="stylesheet preload" href="assets/css/plugins/swiper.min.css" as="style">
	<!-- magnific popup css -->
	<link rel="stylesheet preload" href="assets/css/plugins/magnific-popup.css" as="style">
	<!-- aos css -->
	<!-- <link  rel="stylesheet preload" href="assets/css/plugins/aos.min.css" as="style"> -->
	<link rel="stylesheet preload" href="assets/css/plugins/sal.min.css" as="style">
	<!-- nice select css -->
	<link rel="stylesheet preload" href="assets/css/plugins/nice-select.css" as="style">
	<!-- metismenu css -->
	<link rel="stylesheet preload" href="assets/css/plugins/metismenu.css" as="style">
	<!-- Custom css -->
	<link rel="stylesheet preload" href="assets/css/style.css" as="style">

	<!-- <script src="https://kit.fontawesome.com/f3a3c85ffb.js" crossorigin="anonymous"></script> -->
	@livewireStyles
</head>

<body>
	<!-- HEADER AREA -->
	<header class="rts-header style-six header__default">
		<div class="container">
			<div class="row">
				<div class="rts-header__wrapper">
					<!-- FOR LOGO -->
					<div class="rts-header__logo">
						<a href="index.html" class="site-logo">
							<img src="assets/images/logo/logo-5.png" alt="Hostie">
						</a>
					</div>
					<!-- FOR NAVIGATION MENU -->

					<nav class="rts-header__menu" id="mobile-menu">
						<div class="hostie-menu">
							<ul class="list-unstyled hostie-desktop-menu">
								<li class="menu-item">
									<a href="/" class="hostie-dropdown-main-element">Home</a>

								</li>
								<li class="menu-item">
									<a href="/about-us" class="hostie-dropdown-main-element">About Us</a>

								</li>
								<li class="menu-item">
									<a href="/hosting" class="hostie-dropdown-main-element">Hosting</a>

								</li>
								<li class="menu-item">
									<a href="/domain" class="hostie-dropdown-main-element">Domain</a>

								</li>
								<li class="menu-item">
									<a href="/web-apps" class="hostie-dropdown-main-element">Web & Apps</a>

								</li>
								<li class="menu-item">
									<a href="/contact" class="hostie-dropdown-main-element">Contact Us</a>

								</li>
							</ul>
						</div>
					</nav>
					<!-- FOR HEADER RIGHT -->
					<div class="rts-header__right">
						<div class="button-area">
							<a href="/login" class="login__btn"><i class="fa-regular fa-user"></i>Login</a>
							<a href="/sign-up" class="get-started__btn">Get Started</a>

							<a class="btn nav-link btn-cart" href="/cart">
								<i class="fa fa-shopping-cart" aria-hidden="true"></i>
								<span id="cartItemCount" class="badge badge-info"></span>
								<span class="sr-only">Shopping Cart</span>
							</a>


						</div>
						<button id="menu-btn" class="mobile__active menu-btn"><i class="fa-sharp fa-solid fa-bars"></i></button>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- HEADER AREA END -->


	{{$slot}}

	<!-- FOOTER AREA -->
	<footer class="rts-footer site-footer-six">
		<div class="container position-relative z-1">
			<div class="row">
				<!-- widget -->
				<div class="col-xl-3 col-lg-2 col-md-4 col-sm-4 rts-footer__widget--column">
					<div class="rts-footer__widget footer__widget">
						<h5 class="widget-title">Company</h5>
						<div class="rts-footer__widget--menu ">
							<ul>
								<li><a href="about.html">About Us</a></li>
								<li><a href="blog.html">News Feed</a></li>
								<li><a href="contact.html">Contact</a></li>
								<li><a href="affiliate.html">Affiliate Program</a></li>
								<li><a href="technology.html">Our Technology</a></li>
								<li><a href="knowledgebase.html">Knowledgebase</a></li>
							</ul>
						</div>
					</div>
				</div>
				<!-- widget end -->
				<!-- widget -->
				<div class="col-xl-3 col-lg-2 col-md-4 col-sm-4 rts-footer__widget--column">
					<div class="rts-footer__widget footer__widget extra-padding">
						<h5 class="widget-title">Domain</h5>
						<div class="rts-footer__widget--menu ">
							<ul>
								<li><a href="domain-checker.html">Domain Checker</a></li>
								<li><a href="domain-transfer.html">Domain Transfer</a></li>
								<li><a href="domain-registration.html">Domain Registration</a></li>
								<li><a href="data-centers.html">Data Centers</a></li>
								<li><a href="whois.html">Whois</a></li>
								<li><a href="support.html">Support</a></li>
							</ul>
						</div>
					</div>
				</div>
				<!-- widget end -->
				<!-- widget -->
				<div class="col-xl-2 col-lg-2 col-md-4 col-sm-4 rts-footer__widget--column">
					<div class="rts-footer__widget footer__widget">
						<h5 class="widget-title">Hosting</h5>
						<div class="rts-footer__widget--menu">
							<ul>
								<li><a href="shared-hosting.html">Shared Hosting</a></li>
								<li><a href="wordpress-hosting.html">Wordpress Hosting</a></li>
								<li><a href="vps-hosting.html">VPS Hosting</a></li>
								<li><a href="reseller-hosting.html">Reseller Hosting</a></li>
								<li><a href="dedicated-hosting.html">Dedicated Hosting</a></li>
								<li><a href="cloud-hosting.html">Cloud Hosting</a></li>
							</ul>
						</div>
					</div>
				</div>
				<!-- widget end -->

				<!-- widget -->
				<div class="col-xl-4 col-lg-6 col-md-12 rts-footer__widget--column">
					<div class="rts-footer__widget footer__widget newsletter-style-six">
						<h5 class="widget-title"><span><i class="fa-sharp fa-solid fa-paper-plane"></i></span>Join Our Newsletter</h5>
						<p>We'll send you news and offers.</p>
						<form action="#" class="newsletter">
							<input type="email" name="email" placeholder="Enter mail">
							<span class="icon"><i class="fa-regular fa-envelope-open"></i></span>
							<button type="submit"><i class="fa-regular fa-arrow-right"></i></button>
						</form>
						<div class="social__media">
							<h5>social media</h5>
							<div class="social__media--list">
								<a href="#" class="media"><i class="fa-brands fa-facebook-f"></i></a>
								<a href="#" class="media"><i class="fa-brands fa-instagram"></i></a>
								<a href="#" class="media"><i class="fa-brands fa-linkedin"></i></a>
								<a href="#" class="media"><i class="fa-brands fa-x-twitter"></i></a>
								<a href="#" class="media"><i class="fa-brands fa-behance"></i></a>
							</div>
						</div>
					</div>
				</div>
				<!-- widget end -->
			</div>
		</div>
	</footer>
	<div class="rts-footer__copyright-two style-four">
		<div class="container">
			<div class="row">
				<div class="rts-footer__copyright-two__wrapper">
					<p class="copyright">&copy; Copyright 2024. All Rights Reserved.</p>
					<div class="payment__method">
						<ul>
							<li><img src="assets/images/payment/visa.svg" alt=""></li>
							<li><img src="assets/images/payment/master-card.svg" alt=""></li>
							<li><img src="assets/images/payment/paypal.svg" alt=""></li>
							<li><img src="assets/images/payment/american-express.svg" alt=""></li>
							<li><img src="assets/images/payment/wise.svg" alt=""></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- FOOTER AREA END -->

	<div id="anywhere-home" class="">
	</div>

	<!-- side bar area  -->
	<div id="side-bar" class="side-bar header-two">
		<button class="close-icon-menu"><i class="fa-sharp fa-thin fa-xmark"></i></button>
		<!-- mobile menu area start -->
		<div class="mobile-menu-main">
			<nav class="nav-main mainmenu-nav mt--30">
				<ul class="mainmenu metismenu" id="mobile-menu-active">
					<li class="has-droupdown">
						<a href="#" class="main">Home</a>
						<ul class="submenu mm-collapse">
							<li><a class="mobile-menu-link" href="index.html">Home One</a></li>
							<li><a class="mobile-menu-link" href="index-two.html">Home Two
								</a></li>
							<li><a class="mobile-menu-link" href="index-three.html">Home Three</a></li>
							<li><a class="mobile-menu-link" href="index-four.html">Home Four</a></li>
							<li><a class="mobile-menu-link" href="index-five.html">Home Five</a></li>
							<li><a class="mobile-menu-link" href="index-six.html">Home Six</a></li>
						</ul>
					</li>
					<li class="has-droupdown">
						<a href="#" class="main">Pages</a>
						<ul class="submenu mm-collapse">
							<li><a class="mobile-menu-link" href="about.html">About</a></li>
							<li><a class="mobile-menu-link" href="team.html">Affiliate</a></li>
							<li><a class="mobile-menu-link" href="faq.html">Pricing</a></li>
							<li><a class="mobile-menu-link" href="book-a-demo.html">Sign Up</a></li>
							<li><a class="mobile-menu-link" href="free-audit.html">Whois</a></li>
							<li><a class="mobile-menu-link" href="pricing.html">Partner</a></li>
							<li><a class="mobile-menu-link" href="404.html">Blog</a></li>
							<li><a class="mobile-menu-link" href="404.html">Support</a></li>
							<li><a class="mobile-menu-link" href="404.html">Pricing Package</a></li>
							<li><a class="mobile-menu-link" href="404.html">Sign In</a></li>
							<li><a class="mobile-menu-link" href="404.html">Business Mail</a></li>
							<li><a class="mobile-menu-link" href="404.html">Knowledgebase</a></li>
							<li><a class="mobile-menu-link" href="404.html">Blog Details</a></li>
							<li><a class="mobile-menu-link" href="404.html">Domain Checker</a></li>
							<li><a class="mobile-menu-link" href="404.html">Pricing Comparision</a></li>
							<li><a class="mobile-menu-link" href="404.html">SSL Certificates</a></li>
							<li><a class="mobile-menu-link" href="404.html">Data Centers</a></li>
							<li><a class="mobile-menu-link" href="404.html">Technology</a></li>
							<li><a class="mobile-menu-link" href="404.html">Contact</a></li>
							<li><a class="mobile-menu-link" href="404.html">Domain Transfer</a></li>
							<li><a class="mobile-menu-link" href="404.html">Payment Method</a></li>
							<li><a class="mobile-menu-link" href="404.html">Technology</a></li>
						</ul>
					</li>
					<li class="has-droupdown">
						<a href="#" class="main">Hosting</a>
						<ul class="submenu mm-collapse">
							<li><a class="mobile-menu-link" href="shared-hosting.html">Shared Hosting</a></li>
							<li><a class="mobile-menu-link" href="wordpress-hosting.html">WordPress Hosting</a></li>
							<li><a class="mobile-menu-link" href="vps-hosting.html">VPS Hosting</a></li>
							<li><a class="mobile-menu-link" href="reseller-hosting.html">Reseller Hosting</a></li>
							<li><a class="mobile-menu-link" href="dedicated-hosting.html">Dedicated Hosting</a></li>
							<li><a class="mobile-menu-link" href="cloud-hosting.html">Cloud Hosting</a></li>
						</ul>
					</li>
					<li class="has-droupdown">
						<a href="#" class="main">Domain</a>
						<ul class="submenu mm-collapse">
							<li><a class="mobile-menu-link" href="domain-checker.html">Domain Checker</a></li>
							<li><a class="mobile-menu-link" href="domain-transfer.html">Domain Transfer</a></li>
						</ul>
					</li>
					<li class="has-droupdown">
						<a href="#" class="main">Technology</a>
						<ul class="submenu mm-collapse">
							<li><a class="mobile-menu-link" href="technology.html">Technology</a></li>
							<li><a class="mobile-menu-link" href="data-center.html">Data Center</a></li>
						</ul>
					</li>
					<li class="has-droupdown">
						<a href="#" class="main">Help Center</a>
						<ul class="submenu mm-collapse">
							<li><a class="mobile-menu-link" href="knowledgebase.html">Knowledgebase</a></li>
							<li><a class="mobile-menu-link" href="whois.html">Whois</a></li>
							<li><a class="mobile-menu-link" href="support.html">Support</a></li>
							<li><a class="mobile-menu-link" href="contact.html">Contact</a></li>
						</ul>
					</li>
				</ul>
			</nav>

			<ul class="social-area-one pl--20 mt--100">
				<li><a href="#"><i class="fa-brands fa-linkedin"></i></a></li>
				<li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
				<li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
				<li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
			</ul>
		</div>
		<!-- mobile menu area end -->
	</div>
	<!-- side abr area end -->


	<!-- THEME PRELOADER START -->
	<div class="loader-wrapper">
		<div class="loader">
		</div>
		<div class="loader-section section-left"></div>
		<div class="loader-section section-right"></div>
	</div>
	<!-- THEME PRELOADER END -->
	<!-- BACK TO TOP AREA START -->
	<div class="progress-wrap">
		<svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
			<path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;"></path>
		</svg>
	</div>
	<!-- BACK TO TOP AREA EDN -->

	<!-- jquery js -->
	<script defer src="assets/js/plugins/jquery.min.js"></script>
	<script defer src="assets/js/plugins/popper.js"></script>
	<script defer src="assets/js/plugins/bootstrap.min.js"></script>
	<script defer src="assets/js/plugins/metismenu.js"></script>
	<script defer src="assets/js/vendor/jqueryui.js"></script>
	<script defer src="assets/js/vendor/waypoint.js"></script>
	<script defer src="assets/js/plugins/swiper.js"></script>
	<script defer src="assets/js/plugins/theia-sticky-sidebar.min.js"></script>
	<script defer src="assets/js/plugins/jquery.nice-select.min.js"></script>
	<script defer src="assets/js/plugins/sal.js"></script>
	<script defer src="assets/js/vendor/waw.js"></script>
	<script defer src="assets/js/plugins/counter-up.js"></script>
	<script defer src="assets/js/plugins/magnific-popup.js"></script>
	<!-- contact form js -->
	<script defer src="assets/js/plugins/contact-form.js"></script>
	<script defer src="assets/js/main.js"></script>
	@livewireScripts
</body>


<!-- Mirrored from html.themewant.com/hostie/index-six.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 19 Mar 2024 11:49:17 GMT -->

</html>