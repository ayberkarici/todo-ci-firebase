<!DOCTYPE html>
<html lang="tr">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/custom.css') ?>">
	<title>Login</title>
</head>
<body>

<div class="form-container">
	<div class="form-card">
		<div class="form-card-head">
			<div class="form-card-signup">Sign in</div>
		</div>
		<form action="<?php echo base_url('tasks'); ?>" method="post">
			<div class="form-card-body">
				<!--<div class="name"></div> Kaydolda gelecek-->
				<div class="email form-group">
					<div>
						Email
					</div>
					<input type="email" class="input" placeholder="Sign in with email, it's easy" name="email" value="<?php echo ($this->session->has_userdata('email')) ? $this->session->userdata('email') : ''?>">
				</div>
				<div class="password form-group">
					<div>
						Password
					</div>
					<input type="password" class="input" placeholder="******" name="password" value="<?php echo ($this->session->has_userdata('password')) ? $this->session->userdata('password') : ''?>">
					<div class="goRegisterandLogin">
						Need an acount? <a href="<?php echo base_url('register') ?>">Sign up</a>
					</div>
				</div>
					<button type="submit" class="form-button">Login</button>
			</div>
		</form>
	</div>
</div>
	
</body>
</html>