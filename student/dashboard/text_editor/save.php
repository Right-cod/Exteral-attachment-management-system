<?php
include("../dbconnect.php");

$conn = DBconnect();
if(isset($_POST['sid'])){
    $sid=$_POST['sid'];
    $html=$_POST['html'];
    if(isset($_POST['complete'])){
        $st="complete";
    }else{
        $st="progress";
    }
    $update=mysqli_query($conn,"UPDATE students set log='$html',complete='$st' WHERE id=$sid");
    if($update){
        echo "Save complete.";
    }
}
if(isset($_POST['check'])){
    $sid=$_POST['check'];
    $gd=mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM students WHERE id=$sid"));
    if(empty($gd['log'])){
        echo "You have not yet started to type your logbook.";
    }else{
        echo $gd['log'];
    }

}
?>