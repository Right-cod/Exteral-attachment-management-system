<?php

include("../../../includes/dbconnect.php");

$conn = DBconnect();


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Supervisor</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"  crossorigin="anonymous">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="../../../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="../../../plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../../dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../../../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../../../plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../../../plugins/summernote/summernote-bs4.min.css">
  <?php include 'style.php';?>
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
    <a href="../../../index.php" class="brand-link">
      <img src="../../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Logout</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
 
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
 <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
    <li class="nav-item menu-open">
            <a href="../index.php" class="nav-link ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
      
              </p>
            </a>

          <li class="nav-item">
            <a href="industrial_supervisor.php" class="nav-link">
         <i class="nav-icon fas fa-user"></i>
              <p>
                  Industrial Supervisor(s)
       
              </p>
            </a>
          </li>
            <li class="nav-item">
            <a href="institution_supervisor.php" class="nav-link">
         <i class="nav-icon fas fa-user"></i>
              <p>
                  Institution Supervisor(s)
       
              </p>
            </a>
          </li>
         <!--    <li class="nav-item">
            <a href="assign_supervisors.php" class="nav-link">
         <i class="nav-icon fas fa-plus-square"></i>
              <p>
                Assign Supervisor
       
              </p>
            </a>
          </li> -->
               <li class="nav-item">
            <a href="students.php" class="nav-link active">
         <i class="nav-icon fas fa-search"></i>
              <p>
                Students
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="assessments.php" class="nav-link">
         <i class="nav-icon fas fa-edit"></i>
              <p>
                Assessment results
       
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="reports.php" class="nav-link ">
         <i class="nav-icon fas fa-edit"></i>
              <p>
                Reports
       
              </p>
            </a>
          </li>
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
            <h1>List of Students Attached</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Students</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->  
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Attached Students</h3>
              <!--  <a href="./register_students.php" class="btn btn-info btn-sm ml-auto my-auto btn-right">Add new student</a>-->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Student Email</th>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>Company Attached</th>
                    <th>Company Address</th>
                    <th>Department </th>
                    <th>From Date</th>
                    <th>To Date</th>
                    <th>Supervisor</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                      
                    <?php

$sql = "SELECT * FROM students";
$query = mysqli_query($conn,$sql);
while($get = mysqli_fetch_array($query)){
$id    =   $get['id'];
$fname = $get['fname'];
$lname = $get['lname'];
$email = $get['email'];
$adm = $get['adm'];
$company_name = $get['company_name'];
$company_address = $get['company_address'];
$department = $get['department'];
$supervisor_name = $get['supervisor_name'];
$duration_from = $get['duration_from'];
$duration_to = $get['duration_to'];
if($supervisor_name=="not assigned"){
 $gty="Not assigned";
 $as=1;
}else{
  $gt=mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM supervisors where id='$supervisor_name'"));
  $gty=$gt["supervisor_fname"].' '.$gt["supervisor_lname"];
  $as=2;
}
echo '<tr>
 <td>'.$email.'</td>
 <td>'.$fname.'</td>
 <td>'.$lname.'</td>
 <td>'.$company_name.'</td>
 <td>'.$company_address.'</td>
 <td>'.$department.'</td>
 <td>'.$duration_from.'</td>
 <td>'.$duration_to.'</td> ';
 ?>
<td class="sup" id="sup<?php echo $get['id']; ?>"><?php echo $gty; ?></td>
<td class="sup1"  id="upsup<?php echo $get['id']; ?>">
  <select name="" id="mysup<?php echo $get['id']; ?>">
  <option value="not assigned">Select supervisor</option>
   <?php
   $hrtt=mysqli_query($conn,"SELECT * FROM supervisors where department='$department'");
   while($frt=mysqli_fetch_array($hrtt)){
     ?>
        <option value="<?php echo $frt['id']; ?>"><?php echo $frt['supervisor_fname']." ".$frt['supervisor_lname'] ?></option>
    <?php
   }
   ?>
  </select>
</td>
 <?php
 if($as==1){
  ?>
  <td><a href="#" data-id="<?php echo $get['id']; ?>" data-toggle="modal" class="btn btn-warning text-light btn-sm assignme">Assign</a></td>
  <?php
  }else{
    ?>
  <td><a href="#" data-id="<?php echo $get['id']; ?>" data-toggle="modal" class="btn btn-info text-light btn-sm assignme">Edit</a></td>
    <?php
  }
  ?>
  <td id="save<?php echo $get['id']; ?>" class="saveme"><a href="#"  data-id="<?php echo $get['id']; ?>" class="btn btn-success text-light savy btn-sm">Save</a></td>
  <?php
  echo"</tr>";
}

?>

          
         
                  </tbody>
               
                </table>
              </div>
              <!-- /.card-body -->
            </div>
         
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
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
<!-- Button trigger modal -->
<script>
$(document).ready(function(){
$('.sup1').hide();
$('.saveme').hide();
$('.assignme').on('click',function(){
var did=$(this).data('id');
$('#sup'+did).hide();
$('#upsup'+did).show();
$('#save'+did).show();
$(this).hide();
});

//save
$('.savy').on('click',function(){
  var fid=$(this).data('id');
  var sid=$('#mysup'+fid).val();
  $.ajax({
			url : "updatesup.php",
			method : "POST",
			data :{fid:fid,sid:sid},
			success : function(data){
      if(data=="failed"){
            alert("failed to update");
            window.location.reload(true);
      }else{
        $('#sup'+fid).html(data);
             alert("Data saved successfully");
             window.location.reload(true);
      }
			}
		})
})
})
</script>
<!-- jQuery -->
<script src="../../../plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../../../plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="../../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="../../../plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="../../../plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="../../../plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="../../../plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="../../../plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../../../plugins/moment/moment.min.js"></script>
<script src="../../../plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="../../../plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="../../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../../../dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../../dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../../../dist/js/pages/dashboard.js"></script>
<script src="../../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & ../plugins -->
<script src="../../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../../../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../../../plugins/jszip/jszip.min.js"></script>
<script src="../../../plugins/pdfmake/pdfmake.min.js"></script>
<script src="../../../plugins/pdfmake/vfs_fonts.js"></script>
<script src="../../../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../../../plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../../../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="../../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../../dist/js/demo.js"></script>
<!-- Page specific script -->

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
