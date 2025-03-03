<!doctype html>
<html class="fixed">
	<head>
		<!-- Basic -->
		<meta charset="UTF-8">
		<meta name="keywords" content="HTML5 Admin Template" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="icon" type="image/png"  href="<?=base_url()?>assets/frontend/img/logoizzatul.png">
		<link rel="manifest" href="<?=base_url()?>assets/frontend/img/favicon/manifest.json">
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="msapplication-TileImage" content="<?=base_url()?>assets/frontend/img/logoizzatul.png">
		<meta name="theme-color" content="#ffffff">
    <title>Login - IZZATUL ISLAM KARAWANG</title>
		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<!-- Web Fonts  -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">
		<!-- Vendor CSS -->
		<link rel="stylesheet" href="<?=base_url()?>assets/backend/assets/vendor/bootstrap/css/bootstrap.css" />
		<link rel="stylesheet" href="<?=base_url()?>assets/backend/assets/vendor/font-awesome/css/font-awesome.css" />
		<link rel="stylesheet" href="<?=base_url()?>assets/backend/assets/vendor/magnific-popup/magnific-popup.css" />
		<link rel="stylesheet" href="<?=base_url()?>assets/backend/assets/vendor/bootstrap-datepicker/css/datepicker3.css" />
		<!-- Theme CSS -->
		<link rel="stylesheet" href="<?=base_url()?>assets/backend/assets/stylesheets/theme.css" />
		<!-- Skin CSS -->
		<link rel="stylesheet" href="<?=base_url()?>assets/backend/assets/stylesheets/skins/default.css" />
		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="<?=base_url()?>assets/backend/assets/stylesheets/theme-custom.css">
		<!-- Head Libs -->
		<script src="<?=base_url()?>assets/backend/assets/vendor/modernizr/modernizr.js"></script>
	</head>
	<body class="panel-body">
		<!-- start: page -->
		<section class="body-sign">
			<div class="center-sign">
				<a href="#" class="logo pull-left">
					<img src="<?=base_url()?>assets/backend/assets/images/izzatulbanner.jpg" height="50" alt="Porto Admin" />
				</a>
				<div class="panel panel-sign">
					<div class="panel-title-sign mt-xl text-right">
						<h2 class="title text-uppercase text-bold m-none"><i class="fa fa-user mr-xs"></i> Login</h2>
					</div>
					<div class="panel-body">

            <?php $this->view('message'); ?>
						<form action="<?=site_url('auth/process')?>" method="post">
							<div class="form-group mb-lg">
								<label>Username</label>
								<div class="input-group input-group-icon">
									<input name="username" type="text" class="form-control input-lg" required value="admin" placeholder="Masukkan Username" autofocus/>
									<span class="input-group-addon">
										<span class="icon icon-lg">
											<i class="fa fa-user"></i>
										</span>
									</span>
								</div>
							</div>

							<div class="form-group mb-lg">
								<div class="clearfix">
									<label class="pull-left">Password</label>
									<!-- <a href="pages-recover-password.html" class="pull-right">Lost Password?</a> -->
								</div>
								<div class="input-group input-group-icon">
									<input name="password" type="password" class="form-control input-lg" required value="admin" placeholder="Masukkan Password"/>
									<span class="input-group-addon">
										<span class="icon icon-lg">
											<i class="fa fa-lock"></i>
										</span>
									</span>
								</div>
							</div>

							<div class="row">
								<div class="col-sm-8">
									<div class="checkbox-custom checkbox-default">
										<input id="RememberMe" name="rememberme" type="checkbox"/>
										<label for="RememberMe">Remember Me</label>
									</div>
								</div>
								<div class="col-sm-4 text-right">
									<button type="submit" name="login" class="btn btn-primary hidden-xs">Login</button>
									<!-- <button type="submit" name="login" class="btn btn-primary btn-block btn-lg visible-xs mt-lg">Sign In</button> -->
								</div>
							</div>

							<span class="mt-lg mb-lg line-thru text-center text-uppercase">
								<span>or</span>
							</span>
								<p class="text-center">Belum punya akun? <a href="<?=site_url('auth/register')?>">Daftar Sekarang!</a></p>
								<p class="text-center"><a href="<?=site_url('home/ppdb')?>">Kembali ke halaman PPDB</a></p>
						</form>
					</div>
				</div>
				<p class="text-center text-muted mt-md mb-md">&copy; Copyright <script>document.write(new Date().getFullYear());</script>. All rights reserved.</p>
			</div>
		</section>
		<!-- end: page -->

		<!-- Vendor -->
		<script src="<?=base_url()?>assets/backend/assets/vendor/jquery/jquery.js"></script>
		<script src="<?=base_url()?>assets/backend/assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
		<script src="<?=base_url()?>assets/backend/assets/vendor/bootstrap/js/bootstrap.js"></script>
		<script src="<?=base_url()?>assets/backend/assets/vendor/nanoscroller/nanoscroller.js"></script>
		<script src="<?=base_url()?>assets/backend/assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
		<script src="<?=base_url()?>assets/backend/assets/vendor/magnific-popup/magnific-popup.js"></script>
		<script src="<?=base_url()?>assets/backend/assets/vendor/jquery-placeholder/jquery.placeholder.js"></script>

		<!-- Theme Base, Components and Settings -->
		<script src="<?=base_url()?>assets/backend/assets/javascripts/theme.js"></script>

		<!-- Theme Custom -->
		<script src="<?=base_url()?>assets/backend/assets/javascripts/theme.custom.js"></script>

		<!-- Theme Initialization Files -->
		<script src="<?=base_url()?>assets/backend/assets/javascripts/theme.init.js"></script>

    <script type="text/javascript">
            $(document).ready(function() {
            $('#notice').hide();
            <?php if($this->session->flashdata('error') || $this->session->flashdata('success')){ ?>
                $('#notice').fadeIn(2000);
                $('#notice').delay(5000).fadeOut(3000);
            <?php } ?>
            });
    </script>
	</body>
</html>
