 <?php
include("../sessions.php");
require("../../../includes/dbconnect.php");
$conn = DBconnect();
if(isset($_POST['mark'])){
$sid=$_POST['miid'];
$ssid=$_POST['sdid'];
$one=$_POST['amarks'];
$rone=$_POST['aremarks'];
$two=$_POST['bmarks'];
$rtwo=$_POST['bremarks'];
$three=$_POST['cmarks'];
$rthree=$_POST['cremarks'];
$four=$_POST['dmarks'];
$rfour=$_POST['dremarks'];
$five=$_POST['emarks'];
$rfive=$_POST['eremarks'];
$six=$_POST['fmarks'];
$rsix=$_POST['fremarks'];
$total=$one+$two+$three+$four+$five+$six;
$querie=mysqli_query($conn,"INSERT INTO `ins_assessment`(`id`, `ssid`, `s_id`, `one`, `rone`, `two`, `rtwo`, `three`, `rthree`, `four`, `rfour`, `five`, `rfive`, `six`, `rsix`, `total`) VALUES
(null,$ssid,$sid,$one,'$rone',$two,'$rtwo',$three,'$rthree',$four,'$rfour',$five,'$rfive',$six,'$rsix',$total)");
$update=mysqli_query($conn,"UPDATE students SET ins_status=1  WHERE id=$sid");
  if ($querie) {
  echo "<script>alert('Successful Logbook Marked');
    window.location.href='logbooks.php'; </script>";
  }else{
    //  echo "<script>alert('Error');
    // window.location.href='assess.php'; </script>"; 
    echo mysqli_error($conn);
  }
}

 ?>