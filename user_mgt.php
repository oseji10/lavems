<?php
require("conn.php");
require("checkUser.php");

if(isset($_GET['msg'])){
    $msg2 = $_GET['msg2'];
    
}
if(isset($_GET['msg2'])){
    $msg2 = $_GET['msg2'];
    
}
?>
<?php
$sql = "SELECT * FROM admin WHERE email='".$_SESSION['email']."'";
$result=mysqli_query($link,$sql);
$row=mysqli_fetch_assoc($result);
$fname=$row["fname"];
$department=$row["department"];

?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include_once "head.php";?>
<link href="radio.css" rel="stylesheet">
</head>
<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
          <?php include_once "title.php"; ?>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

           <?php include_once "sidebar.php"; ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
             

                    <!-- Topbar Navbar -->
                    <?php include_once "topbar.php" ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">USER MANAGEMENT</h1>
                        <a href="new_user.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-plus fa-sm text-white-50"></i> New USER</a>

                                <p><?php echo $msg3 ?><?php echo $msg2 ?></p>        
                    </div>

                 

                    <!-- Content Row -->

                    <div class="row">

                        <!-- Area Chart -->
 

                        <!-- Pie Chart -->
                     
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Content Column -->
                        <div class="col-lg-6 mb-4">

                            

                            <!-- Color System -->
  

                        </div>

                        <div class="col-xl-12 col-lg-7">

                            <!-- Illustrations -->
                            <div class="card shadow mb-12">
                                
                                <div class="card-body">
                                    <div class="text-left">
                                    
                                    </div>
                                    <?php
                
                if($link === false){
                die("ERROR: Could not connect. " . mysqli_connect_error());
                }

                $i=1;
                
                              
								
$sql="select * from admin order by sn desc";            
                if($result = mysqli_query($link, $sql)){
                if(mysqli_num_rows($result) > 0){
                    
									echo "<div class='table-wrap mt-40'>";
                                    echo  "<div class='table-responsive example-print'>";
                                    echo "<p>$msg3</p>";
									echo "<table id='invoice_data' border='1' align='center' width='100%' class='table table-striped table-bordered mb-0'>";
									echo "<tr>";
									echo "<th>&nbsp;&nbsp;SN</th>";
                                    echo "<th>&nbsp;&nbsp;USER's NAME</th>";
                                    echo "<th>&nbsp;&nbsp;USER's EMAIL</th>";
                                    echo "<th>&nbsp;&nbsp;ROLE</th>";
									
									echo "<th>&nbsp;&nbsp;ACTION</th>";
									echo "</tr>";
									while($row = mysqli_fetch_array($result)){
                                        
                                        $user_email=$row["email"];
                                        $fname=$row["fname"];
                                        $lname=$row["lname"];
                                        $role=$row["role"];
                                        $fullname="{$fname} {$lname}";
                                       
									
                                 
                                      
										
									echo "<tr>";
									echo "<td>  &nbsp;&nbsp;" .$i++."</td>";
                                    echo "<td>  &nbsp;&nbsp;" .$fullname."</td>";
									echo "<td>  &nbsp;&nbsp;" .$user_email."</td>";
                                    echo "<td>  &nbsp;&nbsp;" .$role."</td>";
									echo "<td style='text-transform:uppercase;'>  <a style='color:green;' href='edit_user.php?sn=".$row['sn']."'>" ." EDIT USER"."</a>&nbsp;"; echo "|&nbsp;"; echo "<a style='color:red;'  href='delete_user.php?sn=".$row['sn']."&&invoice_no=".$row['invoice_no']."&&client_email=".$client_email."'>" ."DELETE USER"."</a> <br/>  </td>";
									echo "</tr>";
								}
		
								echo "</table>";



                echo "</div>";
              echo "</div>";
                // Free result set
                mysqli_free_result($result);
                }
                else{
                echo "No records matching your query were found.";
                }
                } else{
                echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                }
                // Close connection

                mysqli_close($link);

                ?>
                                </div>
                            </div>

                            <!-- Approach -->
                           

                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php include_once "footer.php"; ?>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

 <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

<!-- Datatable -->
    <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css"></script>


    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>


  
<script>  
 $(document).ready(function() {
     $('#invoice_data').DataTable({
        
         dom: 'Bfrtip',
         buttons: [
             'copyHtml5',
             'excelHtml5',
             'csvHtml5',
             'pdfHtml5',
             ]   } 
     );
 } );
 
  </script> 
</body>

</html>