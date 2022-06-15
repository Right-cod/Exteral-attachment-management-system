<?php
include("../../includes/dbconnect.php");
$target_directory="../logbook";
$allowd_file_ext = array("docx","pdf");
$conn = DBconnect();
if(isset($_POST['sid'])){
    $sid=$_POST['sid'];
    $filename=$_POST['filename'];

$ch=mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM students WHERE id=$sid"));
$log=$ch['complete'];
if($log!="upload" && $log!="complete"){
    if(empty($filename)){
        echo "error1";
          exit(); 
          }else{
        $name=$_FILES['file']['name'];
          $target_file = $target_directory.basename($_FILES["file"]["name"]); 
          $imageExt = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
          if (!in_array($imageExt, $allowd_file_ext)) {
            echo "error2";
          exit();          
        } else{
            $move=move_uploaded_file($_FILES["file"]["tmp_name"],$target_file);
            $update=mysqli_query($conn,"UPDATE students set upload='$name',complete='upload',ins_status=0,ind_status=0 where id=$sid");
            if($update && $move){
                echo "Upload success";
            }else{
                echo "Upload failed";
            }
        }
          }
}else{
    echo "error4";
}

}
?>