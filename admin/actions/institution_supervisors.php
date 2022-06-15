<?php

include("../../includes/dbconnect.php");

//call connection file
 $conn = DBconnect();
if (isset($_POST['supervisor_fname'])) {
$supervisor_fname = $_POST['supervisor_fname'];
$supervisor_lname = $_POST['supervisor_lname'];
$email = $_POST['email'];
$password=md5($supervisor_fname);
$instituition_name = $_POST['instituition_name'];
$instituition_address = $_POST['instituition_address'];
$department = $_POST['department'];
$phone = $_POST['phone'];
if(!(strlen($phone) == 10)){
	echo "Phone number must be 10 digit";
	exit();
}
$sql = "SELECT * FROM supervisors WHERE email='$email'";
$query = mysqli_query($conn,$sql);
if ($query) {
$fetch = mysqli_num_rows($query);
	if ($fetch>0) {
	echo "<script>alert('Supervisor Already Registered using this email');
	   window.location.href='../dashboard/page/institution_supervisor.php';</script>";
	  exit();
}
else{
	$sq = "INSERT INTO supervisors(supervisor_fname,supervisor_lname,email,instituition_name,instituition_address,department,phone,password)VALUES('$supervisor_fname','$supervisor_lname','$email','$instituition_name','$instituition_address','$department','$phone','$password')";
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