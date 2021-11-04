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
                        <h1 class="h3 mb-0 text-gray-800">CREATE New Client Record</h1>
                        <a href="proforma.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-pen fa-sm text-white-50"></i> Already an existing Client? Issue Proforma</a>

                              
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
                                    <h6 class="m-0 font-weight-bold text-primary">Proforma Invoice Issuance</h6>
                                </div>
                                <div class="card-body">
                                    <div class="text-left">
                                   
                                    </div>
                                    <form method="POST" action="insert_client.php">
                                    <fieldset>
          <legend>Gogetit Client Information Retrieval</legend>
          <?php
		    $Mynumb = rand(0, 100000000);
            $show = $Mynumb;
			?>
          <div class="item">
            
            <input id="reg_by" type="hidden" name="reg_by" value="<?php echo $admin_mail ?>" />
            <input id="client_id" type="hidden" name="client_id" value="<?php echo $show ?>" />
            
          </div>

          <br/><br/>
      <div class='item'>
      <label for='activity'>Fullname<span></span></label>
      <input id='activity' type='text' name='fullname'/>
    </div><br/>
    <br/>
      <div class='item'>
      <label for='phone_no'>Phone Number<span></span></label>
      <input id='phone_no' type='text' name='phone_no' require/>
    </div>
    <br/>
      <div class='item'>
      <label for='email'>Email</label>
      <input id='email' type='text' name='client_email' required/><span style='color:red !important'>* Compulsory field</span>
      
    </div>
    <br/>
    <div class='item'>
      <label for='Contact'>Contact Address</label>
   
      <textarea id='contact_address' name='contact_address'></textarea>
    </div>
    <br/>
    <label for='subject'>Gender</label><br/>
    <label  for='male' style='color:black'>Male
    <input  type='radio' id='male' name='gender' value='Male' />
    </label>

    <label  for='female' style='color:black'>Female
    <input type='radio' id='female' name='gender' value='Female' />
    </label><br/>


    <div class='item'>
      <label for='state'>State</label>
                                    
                                    <select name='state' class='form-control' style='width:100%' required>
                                    <option value=''>--Select--</option>
                                    <option value='Abia'> Abia</option>
                                    <option value='Adamawa'> Adamawa</option>
                                    <option value='Akwa Ibom'> Akwa Ibom</option>
                                    <option value='Anambra'> Anambra</option>
                                    <option value='Bauchi'> Bauchi</option>
                                    <option value='Bayelsa'> Bayelsa</option>
                                    <option value='Benue'> Benue</option>
                                    <option value='Borno'> Borno</option>
                                    <option value='Cross River'> Cross River</option>
                                    <option value='Delta'> Delta</option>
                                    <option value='Ebonyi'> Ebonyi</option>
                                    <option value='Enugu'> Enugu</option>
                                    <option value='Edo'> Edo</option>
                                    <option value='Ekiti'> Ekiti</option>
                                    <option value='Gombe'> Gombe</option>
                                    <option value='Imo'> Imo</option>
                                    <option value='Jigawa'> Jigawa</option>
                                    <option value='Kaduna'> Kaduna</option>
                                    <option value='Kano'> Kano</option>
                                    <option value='Katsina'> Katsina</option>
                                    <option value='Kebbi'> Kebbi</option>
                                    <option value='Kogi'> Kogi</option>
                                    <option value='Kwara'> Kwara</option>
                                    <option value='Lagos'> Lagos</option>
                                    <option value='Nasarawa'> Nasarawa</option>
                                    <option value='Niger'> Niger</option>
                                    <option value='Ogun'> Ogun</option>
                                    <option value='Ondo'> Ondo</option>
                                    <option value='Osun'> Osun</option>
                                    <option value='Oyo'> Oyo</option>
                                    <option value='Plateau'> Plateau</option>
                                    <option value='Rivers'> Rivers</option>
                                    <option value='Sokoto'> Sokoto</option>
                                    <option value='Taraba'> Taraba</option>
                                    <option value='Yobe'> Yobe</option>
                                    <option value='Zamfara'> Zamfara</option>
                                    </select></div><br/>


                                    <div class='item'>
      <label for='state'>Nature of Business/Occupation</label>
                                    <select name='nature' class='form-control' style='width:100%' required>
                                    <option  value=''>--Select--</option> 
                                   
                                    
                                    <option value='Fashion and Beauty'> Fashion and Beauty</option>
                                    <option value='Apparel and Textile'> Apparel and Textile</option>
                                    <option value='Arts and Entertainment'> Arts and Entertainment</option>
                                    <option value='Agriculture and Allied Processing'> Agriculture and Allied Processing</option>
                                    <option value='Automobile'> Automobile</option>
                                    <option value='Telecommunication'> Telecommunication</option>
                                    <option value='Media and Publishing'> Media and Publishing</option>
                                    <option value='Catering and Event Manageme'> Catering and Event Manageme</option>
                                    <option value='Hospitality'> Hospitality</option>
                                    <option value='Healthcare'> Healthcare</option>
                                    <option value='Creative Industry'> Creative Industry</option>
                                    <option value='ICT'> ICT</option>
                                    <option value='Logistics'> Logistics</option>
                                    <option value='Others'> Others</option>
                                    
                                    </select><br/>

                                    <br/>
      <div class='item'>
      <label for='edi'>EDI<span></span></label>
      <input id='edi' type='text' name='edi'  />
    </div><br/>

    <div class='item'>
      <label for='state'>Referred By:</label>
                                    <select name='referral' class='form-control' style='width:100%' required>
                                    <option  value=''>--Select--</option> 
                                   
                                    
                                    <option value='Nirsal office Area 10'> Nirsal office Area 10</option>
                                    <option value='Nirsal office Kubwa'> Nirsal office Kubwa</option>
                                    <option value='Nirsal office Bwari'> Nirsal office Bwari</option>
                                    <option value='Nirsal office Kuje'> Nirsal office Kuje</option>
                                    <option value='I came myself'> I came myself</option>
                                    <option value='Others'> Others</option>
                                    </select><br/>



                                    <input type='submit' value='Save and Generate Invoice...' style=' background-color: #4CAF50; border: none; color: white;
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