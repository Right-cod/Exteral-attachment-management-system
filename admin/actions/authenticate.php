<?php
session_start();
include("../../includes/dbconnect.php");
include("../../includes/secure.php");
//call connection file
 $conn = DBconnect();
 //$pp=md5("admin");
 //mysqli_query($conn,"UPDATE admin set password='$pp' where user_id=15");
 //get user inputs and secure using test_security() method
	# code...
$email =$_POST['email'];
$password=md5($_POST['password']);
//industrial
if(isset($_POST['inds'])){
$check=mysqli_num_rows(mysqli_query($conn,"SELECT * FROM industrial_supervisor WHERE email='$email' and password='$password'"));
if($check==1){
  $_SESSION['email']=$email;
  echo "success";
}else{
    echo "Login failed.Please check your credentials and try again.";
   exit();
}
}
//institution
if(isset($_POST['inns'])){
  $check=mysqli_num_rows(mysqli_query($conn,"SELECT * FROM supervisors WHERE email='$email' and password='$password'"));
  if($check==1){
    $_SESSION['email']=$email;
    echo "success";
  }else{
      echo "Login failed.Please check your credentials and try again.";
     exit();
  }
  }
  //student
  if(isset($_POST['stud'])){
    $check=mysqli_num_rows(mysqli_query($conn,"SELECT * FROM 	students WHERE email='$email' and password='$password'"));
    if($check==1){
      $_SESSION['email']=$email;
      echo "success";
    }else{
        echo "Login failed.Please check your credentials and try again.";
       exit();
    }
    } 
// admin
if(isset($_POST['admin'])){
  $check=mysqli_num_rows(mysqli_query($conn,"SELECT * FROM 	admin WHERE username='$email' and password='$password'"));
  if($check==1){
    $_SESSION['email']=$email;
    echo "success";
  }else{
      echo "Login failed.Please check your credentials and try again.";
     exit();
  }
  } 






