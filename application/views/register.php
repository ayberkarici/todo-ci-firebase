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
					<input type="text" autocomplete="none" class="input" placeholder="Also nicknames will be accepted" name="name" >
				</div>
				<div class="email form-group" style="margin-top:.5rem;">
					<div>
						Email
					</div>	
					<input type="email" autocomplete="none" class="input" placeholder="Sign up with email, this is the way" name="email">
				</div>
				<div class="password form-group" style="margin-top:.5rem;">
					<div>
						Password
					</div>
					<input type="password" autocomplete="none" class="input" placeholder="******" name="password">
					<div class="goRegisterandLogin" >
						Already have an account? <a href="<?php echo base_url('login') ?>">Sign in</a>
					</div>
				</div>
				<button type="submit" class="form-button" style="margin-top: 0.5rem;">Finish</button>
			</div>
		</form>
	</div>
</div>
	
</body>
</html>