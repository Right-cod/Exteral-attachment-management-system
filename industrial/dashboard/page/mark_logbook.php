 <?php
include("../sessions.php");
require("../../../includes/dbconnect.php");
$conn = DBconnect();
if(isset($_POST['mark'])){
$sid=$_POST['miid'];
$ssid=$_POST['ssid'];
$one=$_POST['1marks'];
$two=$_POST['2marks'];
$threea=$_POST['3amarks'];
$threeb=$_POST['3bmarks'];
$threec=$_POST['3cmarks'];
$threed=$_POST['3dmarks'];
$four=$_POST['4marks'];
$five=$_POST['5marks'];
$six=$_POST['6marks'];
$seven=$_POST['7marks'];
$eight=$_POST['8marks'];
$nine=$_POST['9marks'];
$ten=$_POST['10marks'];
$eleven=$_POST['11marks'];
$twelve=$_POST['12marks'];
$thirteen=$_POST['13marks'];
$forteen=$_POST['14marks'];

//remarks
$rone=$_POST['1remarks'];
$rtwo=$_POST['2remarks'];
$rthreea=$_POST['3aremarks'];
$rthreeb=$_POST['3bremarks'];
$rthreec=$_POST['3cremarks'];
$rthreed=$_POST['3dremarks'];
$rfour=$_POST['4remarks'];
$rfive=$_POST['5remarks'];
$rsix=$_POST['6remarks'];
$rseven=$_POST['7remarks'];
$reight=$_POST['8remarks'];
$rnine=$_POST['9remarks'];
$rten=$_POST['10remarks'];
$releven=$_POST['11remarks'];
$rtwelve=$_POST['12remarks'];
$rthirteen=$_POST['13remarks'];
$rforteen=$_POST['14remarks'];
$total=$one+$two+$threea+$threeb+$threec+$threed+$four+$five+$six+$seven+$eight+$ten+$eleven+$twelve+$thirteen+$forteen;
//end
$querie=mysqli_query($conn,"INSERT INTO `ind_assessment`(`id`, `ssid`, `s_id`, `1`, `r1`, `2`, `r2`, `3a`, `r3a`, `3b`, `r3b`, `3c`, `r3c`, `3d`, `r3d`, `4`, `r4`, `5`, `r5`, `6`, `r6`, `7`, `r7`, `8`, `r8`, `9`, `r9`, `10`, `r10`, `11`, `r11`, `12`, `r12`, `13`, `r13`, `14`, `r14`, `total`) VALUES 
(null,$ssid,$sid,$one,'$rone',$two,'$rtwo',$threea,'$rthreea',$threeb,'$rthreeb',$threec,'$rthreec',$threed,'$rthreed',$four,'$rfour',$five,'$rfive',$six,'$rsix',$seven,'$rseven',$eight,'$reight',$nine,'$rnine',$ten,'$rten',$eleven,'$releven',$twelve,'$rtwelve',$thirteen,'$rthirteen',$forteen,'$rforteen',$total)");
$update=mysqli_query($conn,"UPDATE students SET ind_status=1  WHERE id=$sid");
  if ($querie) {
  echo "<script>alert('Successful Logbook Marked');
    window.location.href='mystudents.php'; </script>";
  }else{
    //  echo "<script>alert('Error');
    // window.location.href='assess.php'; </script>"; 
    echo mysqli_error($conn);
  }
}

 ?>