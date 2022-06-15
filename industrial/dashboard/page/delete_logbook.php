<?php
include("../sessions.php");
require("../../../includes/dbconnect.php");
$conn = DBconnect();
$log_id = $_GET['log_id'];
$sql = "DELETE FROM students_logbook WHERE id='$log_id'";
$query = mysqli_query($conn,$sql);
if ($query) {
  echo "<script>alert('Successful Logbook Deleted');
    window.location.href='logbooks.php'; </script>";
}else{
  echo "<script>alert('Error');
    window.location.href='logbooks.php'; </script>";
}