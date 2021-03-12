<!DOCTYPE html>
<html lang="tr">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/custom.css') ?>">
	<title>Register</title>
</head>
<body>
<div class="form-container">
	<div class="form-card">
		<div class="form-card-head">
			<div class="form-card-signup">Sign up</div>
		</div>
		<form action="<?php echo base_url('tasks'); ?>" method="post">
			<div class="form-card-body">
			<!--<div class="name"></div> Kaydolda gelecek-->
				<div class="name form-group" style="margin-top:.5rem;">
					<div>
						Name
					</div>	
					<input type="text" autocomplete="none" class="input" placeholder="Also nicknames will be accepted" name="name" id="name">
				</div>
				<div class="email form-group" style="margin-top:.5rem;">
					<div>
						Email
					</div>	
					<input type="email" autocomplete="none" class="input" placeholder="Sign up with email, this is the way" name="email" id="email">
				</div>
				<div class="password form-group" style="margin-top:.5rem;">
					<div>
						Password
					</div>
					<input type="password" autocomplete="none" class="input" placeholder="******" name="password" id="password">
					<div class="goRegisterandLogin" >
						Already have an account? <a href="<?php echo base_url('login') ?>">Sign in</a>
					</div>
				</div>
				<button type="submit" id="registerBtn" class="form-button" style="margin-top: 0.5rem;">Finish</button>
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

<script src="<?php echo base_url('assets/js/db/register.js'); ?>"></script>


	
</body>
</html>