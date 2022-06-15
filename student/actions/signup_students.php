<?php
include("../../includes/dbconnect.php");
date_default_timezone_set('Africa/Nairobi');
//call connection file
 $conn = DBconnect();
if (isset($_POST['fname'])) {
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$date=date("Y-m-d");
$adm = "C027-01-".$_POST['nums']."/".$_POST['adm'];
$course = $_POST['course'];
$password=md5($adm);
$supervisor=$_POST['supervisor'];
$dt=mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM industrial_supervisor where id=$supervisor"));
$company_name = $dt['company_name'];
$company_address = $dt['company_address'];
$department = $dt['department'];
$supervisor_name ="not assigned";
$duration_from = $_POST['duration_from'];
$duration_to = $_POST['duration_to'];
$town = $_POST['town'];
$street = $_POST['street'];
$building = $_POST['building'];
$sql = "SELECT * FROM students WHERE email='$email' or adm='$adm'";
$query = mysqli_query($conn,$sql);
$d=strtotime($duration_from);
$er=ceil((time()-$d)/60/60/24);
/*if($er>0){
	echo "<script>alert('Please enter a valid START date');
	window.location.href='../register_students.php';</script>";
   exit();
}*/
$dd=strtotime($duration_to);
$di=ceil(($dd-$d)/60/60/24);
if($di<60){
	echo "Please enter a valid END date";
   exit();
}
if ($query) {
$fetch = mysqli_num_rows($query);
	if ($fetch>0) {
	echo "Student Already Registered');>";
	  exit();
}
else{
	$sq = "INSERT INTO students(fname,lname,email,adm,course,company_name,company_address,department,supervisor_name,duration_from,duration_to,town,street,building,password,ind_s)VALUES('$fname','$lname','$email','$adm','$course','$company_name','$company_address','$department','$supervisor_name','$duration_from','$duration_to','$town','$street','$building','$password',$supervisor)";
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