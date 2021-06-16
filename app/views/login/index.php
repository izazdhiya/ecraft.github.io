

<!DOCTYPE html>
<html lang="en">
<head>
	<title>E Craft | <?= $data['judul'] ?></title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="<?= BASEURL; ?>/img/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= BASEURL; ?>/css/login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= BASEURL; ?>/css/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= BASEURL; ?>/css/login/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?= BASEURL; ?>/css/login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= BASEURL; ?>/css/login/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= BASEURL; ?>/css/login/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?= BASEURL; ?>/css/login/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= BASEURL; ?>/css/login/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?= BASEURL; ?>/css/login/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form p-l-55 p-r-55 p-t-178" action="<?= BASEURL; ?>/login/cek" method="post">
					<span class="login100-form-title">
						LOGIN
					</span>

					<div class="wrap-input100 validate-input m-b-16" data-validate="Please enter email">
						<input class="input100" type="text" id="email" name="email" placeholder="Email" required>
						
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Please enter password">
						<input class="input100" type="password" name="password" id="password" placeholder="Password" required>
						
					</div>

					<div class="text-left p-t-13 p-b-23">
						
					</div>

					<div class="container-login100-form-btn">
						<button type="submit" name="login" class="login100-form-btn">
							login
						</button>
					</div>

					<div class="flex-col-c p-b-40">
						
					</div>

				</form>

				<div class="container-login100-form-btn">
					<a href='<?= BASEURL; ?>' class="btn btn-primary" >Beranda</a>
				</div>
				<div class="flex-col-c p-b-40">
						
				</div>

			</div>
		</div>
	</div>
	
	
<!--===============================================================================================-->
	<script src="<?= BASEURL; ?>/js/login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="<?= BASEURL; ?>/js/login/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="<?= BASEURL; ?>/js/login/vendor/bootstrap/js/popper.js"></script>
	<script src="<?= BASEURL; ?>/js/login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="<?= BASEURL; ?>/js/login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="<?= BASEURL; ?>/js/login/vendor/daterangepicker/moment.min.js"></script>
	<script src="<?= BASEURL; ?>/js/login/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="<?= BASEURL; ?>/js/login/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="<?= BASEURL; ?>/js/login/js/main.js"></script>

</body>
</html>
