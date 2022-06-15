<?php

include("../../includes/dbconnect.php");

//call connection file
 $conn = DBconnect();
if (isset($_POST['signup'])) {
$supervisor_fname = $_POST['supervisor_fname'];
$supervisor_lname = $_POST['supervisor_lname'];
$email = $_POST['email'];
$company_name = $_POST['company_name'];
$company_address = $_POST['company_address'];
$department = $_POST['department'];
$password = $_POST['password'];
$sql = "SELECT * FROM industrial_supervisor WHERE email='$email'";
$query = mysqli_query($conn,$sql);
if ($query) {
$fetch = mysqli_fetch_array($query);
	if ($fetch['email']==$email) {
	echo "<script>alert('Supervisor Already Registered using this email');
	  window.location.href='../signup.php'; </script>";
	  exit();
}
else{
	$sq = "INSERT INTO industrial_supervisor(firstname,lastname,email,company_name,company_address,department,password)VALUES('$supervisor_fname','$supervisor_lname','$email','$company_name','$company_address','$department','$password')";
	$que = mysqli_query($conn,$sq);
	if ($que) {
		session_start();
		  $mail = $_SESSION["email"];
			echo "<script>alert('Successful Supervisor Registered');
	  window.location.href='../dashboard'; </script>";
	}else{
echo mysqli_error($conn);
	}
}

}else{
	echo mysqli_error($conn);
}

}


?>