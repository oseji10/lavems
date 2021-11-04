<?php
require("conn.php");
require("checkUser.php");

if(isset($_GET['msg3'])){
	$msg3 = $_GET['msg3'];
}
if(isset($_GET['msg2'])){
	$msg2 = $_GET['msg2'];
}
$client_id = $_GET['client_id'];
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

$sql = "SELECT * FROM clients WHERE client_id='".$client_id."'";
$result=mysqli_query($link,$sql);
$row=mysqli_fetch_assoc($result);
$fullname=$row["fullname"];



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
                        <h1 class="h3 mb-0 text-gray-800">ISSUE Proforma</h1>
                        <a href="proforma.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-pen fa-sm text-white-50"></i> Issue Proforma</a>

                              
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
                                    <form method="POST" action="preview_invoice.php">
                                    <input id="reg_by" type="hidden" name="reg_by" value="<?php echo $admin_mail ?>" />
                                    <input id="client_id" type="hidden" name="client_id" value="<?php echo $client_id ?>" readonly/>
                                    <input id="fullname" type="hidden" name="fullname" value="<?php echo $fullname ?>" readonly/>
                                    
          
<p><?php echo $msg3 ?></p>
          
          <table border="1" width="100%" style="border-collapse:collapse">
          <tr>
          <td width="20%"><h5>Client ID:</h5></td>
          <td><h5><?php echo $client_id ?></h5></td>
         </tr>
         <tr>
          <td width="20%"><h5>Client's Name:</h5></td>
          <td><h5><?php echo $fullname ?></h5></td>
         </tr>
         </table><br/>
          <script>
     var i = 0;
    function myFunction() {
        i++;
        document.getElementById('prod').name = "prod"+i;
        }

      

        var xyz = 0;
    function myFunction22() {
        xyz++;
        document.getElementById('sn').name = "sn"+xyz;
        } 

        var q = 0;
    function myFunction3() {
        q++;
        document.getElementById('Qty').name = "qty"+q;
        } 

         var c = 0;
    function myFunction4() {
        c++;
        document.getElementById('Cost').name = "ccost"+c;
        }  

        var xz = 0;
    function myFunctionS() {
        xz++;
        document.getElementById('sn').value = +xz;
        } 

        function sum(){
  var val1 = document.getElementById('Qty').value;
  var val2 = document.getElementById('Cost').value;
  var sum = Number(val1) * Number(val2);
  document.getElementById('total').value = sum;
}

function afterText() {
    var txt1 = "&nbsp;<input type='text' id='prod' name='0' class='form-control but'  />";
    var txt2 = "&nbsp;<input type='text' id='sn' name='0' class='form-control but' readonly value='0' width='5%'/>";
    var txt3 = "&nbsp;<input type='number' onkeyup='sum()'  id='Qty' name='0' class='form-control but'  step='.01'/>";
    var txt4 = "&nbsp;<input type='number' onkeyup='sum()' id='Cost' name='0' class='form-control but'  step='.01'/>";
    var txt5 = "&nbsp;<input type='number'  id='total' name='total' class='form-control but' readonly step='.01'/>";
  
    $("input1").after(txt2);
    $("input2").after(txt1);
    $("input3").after(txt3);
    $("input4").after(txt4);
    $("input5").after(txt5);
	
}



</script><br/>
<script>
var times=0;
function checkTime(btn){
  if(times<30){
     ++times;
  }
  else{
    
    {
    alert("Sorry you can't add more than 30 items");
  }
  btn.disabled=true;  
  }
 
}
</script>
<input type="button" onclick="checkTime(); afterText(); myFunction(); myFunctionS(); myFunction22(); myFunction3(); myFunction4();" href="#" value="Click To Add Equipment [+]" style="background-color: #4CAF50; border: none; color: white;
  padding: 8px 18px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 12px;"/><br/>
<table style="margin-top:0;" border="1" style="border-collapse:collapse;" width="100%">
<tr>
<td width="5%"><b>SN</b></td>
<td width="60%"><b>Equipment</b></td>
<td><b>Quantity</b></td>
<td><b>Cost</b></td>
<td><b>Sub Total</b></td>
</tr>


<td><input1 type="hidden"  alt="jQuery"/></td>
<td><input2 type="hidden"  alt="jQuery"/></td>
<td><input3 type="hidden"  alt="jQuery"/></td>
<td><input4 type="hidden"  alt="jQuery"/></td>
<td><input5 type="hidden"  alt="jQuery"/></td>
</tr>
</table>

<br/>
<br/>
<input type="submit" href="#" value="Proceed" style="background-color: #4CAF50; border: none; color: white;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 12px;"/>
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
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>


    <script>
function checkAvailability3() {
	$("#loaderIcon").show();
	jQuery.ajax({
	url: "check_id.php",
	data:'client_id='+$("#client_id").val(),
	type: "POST",
	success:function(data){
		$("#user-availability-status3").html(data);
		
	},
	error:function (data){
    $("#user-availability-status4").html(data);    
        
    }
	});
}
</script>

</body>

</html>