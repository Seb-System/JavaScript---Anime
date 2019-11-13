<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Ynov-Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="<?php echo img_url("icons/favicon.ico"); ?>"/>
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo vendor_url("bootstrap/css/bootstrap.min.css"); ?>">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo font_url("font-awesome-4.7.0/css/font-awesome.min.css"); ?>">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo vendor_url("animate/animate.css"); ?>"/>
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo vendor_url("css-hamburgers/hamburgers.min.css"); ?>"/>
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo vendor_url("select2/select2.min.css"); ?>"/>
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo css_url("util"); ?>"/>
	<link rel="stylesheet" type="text/css" href="<?php echo css_url("main"); ?>"/>
	<!--===============================================================================================-->
	<script src="https://cdn.jsdelivr.net/npm/vue@2.6.0/dist/vue.js"></script>
	<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
</head>
<body>

	<div class="limiter" id="app">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic">
					<img src="<?php echo img_url("img-01.png"); ?>" alt="IMG">
				</div>

				<div class="login100-form validate-form" v-show="isLogin && !isForget">
					<span class="login100-form-title">
						Ynov - Connexion
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>

					<form id="logout-form" :action="href" method="POST" style="display: none;">
						<input type="hidden" name="_token" :value="csrf">
					</form>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">Connexion</button>
					</div>

					<input type="hidden" name="csrf" id="csrf" value="<?php $this->security->get_csrf_hash(); ?>" />

					<div class="text-center p-t-12">
						<span class="txt1">Oublie ?</span>
						<a class="txt2" href="#" v-on:click="isForget = true">Recupérer mon compte</a>
					</div>
				</div>

				<div class="login100-form validate-form" v-show="isForget">
					<span class="login100-form-title">
						Ynov - Recupération
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" v-on:click="isforget = false">Réinitialisation</button>
					</div>

					<div class="text-center p-t-50">
						<a class="txt2" href="#" v-on:click="isForget = false">
							Vous avez déjà un compte ?
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</div>

			</div>
		</div>
	</div>



	<!--===============================================================================================-->
	<script src="<?php echo vendor_url("jquery/jquery-3.2.1.min.js"); ?>"/></script>
	<!--===============================================================================================-->
	<script src="<?php echo vendor_url("bootstrap/js/popper.js"); ?>"/></script>
	<script src="<?php echo vendor_url("bootstrap/js/bootstrap.min.js"); ?>"/></script>
	<!--===============================================================================================-->
	<script src="<?php echo vendor_url("select2/select2.min.js"); ?>"/></script>
	<!--===============================================================================================-->
	<script src="<?php echo vendor_url("tilt/tilt.jquery.min.js"); ?>"/></script>
	<!--===============================================================================================-->
	<script src="<?php echo js_url("main"); ?>"/></script>
	<script src="<?php echo js_url("connexion")?>"></script>

</body>
</html>
