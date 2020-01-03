<!DOCTYPE html>
<html lang="zxx">
<head>
	
	<title>SolMusic | HTML Template</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<!-- Favicon -->
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i&display=swap" rel="stylesheet">
 
	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/owl.carousel.min.css"/>
	<link rel="stylesheet" href="css/slicknav.min.css"/>

	<!-- Main Stylesheets -->
	<link rel="stylesheet" href="css/style.css"/>

</head>
<body>
	
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section -->
	<header class="header-section clearfix">
		<a href="index.php" class="site-logo">
			<img src="img/fhlogo.png" alt="">
		</a>
		<div class="header-right">
			<a href="#" class="hr-btn">Bantuan</a>
			<span>|</span>
			<div class="user-panel">
				<a href="login.php" class="login">Login</a>
				<a href="register.php" class="register">Buat Akun</a>
			</div> 
		</div>
		<ul class="main-menu">
			<li><a href="index.php">Home</a></li>
			<li><a href="marketplace.php">Marketplace</a></li>
			<li><a href="blog.php">Berita</a></li>
			<li><a href="contact.php">Kontak</a></li>
			<li><a href="#">Tentang</a></li>
		</ul>
	</header>
	<!-- Header section end -->

	<!-- Hero section -->
	<section class="hero-section">
		<div class="hero-slider owl-carousel">
			<div class="hs-item">
				<div class="container"> 
					<div class="row">
						<div class="col-lg-6">
							<form class="contact-from">
                                <div class="row">
                                    <div class="col-md-10">

									
									<script type="text/javascript">
										function validasi() {
											var username = document.getElementById("username").value;
											var password = document.getElementById("password").value;		
											if (username != "" && password!="") {
												return true;
											}else{
												alert('Username dan Password harus di isi !');
												return false;
											}
										}
									
									</script>

											<div>
												<h1 style="font-size:20px; margin-left: 40px; margin-top: 10px; margin-bottom: 10px;">Silakan login</h1>
                                            </div>
											<form action="loginscript.php" method="post" onSubmit="return validasi()">
												<div>
													<input type="text" name="username" id="username" placeholder="Username"/>
												</div>
												<div>
													<input type="password" name="password" id="password" placeholder="Password"/>
												</div>			
												<div>
													<input type="submit" value="Login" class="tombol">
												</div>
											</form>
											<div>
												<h1 style="font-size:20px; margin-left: 40px; margin-top: 10px; margin-bottom: 10px;">Belum mendaftar ? Daftar sekarang</h1>
											</div>
											<div >
												<a href="register.php" class="btn btn-secondary btn-lg btn-block" role="button" >Daftar</a>
											</div >
										
                                    </div>
                                </div>
							</form>
							
							
                        </div>
                        
						<div class="col-lg-5">
							<div class="hr-img">
								<img src="img/header.png" alt="">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Hero section end -->

	
<!-- Footer section -->
<footer class="footer-section">
		<div class="container">
			<div class="row">
				<div class="col-xl-6 col-lg-7 order-lg-2">
					<div class="row">
						<div class="col-sm-4">
							<div class="footer-widget">
								<h2>Tentang Kita</h2>
								<ul>
									<li><a href="">Farm-Hub</a></li>
								</ul>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="footer-widget">
								<h2>Layanan</h2>
								<ul>
									<li><a href="">Marketplace</a></li>
									<li><a href="">Transport</a></li>
								</ul>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="footer-widget">
								<h2>Lainnya</h2>
								<ul>
									<li><a href="">Berita</a></li>
									<li><a href="">Kontak</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-6 col-lg-5 order-lg-1">
					<img src="img/fhlogo.png" alt="">
					<div class="copyright">
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This web is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by Farm-Hub Corporation
</div>
					<div class="social-links">
						<a href=""><i class="fa fa-instagram"></i></a>
						<a href=""><i class="fa fa-pinterest"></i></a>
						<a href=""><i class="fa fa-facebook"></i></a>
						<a href=""><i class="fa fa-twitter"></i></a>
						<a href=""><i class="fa fa-youtube"></i></a>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- Footer section end -->
	
	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.slicknav.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/mixitup.min.js"></script>
	<script src="js/main.js"></script>

	</body>


</html>
