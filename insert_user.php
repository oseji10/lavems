<?php

include "conn.php";



$row=$_SESSION['email'];
?>
<?php
$sql = "SELECT * FROM admin WHERE email='".$_SESSION['email']."'";
$result=mysqli_query($link,$sql);
$row=mysqli_fetch_assoc($result);
$fname=$row["fname"];


?>
<?php


$msg2="<p style='color:red'>Sorry! A USER with this name already exists</p>";

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$user_email=$_POST['email'];
$role=$_POST['role'];
$user_pass=$_POST['user_pass'];

$encpassword="lavems";
$encrypted_pass=openssl_encrypt($user_pass,"AES-128-ECB", $encpassword);

$reg_by=$_POST['reg_by'];


$msgs3="<p style='color:green'> Congratulations! You have successfully added a new USER. </p>";



// Create connection
//$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($link->connect_error) {
    die("Connection failed: " . $link->connect_error);
}


$sql2 = "INSERT INTO admin (fname, lname, email, password, role, reg_by)
VALUES ('".$fname."', '".$lname."', '".$user_email."', '".$encrypted_pass."', '".$role."', '".$reg_by."')";
            
if ($link->query($sql2) === TRUE) {


	header('Location: user_mgt.php?sn=' .$sn . '&&msg3='.$msgs3);

} else {
    header('Location: user_mgt.php?sn=' .$sn . '&&msg2='.$msg2) . $conn->error;
    //echo "Error: " . $sql . "<br>" . $conn->error;
}

?>
<?php

require 'class/class.phpmailer.php';
$mail = new PHPMailer;
$mail->IsSMTP();								//Sets Mailer to send message using SMTP
$mail->Host = 'mail.littlefingers.ng';		//Sets the SMTP hosts of your Email hosting, this for Godaddy
$mail->Port = '465';								//Sets the default SMTP server port
$mail->SMTPAuth = true;							//Sets SMTP authentication. Utilizes the Username and Password variables
$mail->Username = 'info@littlefingers.ng';					//Sets SMTP username
$mail->Password = '2wsxzaQ1!6ytrew21!';					//Sets SMTP password
$mail->SMTPSecure = 'ssl';							//Sets connection prefix. Options are "", "ssl" or "tls"
$mail->From = 'info@littlefingers.ng';			//Sets the From email address for the message
$mail->FromName = 'LAVEMS Email Notification Service';			//Sets the From name of the message
$mail->AddAddress($user_email, $fname);		//Adds a "To" address
$mail->WordWrap = 50;							//Sets word wrapping on the body of the message to a given number of characters
$mail->IsHTML(true);							//Sets message type to HTML				
$mail->AddAttachment($file_name);     				//Adds an attachment from a path on the filesystem
$mail->Subject = 'LAVEMS - New USER Registration';			//Sets the Subject of the message
$mail->Body = '<b>Dear '.$fname.' '.$lname.',</b>,<br/><br/> A profile has successfully been created for you on the LAVEMS dashboard. This is a verification email. Kindly use the login details below to login:<br/><h4>Email: '.$user_email.'<br/>Temporary password: '.$user_pass.'</h4><br/> <br/> The IT Team';				//An HTML or plain text message body
if($mail->Send())								//Send an Email. Return true on success or false on error
{
   echo "";
    //$message = '<p>Your payment was successful and we have sent the purchased magazine to your mailbox. <a href="http://stir360.com.ng">Click Here to return to the Website</a></p>';
}
else{
    echo "";
}

?>