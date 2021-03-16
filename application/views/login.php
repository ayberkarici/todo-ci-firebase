<!DOCTYPE html>
<html lang="tr">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/custom.css') ?>">
	<link rel="shortcut icon" href="<?php echo base_url('assets/images/favicon.png') ?>" />
	<title>Login</title>
</head>
<body>

<div class="form-container">
	<div class="form-card">
		<div class="form-card-head">
			<div class="form-card-signup">Sign in</div>
		</div>
		<form action="" method="post">
			<div class="form-card-body">
				<!--<div class="name"></div> Kaydolda gelecek-->
				<div class="email form-group">
					<div>
						Email
					</div>
					<input id="email" type="email" class="input" placeholder="Sign in with email, it's easy" name="email" value="<?php echo ($this->session->has_userdata('email')) ? $this->session->userdata('email') : ''?>">
				</div>
				<div class="password form-group">
					<div>
						Password
					</div>
					<input id="password" type="password" class="input" placeholder="******" name="password" value="<?php echo ($this->session->has_userdata('password')) ? $this->session->userdata('password') : ''?>">
					<div class="goRegisterandLogin">
						Need an acount? <a href="<?php echo base_url('register') ?>">Sign up</a>
					</div>
				</div>
					<button type="submit" id="loginBtn" class="form-button">Login</button>
			</div>
		</form>
	</div>
</div>
	
<!-- Firebase connection -->

<script src="https://www.gstatic.com/firebasejs/8.3.0/firebase-app.js"></script>

<!-- If you enabled Analytics in your project, add the Firebase SDK for Analytics -->
<script src="https://www.gstatic.com/firebasejs/8.3.0/firebase-analytics.js"></script>

<!-- Add Firebase products that you want to use -->
<script src="https://www.gstatic.com/firebasejs/8.2.10/firebase-database.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.3.0/firebase-auth.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.3.0/firebase-firestore.js"></script>


<!-- Firebase connection -->

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<script src="<?php echo base_url('assets/js/db/login.js'); ?>"></script>

</body>
</html>