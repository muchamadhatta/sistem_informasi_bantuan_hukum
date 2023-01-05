<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Bantuan Hukum Front</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta content="" name="keywords">
	<meta content="" name="description">

	<!-- Favicons -->
	<link href="<?=base_url()?>assets/avilon/img/favicon/ms-icon-150x150.png" rel="icon">
	<link href="<?=base_url()?>assets/avilon/img/favicon/apple-icon-180x180.png" rel="apple-touch-icon">

	<!-- Google Fonts -->
	<link
		href="<?=base_url()?>assets/avilon/https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700|Open+Sans:300,300i,400,400i,700,700i"
		rel="stylesheet">

	<!-- Bootstrap CSS File -->
	<link href="<?=base_url()?>assets/avilon/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<!-- Libraries CSS Files -->
	<link href="<?=base_url()?>assets/avilon/lib/animate/animate.min.css" rel="stylesheet">
	<link href="<?=base_url()?>assets/avilon/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link href="<?=base_url()?>assets/avilon/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
	<link href="<?=base_url()?>assets/avilon/lib/magnific-popup/magnific-popup.css" rel="stylesheet">

	<!-- Main Stylesheet File -->
	<link href="<?=base_url()?>assets/avilon/css/style.css" rel="stylesheet">

	<!-- =======================================================
    Theme Name: Avilon
    Theme URL: https://bootstrapmade.com/avilon-bootstrap-landing-page-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>

	<!--==========================
    Header
  ============================-->
	<header id="header" >
		<div class="container">
			<div class="container-fluid">
				<div class="col-sm-12">
			<div  class="pull-left">

		 <h2 style="color: white;"> BHF<a href="#intro"><img src="<?=base_url()?>assets/avilon/img/foto_profil.png" width="50px"  alt="" title="BANTUAN HUKUM FRONT"></a></h2>


		</div>
				</div>

			<nav id="nav-menu-container">
				<ul class="nav-menu">
					<li class="menu-active"><a href="<?=site_url('website')?>">Beranda</a></li>
					<li class="menu-has-children"><a href="<?=site_url('website')?>#about">Profil</a>
						<ul>
							<li><a href="<?=site_url('website')?>#features">Sejarah</a></li>
							<li><a href="<?=site_url('website')?>#advanced-features">Visi & Misi</a></li>
							<li><a href="<?=site_url('website')?>#contact">Kontak</a></li>
						</ul>
					</li>
					<li><a href="<?=site_url('page_legal_consultation')?>">Konsultasi Hukum</a></li>
					<li><a href="<?=site_url('page_product_of_law')?>">Produk Hukum</a></li>
					<li><a href="<?=site_url('page_article')?>">Artikel</a></li>
					<li><a href="<?=site_url('page_event_schedule')?>">Agenda</a></li>
					<li><a href="<?=site_url('page_gallery')?>">Galeri</a></li>
					<li><a href="<?=site_url('page_register/add')?>">Register</a></li>
					<li><a href="<?=site_url('auth/login')?>">Login</a></li>
				</ul>
			</nav><!-- #nav-menu-container -->
		</div>
	</header><!-- #header -->
	<br>
	<br>
	<?php echo $contents ?>

	<!--==========================
    Footer
  ============================-->
	<footer id="footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 text-lg-left text-center">
					<div class="copyright">
						&copy;2019 Copyright <strong>Bantuan Hukum Front</strong>. All Rights Reserved
					</div>
					<div class="credits">
					</div>
				</div>
				<div class="col-lg-6">
					<nav class="footer-links text-lg-right text-center pt-2 pt-lg-0">
						<a href="#intro" class="scrollto">Home</a>
						<a href="#about" class="scrollto">About</a>
						<a href="#">Privacy Policy</a>
						<a href="#">Terms of Use</a>
					</nav>
				</div>
			</div>
		</div>
	</footer><!-- #footer -->

	<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

	<!-- JavaScript Libraries -->
	<script src="<?=base_url()?>assets/avilon/lib/jquery/jquery.min.js"></script>
	<script src="<?=base_url()?>assets/avilon/lib/jquery/jquery-migrate.min.js"></script>
	<script src="<?=base_url()?>assets/avilon/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="<?=base_url()?>assets/avilon/lib/easing/easing.min.js"></script>
	<script src="<?=base_url()?>assets/avilon/lib/wow/wow.min.js"></script>
	<script src="<?=base_url()?>assets/avilon/lib/superfish/hoverIntent.js"></script>
	<script src="<?=base_url()?>assets/avilon/lib/superfish/superfish.min.js"></script>
	<script src="<?=base_url()?>assets/avilon/lib/magnific-popup/magnific-popup.min.js"></script>

	<!-- Contact Form JavaScript File -->
	<script src="<?=base_url()?>assets/avilon/contactform/contactform.js"></script>

	<!-- Template Main Javascript File -->
	<script src="<?=base_url()?>assets/avilon/js/main.js"></script>



</body>

</html>
