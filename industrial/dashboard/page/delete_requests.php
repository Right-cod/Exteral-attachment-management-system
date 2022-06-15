<?php
include("../sessions.php");
require("../../../includes/dbconnect.php");
$conn = DBconnect();
$request_id = $_GET['request_id'];
$sql = "DELETE FROM leave_request WHERE id='$request_id'";
$query = mysqli_query($conn,$sql);
if ($query) {
  echo "<script>alert('Successful Logbook Deleted');
    window.location.href='requests.php'; </script>";
}else{
  echo "<script>alert('Error');
    window.location.href='requests.php'; </script>";
}