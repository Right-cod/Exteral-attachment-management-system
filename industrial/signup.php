<?php
session_start();
 
// Destroying session
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">

<head>

	<title>Supervisor-Signup</title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="description" content="" />
	<meta name="keywords" content="">

	<!-- Favicon icon -->
	<link rel="icon" href="assets/images/user.png" type="image/x-icon">

	<!-- vendor css -->
	<link rel="stylesheet" href="assets/css/style.css">
	
	


</head>

<!-- [ auth-signin ] start -->
<div class="auth-wrapper">
	<div class="auth-content" style="width: 600px; ">
		<div class="card" >
			<div class="row align-items-center text-center">
				<div class="col-md-12" >
					<div class="card-body">
						<form action="actions/supervisors_signup.php" method="post">
						<img src="assets/images/blog_2.jpg" alt="" class="img-fluid mb-4" style="border-radius: 50%; width: 180px;">
						<h4 class="mb-3 f-w-400">Create Account</h4>
						<div class="form-group mb-3">
							<label class="floating-label" for="Email">Supervisor FirstName</label><br>
							<input type="text" class="form-control" name="supervisor_fname"  placeholder="" required>
						</div>
						<div class="form-group mb-3">
							<label class="floating-label" for="Email">Supervisor LastName</label><br>
							<input type="text" class="form-control" name="supervisor_lname"  placeholder="" required>
						</div>
							<div class="form-group mb-3">
							<label class="floating-label" for="Email">Email Address</label><br>
							<input type="text" class="form-control" name="email"  placeholder="" required>
						</div>
					
						
					<div class="form-group mb-3">
							<label class="floating-label" for="Email">Company/Industry Name</label><br>
							<input type="text" class="form-control" name="company_name"  placeholder="" required>
						</div>
				    <div class="form-group mb-3">
							<label class="floating-label" for="Email">Company/Industry Address</label><br>
							<input type="text" class="form-control" name="company_address"  placeholder="" required>
						</div>
						<div class="form-group mb-3">
							<label class="floating-label" for="Email">Company/Industry Department</label><br>
							<input type="text" class="form-control" name="department"  placeholder="" required>
						</div>
				
						<div class="form-group mb-4">
							<label class="floating-label" for="Password">Password</label><br>
		                	<input type="password" class="form-control"  name="password" 
							placeholder="" required>
						</div>
					
						<button class="btn btn-block btn-primary mb-4" name="signup">Sign Up</button>
					<p><a href="index.php">Login</a></p>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script src="assets/js/plugins/bootstrap.min.js"></script>
<script src="assets/js/ripple.js"></script>
<script src="assets/js/pcoded.min.js"></script>



</body>

</html>
