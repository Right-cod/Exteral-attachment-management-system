<?php
session_start();
 
// Destroying session
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">

<head>

	<title>Student-Login</title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="description" content="" />
	<meta name="keywords" content="">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
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
						<form id="idsform">
						<img src="assets/images/blog_2.jpg" alt="" class="img-fluid mb-4" style="border-radius: 50%; width: 180px;">
						<h4 class="mb-3 f-w-400">Attached Student</h4>
						<input type="hidden" name="stud">
						<div class="form-group mb-3">
							<label class="floating-label" for="Email">Email Address</label><br>
							<input type="text" class="form-control" name="email"  placeholder="" required>
						</div>
						<div class="form-group mb-4">
							<label class="floating-label" for="Password">Password</label><br>
			<input type="password" class="form-control"  name="password" 
							placeholder="" required>
						</div>
						<div class="custom-control custom-checkbox text-left mb-4 mt-2">
							<input type="checkbox" class="custom-control-input" id="customCheck1">
							<!--<label class="custom-control-label" for="customCheck1">Save credentials.</label>-->
						</div>
						<a href="#" class="btn btn-block btn-primary mb-4 signin" style="color:white;" name="signin">Signin</a>
					<p><a href="register_students.php">Don't have an account?</a></p>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script src="assets/js/plugins/bootstrap.min.js"></script>
<!--<script src="assets/js/ripple.js"></script>-->
<script src="assets/js/pcoded.min.js"></script>

<script>
	$(document).ready(function(){
	$('.signin').on('click',function(){
		$.ajax({
			url : "../admin/actions/authenticate.php",
			method : "POST",
			data :$('#idsform').serialize(),
			success : function(data){
				if(data=="success"){
                 window.location.href="./dashboard/index.php"
				}else{
					alert(data)
				}
			}
		})
	})	
	})

</script>

</body>

</html>
