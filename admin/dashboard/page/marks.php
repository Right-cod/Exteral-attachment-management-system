<?php
include("../../../includes/dbconnect.php");

$conn = DBconnect();
$sid= $_GET['sid'];
$gall=mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM students WHERE id=$sid"));
$ins=mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM ins_assessment WHERE s_id=$sid"));
$ind=mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM ind_assessment WHERE s_id=$sid"));
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
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
  
          </li>

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
            <a href="students.php" class="nav-link">
         <i class="nav-icon fas fa-search"></i>
              <p>
                Students
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="assessments.php" class="nav-link active">
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
            <h1><?php echo $gall['fname']." ".$gall['lname']; ?></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"><?php echo $gall['fname']." ".$gall['lname']; ?></li>
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
              </div>
              <!-- /.card-header -->
              <a href="#" onclick="printme()" style="width: 100px;float:left;" class="btn ml-3 btn-info btn-sm">Print</a>

              <div id="printme" class="card-body">
                <table id="example1" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th colspan="4"><?php echo $gall['fname']." ".$gall['lname'].", REG NO.".$gall['adm']; ?> Assessment Report</th>
                    </tr>
                  <tr ><th colspan="4" class="text-center p-1 alert-info">Assessment by institution supervisor</th></tr>
                  <tr>
                    <th>SN.</th>
                    <th>Assessment attribute</th>
                    <th>Marks Awarded</th>
                    <th>Remarks</th>
                  </tr>
                  </thead>
            <tbody>
                   <tr>
                     <td>1</td>
                     <td>Practical orientation of the choosen area</td>
                     <td><?php echo $ins['one']; ?></td>
                     <td><?php echo $ins['rone']; ?></td>
                   </tr>
                   <tr>
                     <td>2</td>
                     <td>Intellectual activity utilized in the task</td>
                     <td><?php echo $ins['two']; ?></td>
                     <td><?php echo $ins['rtwo']; ?></td>
                   </tr>

                   <tr>
                     <td>3</td>
                     <td>Independence</td>
                     <td><?php echo $ins['three']; ?></td>
                     <td><?php echo $ins['rthree']; ?></td>
                   </tr>

                   <tr>
                     <td>4</td>
                     <td>Communication</td>
                     <td><?php echo $ins['four']; ?></td>
                     <td><?php echo $ins['rfour']; ?></td>
                   </tr>

                   <tr>
                     <td>5</td>
                     <td>Innovativeness in relation to task</td>
                     <td><?php echo $ins['five']; ?></td>
                     <td><?php echo $ins['rfive']; ?></td>
                   </tr>

                   <tr>
                     <td>6</td>
                     <td>Application of technology and skills in work</td>
                     <td><?php echo $ins['six']; ?></td>
                     <td><?php echo $ins['rsix']; ?></td>
                   </tr>
                   <tr>
                     <td colspan="2">Total</td>
                     <td colspan="2"><?php echo $ins['total']; ?></td>
                   </tr>
            </tbody>
                   <thead>
                  <tr> <th colspan="4" class="text-center p-1 alert-info">Assessment by industrial supervisor</th> </tr>
                  <tr>
                    <th>SN.</th>
                    <th>Assessment attribute</th>
                    <th>Marks Awarded</th>
                    <th>Remarks</th>
                  </tr> 
                  </thead>
                  <tbody>
                  <tr>
                     <td>1</td>
                     <td>Attendance</td>
                     <td><?php echo $ind['1']; ?></td>
                     <td><?php echo $ind['r1']; ?></td>
                   </tr>
                   <tr>
                     <td>2</td>
                     <td>Puntuality</td>
                     <td><?php echo $ind['2']; ?></td>
                     <td><?php echo $ind['r2']; ?></td>
                   </tr>
                   <tr>
                     <td>3a</td>
                     <td>Basic computer skills(eg typing)</td>
                     <td><?php echo $ind['3a']; ?></td>
                     <td><?php echo $ind['r3a']; ?></td>
                   </tr>
                   <tr>
                     <td>3b</td>
                     <td>General office applications</td>
                     <td><?php echo $ind['3b']; ?></td>
                     <td><?php echo $ind['r3b']; ?></td>
                   </tr>
                   <tr>
                     <td>3c</td>
                     <td>Technnical applications eg., Networking</td>
                     <td><?php echo $ind['3c']; ?></td>
                     <td><?php echo $ind['r3c']; ?></td>
                   </tr>
                   <tr>
                     <td>3d</td>
                     <td>Area of specialization</td>
                     <td><?php echo $ind['3d']; ?></td>
                     <td><?php echo $ind['r3d']; ?></td>
                   </tr>
                   <tr>
                     <td>4</td>
                     <td>Scientific and Technnical knnowledge</td>
                     <td><?php echo $ind['4']; ?></td>
                     <td><?php echo $ind['r4']; ?></td>
                   </tr>
                   <tr>
                     <td>5</td>
                     <td>Intelligence/ Quality of work</td>
                     <td><?php echo $ind['5']; ?></td>
                     <td><?php echo $ind['r5']; ?></td>
                   </tr>
                   <tr>
                     <td>6</td>
                     <td>Ability to learn and perform tasks</td>
                     <td><?php echo $ind['6']; ?></td>
                     <td><?php echo $ind['r6']; ?></td>
                   </tr>
                   <tr>
                     <td>7</td>
                     <td>Acceptability to collegues and supervisors</td>
                     <td><?php echo $ind['7']; ?></td>
                     <td><?php echo $ind['r7']; ?></td>
                   </tr>
                   <tr>
                     <td>8</td>
                     <td>Acceptance of responsibbility</td>
                     <td><?php echo $ind['8']; ?></td>
                     <td><?php echo $ind['r8']; ?></td>
                   </tr>
                   <tr>
                     <td>9</td>
                     <td>Creativity</td>
                     <td><?php echo $ind['9']; ?></td>
                     <td><?php echo $ind['r9']; ?></td>
                   </tr>
                   <tr>
                     <td>10</td>
                     <td>Judgement in situation/ improvision</td>
                     <td><?php echo $ind['10']; ?></td>
                     <td><?php echo $ind['r10']; ?></td>
                   </tr>
                   <tr>
                     <td>11</td>
                     <td>Reliability</td>
                     <td><?php echo $ind['11']; ?></td>
                     <td><?php echo $ind['r11']; ?></td>
                   </tr>
                   <tr>
                     <td>12</td>
                     <td>Adaptability to environment</td>
                     <td><?php echo $ind['12']; ?></td>
                     <td><?php echo $ind['r12']; ?></td>
                   </tr>
                   <tr>
                     <td>13</td>
                     <td>Organizing and planning</td>
                     <td><?php echo $ind['13']; ?></td>
                     <td><?php echo $ind['r13']; ?></td>
                   </tr>
                   <tr>
                     <td>14</td>
                     <td>Effective use of students time</td>
                     <td><?php echo $ind['14']; ?></td>
                     <td><?php echo $ind['r14']; ?></td>
                   </tr>
                   <tr>
                     <td colspan="2">Total</td>
                     <td colspan="2"><?php echo $ind['total']; ?></td>
                   </tr>
                  </tbody>
               <thead>
               <tr> <th colspan="4" class="text-center p-1 alert-info">Assessment marks summary</th> </tr>
               <tr class="text-center">
                 <?php
                $tot=$ind['total']+$ins['total'];
                $per=round(($tot/70)*100);
                 ?>
                    <th>Total:<?php echo $tot; ?></th>
                    <th colspan="2">Percentage:<?php echo $per; ?></th>
                    <th>Status:Pass</th>
                  </tr> 
               </thead>
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
  function printme() {
        var disp_setting = "toolbar=yes,location=no,directories=yes,menubar=yes,";
			disp_setting += "scrollbars=yes,width=800, height=600, left=100, top=25";
			var content_vlue = document.getElementById("printme").innerHTML;

			var docprint = window.open("", "", disp_setting);
			docprint.document.open();
			docprint.document.write('<html><head><title>Assessment Report</title>');
			docprint.document.write('</head><body onLoad="self.print()" style="width: 400px; font-size:12px; font-family:arial;">');
			docprint.document.write(content_vlue);
			docprint.document.write('</body></html>');
			docprint.document.close();
			docprint.focus();
			setTimeout(function() {
				docprint.close()
			}, 750)
     }
</script>
</body>
</html>
