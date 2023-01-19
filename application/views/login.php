<!DOCTYPE html>
<html lang="en">

<head>
	<title></title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link href="frontend/login.css" rel="stylesheet">
</head>


<body>
	<div class="back">
		<div class="div-center">
			<div class="content">
				<h3>Login</h3>
				<hr />
				<?php
				$message = $this->session->userdata("message");
				if ($message) {
					echo "<p class= 'alert alert-danger'>$message</p>";
					$this->session->unset_userdata("message");
				}
				?>
				<form action="<?php echo base_url(); ?>admin-login" method="post">
					<div class="form-group">
						<label for="exampleInputEmail1">Email address</label>
						<input name="email_address" type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1">Password</label>
						<input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
					</div>
					<button type="submit" class="btn btn-primary">Login</button>
					<hr />
				</form>
			</div>
			</span>
		</div>
</body>

</html>