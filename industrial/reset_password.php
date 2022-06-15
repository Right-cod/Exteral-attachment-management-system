<?php
session_start();
 
// Destroying session
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">

<head>

	<title>Supervisor-Login</title>

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
	<div class="auth-content">
		<div class="card">
			<div class="row align-items-center text-center">
				<div class="col-md-12">
					<div class="card-body">
						<form action="" method="post">
						<img src="assets/images/blog_2.jpg" alt="" class="img-fluid mb-4" style="border-radius: 50%; width: 180px;">
						<h4 class="mb-3 f-w-400">Reset Password</h4>
						<div class="form-group mb-3">
							<label class="floating-label" for="Email">Email Address</label><br>
							<input type="text" class="form-control" name="email"  placeholder="" required>
						</div>
						<div class="form-group mb-4">
							<label class="floating-label" for="Password">Password</label><br>
			<input type="password" class="form-control"  name="password" 
							placeholder="" required>
						</div>
						<div class="form-group mb-4">
							<label class="floating-label" for="Password">Confirm Password</label><br>
			<input type="password" class="form-control"  name="confirm_password" 
							placeholder="" required>
						</div>
						
						<button class="btn btn-block btn-primary mb-4" name="reset">Reset</button>
			<p><a href="index.php">Login</a></p>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
include("../includes/dbconnect.php");
include("../includes/secure.php");
//call connection file
 $conn = DBconnect();
if (isset($_POST['reset'])) {
$email =  test_security($_POST['email']);
$email =  mysqli_real_escape_string($conn,$email);
$password =  test_security($_POST['password']);
$password =  mysqli_real_escape_string($conn,$password);
$confirm_password =  test_security($_POST['confirm_password']);
$confirm_password =  mysqli_real_escape_string($conn,$confirm_password);
if ($password!=$confirm_password) {
echo "<script>alert('Passwords do not much');</script>";
}else{
	$sq = "SELECT * FROM industrial_supervisor WHERE email='$email'";
	$que = mysqli_query($conn,$sq);
	$count = mysqli_num_rows($que);
	if ($count == 1) {
			$sql = "UPDATE industrial_supervisor SET phone='$confirm_password' where email='$email'";
	$query = mysqli_query($conn,$sql);
	if ($query) {
		echo "<script>alert('Password Reset succesfull');</script>";
	}else{
		echo "<script>alert('Unable to reset Password');</script>";
	}
	}else{
		echo "<script>alert('Supervisor Not found');</script>";
	}

}
}



?>
<script src="assets/js/plugins/bootstrap.min.js"></script>
<script src="assets/js/ripple.js"></script>
<script src="assets/js/pcoded.min.js"></script>



</body>

</html>
