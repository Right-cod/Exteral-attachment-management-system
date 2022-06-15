<?php
include("../../../includes/dbconnect.php");

$conn = DBconnect();

if (isset($_POST['fid'])){
    $fid=$_POST['fid'];
    $sid=$_POST['sid'];
    $update=mysqli_query($conn,"UPDATE students SET supervisor_name='$sid' where id=$fid");
    if($update){
        $gall=mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM supervisors WHERE id=$sid"));
        echo $gall['supervisor_fname']." ".$gall['supervisor_fname'];
    }else{
        echo "failed";
    }
}
?>