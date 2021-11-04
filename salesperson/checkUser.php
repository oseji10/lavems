<?php
session_start();

if($_SESSION['email'] == ""){
header("location:../index.php?msg2=Sorry! You cannot access that page directly. Please login to continue");
//    echo "Please login to access this page";
	}
?>
<?php
if (isset($_SESSION["email"])) {
  
  if ((time() - $_SESSION['last_login_timestamp']) > 1200) {
      
      header("location:index.php?msg2=Sorry! Your session has expired. Please login again");
    
    exit;
  } else {
    $_SESSION['last_login_timestamp'] = time();
  }
}
?>