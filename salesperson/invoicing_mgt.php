<?php
require("conn.php");
require("checkUser.php");

if(isset($_GET['msg'])){
    $msg = $_GET['msg'];
    $msg3 = $_GET['msg3'];
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
                    <form class="form-inline">
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
                    </form>

                    

                    <!-- Topbar Navbar -->
                    <?php include_once "topbar.php" ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Tables</h1>
                    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the <a target="_blank"
                            href="https://datatables.net">official DataTables documentation</a>.</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <?php
                
                if($link === false){
                die("ERROR: Could not connect. " . mysqli_connect_error());
                }

                $i=1;
                
                              
								
$sql="select DISTINCT client_id, invoice_no, invoice_date from invoicing order by invoice_date desc";            
                if($result = mysqli_query($link, $sql)){
                if(mysqli_num_rows($result) > 0){
                    
									echo "<div class='table-wrap mt-40'>";
                                    echo  "<div class='table-responsive example-print'>";
                                    echo "<p>$msg3</p>";
									echo "<table id='dataTable' border='1' align='center' width='100%' class='table table-bordered'>";
									echo "<tr>";
									echo "<th>&nbsp;&nbsp;SN</th>";
                                    echo "<th>&nbsp;&nbsp;INVOICE NUMBER</th>";
									echo "<th>&nbsp;&nbsp;CLIENT ID</th>";
									echo "<th>&nbsp;&nbsp;CLIENT NAME</th>";
                                    echo "<th>&nbsp;&nbsp;EMAIL</th>";
                                    echo "<th>&nbsp;&nbsp;INVOICE DATE</th>";
                                    echo "<th>&nbsp;&nbsp;SEND STATUS</th>";
									
									echo "<th>&nbsp;&nbsp;ACTION</th>";
									echo "</tr>";
									while($row = mysqli_fetch_array($result)){
                                        
                                        $client_id=$row["client_id"];
                                        $invoice_no=$row["invoice_no"];
                                        $invoice_date=$row["invoice_date"];
                                        $invoice_sent=$row["invoice_sent"];
									
                                      $sql2 = "SELECT * FROM clients WHERE client_id='".$client_id."'";
                                      $result2=mysqli_query($link,$sql2);
                                      $row2=mysqli_fetch_assoc($result2);
                                      $client_id2=$row2["client_id"];
                                      $fullname=$row2["fullname"];
                                      $client_email=$row2["client_email"];
                                      
										
									echo "<tr>";
									echo "<td>  &nbsp;&nbsp;" .$i++."</td>";
                                    echo "<td>  &nbsp;&nbsp;" .$invoice_no."</td>";
									echo "<td>  &nbsp;&nbsp;" .$client_id2."</td>";
                                    echo "<td>  &nbsp;&nbsp;" .$fullname."</td>";
                                    echo "<td>  &nbsp;&nbsp;" .$client_email."</td>";
                                  
                                    echo "<td>  &nbsp;&nbsp;" .$invoice_date."</td>";
                                    echo "<td>  &nbsp;&nbsp;Sent/downloaded" .$invoice_sent." times</td>";
								
									echo "<td style='text-transform:uppercase;'>  <a style='color:green;' target='_blank' href='view_invoice.php?client_id=".$row['client_id']."&&invoice_no=".$row['invoice_no']."'>" ."VIEW INVOICE"."</a>&nbsp;"; echo "|<a style='color:green;' target='_blank' href='pdfstore.php?client_id=".$row['client_id']."&&invoice_no=".$row['invoice_no']."&&client_email=".$client_email."'> &nbsp;" ."Send Via Email"."</a> <br/>  </td>";
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

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

</body>

</html>