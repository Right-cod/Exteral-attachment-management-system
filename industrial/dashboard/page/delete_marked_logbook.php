<?php
include("../sessions.php");
require("../../../includes/dbconnect.php");
$conn = DBconnect();
$log_id = $_GET['log_id'];
$sql = "DELETE FROM ind_assessment WHERE id='$log_id'";
$query = mysqli_query($conn,$sql);
if ($query) {
  echo "<script>alert('Successful Logbook Deleted');
    window.location.href='marked_logbooks.php'; </script>";
}else{
  echo "<script>alert('Error Deleting');
    window.location.href='marked_logbooks.php'; </script>";
}