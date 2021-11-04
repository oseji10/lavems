<?php
include_once "conn.php";
$client_id=$_GET['client_id'];
$invoice_no=$_GET['invoice_no'];
$f=$_GET['f'];
?>
<?php
$sql2 = "SELECT * FROM clients WHERE client_id='".$client_id."'";
$result2=mysqli_query($link,$sql2);
$row2=mysqli_fetch_assoc($result2);
$client_id2=$row2["client_id"];
$fullname=$row2["fullname"];
$client_email=$row2["client_email"];



$msg3="Successfully sent";
//$file_name="temp/$client_id$invoice_no.pdf";

//$file_name= 'downloads/Stir36020211stQuarter.pdf';
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
$mail->AddAddress($client_email, $fullname);		//Adds a "To" address
$mail->WordWrap = 50;							//Sets word wrapping on the body of the message to a given number of characters
$mail->IsHTML(true);							//Sets message type to HTML				
$mail->AddAttachment($f);     				//Adds an attachment from a path on the filesystem
$mail->Subject = 'LAVEMS - Customer Receipt';			//Sets the Subject of the message
$mail->Body = '<b>Dear '.$fullname.'</b>,<br/><br/> Your receipt has successufully been generated. See attached file<br/> <br/> The IT Team';				//An HTML or plain text message body
if($mail->Send())									//Send an Email. Return true on success or false on error
{
    header("Location: payment_mgt.php?client_id='.$client_id.'&&client_email='.$client_email.'&&msg='.$msg3.'");
    //$message = '<p>Your payment was successful and we have sent the purchased magazine to your mailbox. <a href="http://stir360.com.ng">Click Here to return to the Website</a></p>';
}
unlink($f);
//echo $message;
?>