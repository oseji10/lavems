<?php
include_once "conn.php";
// Inialize session
 session_start();

// Include database connection settings

$email= mysqli_real_escape_string($link, $_POST["email"]);
$password= mysqli_real_escape_string($link, $_POST["password"]);

$encpassword="lavems";
$decrypted_pass=openssl_encrypt($password,"AES-128-ECB",$encpassword);




 $error="Sorry! Wrong Email Address or Password supplied. Kindly verify.";

// Retrieve username and password from database according to user's input
$login=mysqli_query($link, "SELECT * FROM admin WHERE email='".$email."' AND password='".$decrypted_pass."'");
// Check username and password match
$fetch = mysqli_fetch_assoc($login);
$role = $fetch['role'];
$department = $fetch['department'];
$last_visit = $fetch['last_visit'];
$mix="{$role}{$department}";
 if (mysqli_num_rows($login) == 1) {
 
     // Set username session variable
 
 $_SESSION["email"] = $email;
$_SESSION['last_login_timestamp'] = time();
//$result = mysql_query($sql);

 // Jump to secured page
switch ($role){
   	 
	 
	case "Administrator";
	 header("location:home.php");
 
        break;
	case "Guest";
	 header("location:index_guest.php");
		
	

}
 }


 else {
 //Jump to login page
 header("location: index.php?msg2=$error");

 }

?>
