<?php
$target_directory="../";
$allowd_file_ext = array("png","jpg","jpeg","jfif","webp");
include("../../includes/dbconnect.php");
date_default_timezone_set('Africa/Nairobi');
//call connection file
 $conn = DBconnect();
 $sid=$_POST['sid'];
 //
 $name=$_FILES['file']['name'];
 $target_file = $target_directory.basename($_FILES["file"]["name"]); 
 $imageExt = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
 if (!in_array($imageExt, $allowd_file_ext)) {
   echo "Allowed file formats are .jpg, .png, .jpeg. .jfif,.webp";
 exit();          
}else{
   $move=move_uploaded_file($_FILES["file"]["tmp_name"],$target_file);
}

 //
 $ch=mysqli_num_rows(mysqli_query($conn,"SELECT * FROM leave_request WHERE sid=$sid"));
 if($ch>0){
    echo "You already have submitted your leave request"; 
    exit(); 
 }
 $reason=$_POST['reason'];
 $date=$_POST['date'];
 $d=strtotime($date);
$er=ceil((time()-$d)/60/60/24);
if($er>0){
	echo "Please enter a valid leave date";
   exit();
}
 $comment=$_POST['comment'];
 $insert=mysqli_query($conn,"INSERT INTO `leave_request`(`id`, `sid`, `date`, `r_date`, `reason`, `comment`, `status`, `photo`) VALUES 
 (null,$sid,'$date',now(),'$reason','$comment',0,'$name')");
 if($insert){
    echo "success";
}else{
  echo "Unable to submit request";
}
?>