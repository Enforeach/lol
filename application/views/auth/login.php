<!DOCTYPE html>
<html lang="en">
<head>
	<title>Datasoft - Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/login_assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/login_assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/login_assets/vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/login_assets/vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/login_assets/vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/login_assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/login_assets/css/main.css">

	<link rel="shortcut icon" href="<?=base_url()?>assets/images/logo.jpeg" />

	<style>
		.field-icon {
			font-size: 20px;
			float: right;
			margin-right: 15px;
			margin-top: -35px;
			position: relative;
			z-index: 2;
			color: #797979;
		}
	</style>
</head>

<body>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic">
					<img src="<?=base_url()?>assets/login_assets/images/lala.png">
				</div>

				<form class="login100-form validate-form" method="post">
					<?php
					if($alert == "gagal"){
						echo"
						<div class='alert alert-danger' style='border-radius: 30px;'>
							<a href='#' class='close' data-dismiss='alert'>&times;</a>
							<p style='font-size: 14px; text-align: center';>Gagal Login</p>
						</div>";
					}
					?>
					<span class="login100-form-title">
						Datasoft Login
					</span>
					<div class="wrap-input100 validate-input">
						<input class="input100"  type="text" name="username" required="" id="input1" placeholder="Username">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input">
						<input class="input100" type="password" name="password" required="" id="password-field" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
						<span toggle="#password-field" class="fa fa-eye field-icon toggle-password"></span>
					</div>
					<span>
					</span>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" style="margin-top: -10px" name="login" type="submit">Login</button>
					</div>
					<div class="text-center" style="margin-top: 10px">
						<a class="txt2" href="#">
							Lupa Username / Password?
						</a>
					</div>
					<div class="text-center p-t-135">
					
					</div>
				</form>
				</div>
			</div>
		</div>


		<script src="<?=base_url()?>assets/login_assets/vendor/jquery/jquery-3.2.1.min.js"></script>
		<script src="<?=base_url()?>assets/login_assets/vendor/bootstrap/js/popper.js"></script>
		<script src="<?=base_url()?>assets/login_assets/vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="<?=base_url()?>assets/login_assets/vendor/select2/select2.min.js"></script>
		<script src="<?=base_url()?>assets/login_assets/vendor/tilt/tilt.jquery.min.js"></script>

		<script >

			$(".toggle-password").click(function() {

				$(this).toggleClass("fa-eye fa-eye-slash");
				var input = $($(this).attr("toggle"));
				if (input.attr("type") == "password") {
					input.attr("type", "text");
				} else {
					input.attr("type", "password");
				}
			});
		</script>


		<script src="assets/login_assets/js/main.js"></script>

	</body>
	</html>