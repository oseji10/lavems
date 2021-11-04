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
                        <h1 class="h3 mb-0 text-gray-800">PROFORMA INVOICES ISSUED</h1>
                        <a href="process_payments.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-pen fa-sm text-white-50"></i> Process Payment</a>

                              
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
                
                              
								
$sql="select  * from payments where status='2' order by payment_date desc";            
                if($result = mysqli_query($link, $sql)){
                if(mysqli_num_rows($result) > 0){
                    
									echo "<div class='table-wrap mt-40'>";
                                    echo  "<div class='table-responsive example-print'>";
                                    echo "<p>$msg3</p>";
									echo "<table id='invoice_data' border='1' align='center' width='100%' class='table table-striped table-bordered mb-0'>";
									echo "<tr>";
									echo "<th>&nbsp;&nbsp;PAYMENT ID</th>";
                                    echo "<th>&nbsp;&nbsp;INVOICE NUMBER</th>";
									echo "<th>&nbsp;&nbsp;CLIENT ID</th>";
									echo "<th>&nbsp;&nbsp;CLIENT NAME</th>";
                                    //echo "<th>&nbsp;&nbsp;EMAIL</th>";
                                    echo "<th>&nbsp;&nbsp;AMOUNT</th>";
                                    echo "<th>&nbsp;&nbsp;PROCESS DATE</th>";
                                    echo "<th>&nbsp;&nbsp; STATUS</th>";
									
									echo "<th>&nbsp;&nbsp;ACTION</th>";
									echo "</tr>";
									while($row = mysqli_fetch_array($result)){
                                        
                                        $client_id=$row["client_id"];
                                        $invoice_no=$row["invoice_no"];
                                        $payment_date=$row["payment_date"];
                                        $status=$row["status"];
                                        $amount=$row["amount"];
                                        $pid=$row["payment_id"];
                                        $amount2=number_format(($amount),2);

                                      $sql2 = "SELECT * FROM clients WHERE client_id='".$client_id."'";
                                      $result2=mysqli_query($link,$sql2);
                                      $row2=mysqli_fetch_assoc($result2);
                                      $client_id2=$row2["client_id"];
                                      $fullname=$row2["fullname"];
                                      $client_email=$row2["client_email"];
                                      
                                      switch ($status) {
                                        case "0":
                                          $status2= "<i style='color: red'>Awaiting Confirmation</i>";
                                          break;
                                          case "1":
                                            $status2=  "<i style='color:#FFBF00'>Payment Received By Littlefingers</i>";
                                            break;
                                            case "2":
                                                $status2=  "<i style='color:green'>Payment Processed</i>";
                                                break;
                                             }
										
									echo "<tr>";
									echo "<td>  &nbsp;&nbsp;" .$pid."</td>";
                                    echo "<td>  &nbsp;&nbsp;" .$invoice_no."</td>";
									echo "<td>  &nbsp;&nbsp;" .$client_id2."</td>";
                                    echo "<td>  &nbsp;&nbsp;" .$fullname."</td>";
                                    //echo "<td>  &nbsp;&nbsp;" .$pid."</td>";
                                    echo "<td>  &nbsp;&nbsp;&#8358;" .$amount2."</td>";
                                    echo "<td>  &nbsp;&nbsp;" .$payment_date."</td>";
                                    echo "<td>  &nbsp;&nbsp;" .$status2."</td>";
								
									echo "<td style='text-transform:uppercase;'>  <a style='color:green;' href='view_receipt.php?client_id=".$row['client_id']."&&invoice_no=".$row['invoice_no']."'>" ." PRINT"."</a>&nbsp;"; echo "|&nbsp;"; echo "<a style='color:green;' href='pdfstore.php?client_id=".$row['client_id']."&&invoice_no=".$row['invoice_no']."&&client_email=".$client_email."'>" ."Email"."</a> <br/>  </td>";
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