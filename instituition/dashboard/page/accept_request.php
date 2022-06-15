<?php
include("../sessions.php");
require("../../../includes/dbconnect.php");
$conn = DBconnect();
$request_id = $_GET['log_id'];
$sql = "UPDATE leave_request SET accepted='1' WHERE id='$request_id'";

$query = mysqli_query($conn,$sql);
if ($query) {
  echo "<script>alert('Successful Request Accepted');
    window.location.href='requests.php'; </script>";
}else{
  echo "<script>alert('Unable to handle requests');
    window.location.href='requests.php'; </script>";
}