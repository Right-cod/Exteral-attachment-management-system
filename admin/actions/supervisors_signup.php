<?php

include("../../includes/dbconnect.php");

//call connection file
 $conn = DBconnect();
if (isset($_POST['supervisor_fname'])) {
$supervisor_fname = $_POST['supervisor_fname'];
$supervisor_lname = $_POST['supervisor_lname'];
$password=md5($supervisor_fname);
$email = $_POST['email'];
$company_name = $_POST['company_name'];
$company_address = $_POST['company_address'];
$department = $_POST['department'];
$phone = $_POST['phone'];
if(!(strlen($phone) == 10)){
	echo "Phone number must be 10 digit";
	exit();
}
$sql = "SELECT * FROM industrial_supervisor WHERE email='$email'";
$query = mysqli_query($conn,$sql);
if ($query) {
$fetch = mysqli_num_rows($query);
	if ($fetch>0) {
	echo "<script>alert('Supervisor Already Registered using this email');
	  window.location.href='../dashboard/page/industrial_supervisor.php'; </script>";
	  exit();
}
else{
	$sq = "INSERT INTO industrial_supervisor(firstname,lastname,email,company_name,company_address,department,phone,password)VALUES('$supervisor_fname','$supervisor_lname','$email','$company_name','$company_address','$department','$phone','$password')";
	$que = mysqli_query($conn,$sq);
	if ($que) {
		session_start();
		  //$_SESSION["email"]=$email;
	echo "success";
	}else{
echo mysqli_error($conn);
	}
}

}else{
	echo mysqli_error($conn);
}

}


?>