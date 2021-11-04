<?php
require("conn.php");
require("checkUser.php");

if(isset($_GET['msg'])){
	$msg = $_GET['msg'];
}
?>
<?php
$sql = "SELECT * FROM admin WHERE email='".$_SESSION['email']."'";
$result=mysqli_query($link,$sql);
$row=mysqli_fetch_assoc($result);
$fname=$row["fname"];
$admin_mail=$row["email"];
$department=$row["department"];

?>
<?php
$sql = "SELECT * FROM clients WHERE client_id='".$_GET['client_id']."'";
$result=mysqli_query($link,$sql);
$row=mysqli_fetch_assoc($result);
$client_id2=$row["client_id"];
$fullname=$row["fullname"];
$phone_no=$row["phone_no"];
$client_email=$row["client_email"];
$edi=$row["EDI"];

?>

<?php
$sql = "SELECT * FROM invoicing WHERE client_id='".$client_id2."'";
$result=mysqli_query($link,$sql);
$row=mysqli_fetch_assoc($result);
$invoice_no=$row["invoice_no"];
?>

<?php
$sql = "SELECT SUM(cost*qty) as amount FROM invoicing WHERE invoice_no='".$invoice_no."'";
$result=mysqli_query($link,$sql);
$row=mysqli_fetch_assoc($result);
//$invoice_no=$row["invoice_no"];
$amount=$row["amount"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
<?php include_once "head.php";?>
<link href="form.css" rel="stylesheet">
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
                        <h1 class="h3 mb-0 text-gray-800">CREATE NEW PAYMENT</h1>
                        <a href="subvendor2.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-pen fa-sm text-white-50"></i> For Clients Choosing Littlefingers As Vendor</a>

                              
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
                                <div class="card-header py-6">
                                    <h6 class="m-0 font-weight-bold text-primary">Receipt Issuance</h6>
                                </div>
                                <div class="card-body">
                                    <div class="text-left">
                                   
                                    </div>
                                    <form method="POST" action="insert_payment.php">
                                    <fieldset>
          
          <?php
		    $Mynumb = rand(0, 100000000);
            $show = $Mynumb;
			?>
          <div class="item">
            
            <input id="reg_by" type="hidden" name="reg_by" value="<?php echo $admin_mail ?>" />
            <input id="client_id" type="hidden" name="client_id" value="<?php echo $client_id2 ?>" />
            <input id="invoice_no" type="hidden" name="invoice_no" value="<?php echo $invoice_no ?>" />
            <input id="phone_no" type="hidden" name="phone_no" value="<?php echo $phone_no ?>" />
            <input id="amount" type="hidden" name="amount" value="<?php echo $amount ?>" />
            <input id="client_email" type="hidden" name="client_email" value="<?php echo $client_email ?>" />
          </div>

<table border="1" width="70%" class="table table-striped table-bordered mb-0">

<input type="text" name="payment_date" value="<?php echo date("Y-m-d"); ?>">
<tr>
<td width="20%"><h5>Client ID: </h5></td>
<td><h5><?php echo $client_id2; ?> </h5></td>
</tr>

<tr>
<td width="20%"><h5>Invoice ID: </h5></td>
<td><h5><?php echo $invoice_no; ?> </h5></td>
</tr>

<tr>
<td width="20%"><h5>Client Name: </h5></td>
<td><h5><?php echo $fullname; ?> </h5></td>
</tr>

<tr>
<td width="20%"><h5>Email: </h5></td>
<td><h5><?php echo $client_email; ?> </h5></td>
</tr>

<tr>
<td width="20%"><h5>Phone: </h5></td>
<td><h5><?php echo $phone_no; ?> </h5></td>
</tr>

<tr>
<td width="20%"><h5>EDI: </h5></td>
<td><h5><?php echo $edi; ?> </h5></td>
</tr>

<tr>
<td width="20%"><h5>Total Amount: </h5></td>
<td><h5><?php echo "&#8358;"; echo number_format(($amount),2); ?> </h5></td>
</tr>

<tr>
<td width="20%"><h5>Commission Charged: </h5></td>
<td><input id='commission' type='number' class="form-control" name='commission' required/></td>
</tr>

<tr>
<td width="20%"><h5>Funds Transfer Date: </h5></td>
<td><input id='transfer_date' type='date' class="form-control" name='transfer_date' required/></td>
</tr>

<tr>
<td width="20%"><h5>Remarks: </h5></td>
<td><textarea id='commission'  class="form-control" name='remarks'> </textarea></td>
</tr>

</table>
          <br/>
      
  


   

                                    <div class='item'>
      <label for='state'>Payment Status</label>
                                    <select name='status' class='form-control' style='width:100%' required>
                                    <option  value=''>--Select--</option> 
                                   
                                    
                                    <option value='0'> Awaiting Confirmation</option>
                                    <option value='1'> Payment Received By Littlefingers</option>
                                    <option value='2'> Payment Processed To Vendor/Sub-vendor</option>
                                    </select><br/>

                                    <br/>
    


                                    <input type='submit' value='Save and Generate Receipt...' style=' background-color: #4CAF50; border: none; color: white;
padding: 15px 32px;
text-align: center;
text-decoration: none;
display: inline-block;
font-size: 16px;' width='50%'/>
         
                                    </form>
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
                    <a class="btn btn-primary" href="login.html">Logout</a>
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
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>




</body>

</html>