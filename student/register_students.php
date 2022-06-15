<?php

include("../includes/dbconnect.php");

$conn = DBconnect();


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Student</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="../plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../plugins/summernote/summernote-bs4.min.css">
  <style>
  .nms{
    width:50%;
    float:left;
  }
  </style>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../index.php" class="nav-link">Home</a>
      </li>
     
    </ul>


    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
    
      <!-- Notifications Dropdown Menu -->
     
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="./index.php" class="brand-link">
      <img src="../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Back</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
 
      </div>
      <!-- Sidebar Menu -->
 <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="index.php" class="nav-link">
         <i class="nav-icon fas fa-user"></i>
              <p>
                 Already registered?
              </p>
            </a>
          </li>
            <li class="nav-item">
            <a href="../index.php" class="nav-link">
         <i class="nav-icon fas fa-user"></i>
              <p>
                Back to Dashboard
              </p>
            </a>
          </li>
           <!--  <li class="nav-item">
            <a href="assign_supervisors.php" class="nav-link">
         <i class="nav-icon fas fa-plus-square"></i>
              <p>
                Assign Supervisor
       
              </p>
            </a>
          </li> -->
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Register Students</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Student Register Page</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
 <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title"> Student Register Form</h3>
                     <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
              </div>
         
            <div class="card-body">
            <form  id="rg" onsubmit="return false">

            <div class="form-group mb-5">
              <div class="nms">
              <label class="mb-3" for="Email">FirstName</label>
              <input type="text" class="ml-3" name="fname"  placeholder="" required>
              </div>

              <div class="nms">
              <label class="mb-3" for="Email">LastName</label>
              <input type="text" class="ml-3" name="lname"  placeholder="" required>
              </div>
            </div>
              <div class="form-group mb-3 mt-3">
              <label class="floating-label" for="Email">Email Address</label><br>
              <input type="email" class="form-control" name="email"  placeholder="" required>
            </div>
            <fieldset style="border:1px solid black;padding:3px;">
              <legend style="width:auto;">Admission Details</legend>
            <div class="form-group">
              <div class="nms mb-3">
              <label class="" for="Email">Admission Number eg., 1126,1227</label>
              <input type="number" class="ml-3" name="nums"  placeholder="" required>
              </div>
            <div class="nms mb-3">
            <label class="" for="Email">Year of admission</label>
              <select class="ml-3" name="adm" style="min-width:170px;"  placeholder="" required>
                <option value="2022">2022</option>
                <option value="2021">2021</option>
                <option value="2020">2020</option>
                <option value="2019">2019</option>
                <option value="2018">2018</option>
                <option value="2017">2017</option>
                <option value="2016">2016</option>
                <option value="2015">2015</option>
              </select>
            </div>
            </div>
            </fieldset>
            <div class="form-group mb-3"></div>
             <br>
              <div class="form-group mb-3"><br>
              <label class="floating-label " style="float:left;width:100%;" for="Email">Course of Study</label><br>
              <select name="course" class="form-control" id="" required>
                <option value="BBIT">Bsc of Business in Information Technology</option>
                <option value="IT">Bsc in Information Technology</option>
                <option value="CS">Bsc in  Computer Science</option>
              </select>
            </div>

            <div class="form-group mb-3">
              <label class="floating-label" for="Email">Company,Supervisor Name & Department</label><br>
              
             <select class="form-control" name="supervisor">
                <option selected disabled>--SELECT, COMPANY ATTACHED,SUPERVISOR & DEPARTMENT--</option>
         
              <?php
$sql = "SELECT * FROM industrial_supervisor";
$query = mysqli_query($conn,$sql);
while ($fetch = mysqli_fetch_array($query)) {
  $supervisor_fname = $fetch['firstname'];
  $supervisor_lname = $fetch['lastname'];
  $supervisor_email = $fetch['id'];
  echo"<option value='".$supervisor_email."'>".$fetch['company_name'].",".$supervisor_fname." ".$supervisor_lname.",".$fetch['department']."</option>";
}
              ?>
                   </select>
            </div>
                <div class="form-group mb-3">
              <label class="floating-label" for="Email">Date Commenced:</label><br>
            <input type="date" class="form-control" name="duration_from"  placeholder="" required>
            
            </div>
                  <div class="form-group mb-3">
              <label class="floating-label" for="Email">Expected Finish Date:</label><br>
            <input type="date" class="form-control" name="duration_to"  placeholder="" required>
            
            </div>
            <div class="form-group mb-4">
              <label class="floating-label" for="Password">Town</label><br>
      <input type="text" class="form-control"  name="town" 
              placeholder="" required>
            </div>
                <div class="form-group mb-3">
              <label class="floating-label" for="Email">Street</label><br>
              <input type="text" class="form-control" name="street"  placeholder="" required>
            </div>
    <div class="form-group mb-3">
              <label class="floating-label" for="Email">Building</label><br>
              <input type="text" class="form-control" name="building"  placeholder="" required>
            </div>

          <div class="form-group mb-2">
            <button class="btn btn-block btn-primary mb-4" name="signup">Sign Up</button>
       </div>
            </form>
          </div>
            </div>
            <!-- /.card -->
            </div>
         </div>
 <?php
if(isset($_POST['mark_logbook'])){
  $mail = $_POST['email'];
  $marks = $_POST['marks'];
  $comment = $_POST['comment'];
  $feedback = $_POST['feedback'];
  $sql = "UPDATE students_logbook SET marks='$marks',marked='1',feedback='$feedback',comment='$comment',supervisor_email='$supervisor_email' WHERE id='$log_id' ";
  $query = mysqli_query($conn,$sql);
  if ($query) {
  echo "<script>alert('Successful Logbook Marked');
    window.location.href='logbooks.php'; </script>";
  }else{
     echo "<script>alert('Error occured');
    window.location.href='logbooks.php'; </script>"; 
  }
}

 ?>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="../plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="../plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="../plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="../plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="../plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../plugins/moment/moment.min.js"></script>
<script src="../plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="../plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../dist/js/pages/dashboard.js"></script>
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & ../plugins -->
<script src="../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../plugins/jszip/jszip.min.js"></script>
<script src="../plugins/pdfmake/pdfmake.min.js"></script>
<script src="../plugins/pdfmake/vfs_fonts.js"></script>
<script src="../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(document).ready(function(){
$('#rg').on('submit',function(){
  $.ajax({
			url : "./actions/signup_students.php",
			method : "POST",
			data :$("#rg").serialize(),
			success : function(data){
       if(data=="success"){
        alert("Registration success");
        window.location.href="dashboard/index.php";
       }else{
         alert(data);
       }
			}
		})
})
  });
</script>
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>
