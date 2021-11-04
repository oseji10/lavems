<?php
// Settings
include_once "conn.php";
$client_id=$_GET['client_id'];
$invoice_no=$_GET['invoice_no'];
$sql2 = "SELECT * FROM clients WHERE client_id='".$client_id."'";
$result2=mysqli_query($link,$sql2);
$row2=mysqli_fetch_assoc($result2);
$client_id2=$row2["client_id"];
$fullname=$row2["fullname"];
$client_email=$row2["client_email"];
?>
<?php
$file_name= 'https://littlefingers.ng/view_invoice.php?client_id='.$client_id.'&&invoice_no='.$invoice_no.'';
require 'class/class.phpmailer.php';
$mail = new PHPMailer;
$mail->IsSMTP();								//Sets Mailer to send message using SMTP
$mail->Host = 'mail.littlefingers.ng';		//Sets the SMTP hosts of your Email hosting, this for Godaddy
$mail->Port = '465';								//Sets the default SMTP server port
$mail->SMTPAuth = true;							//Sets SMTP authentication. Utilizes the Username and Password variables
$mail->Username = 'invoice@littlefingers.ng';					//Sets SMTP username
$mail->Password = '2wsxzaQ1!6ytrew21!';					//Sets SMTP password
$mail->SMTPSecure = 'ssl';							//Sets connection prefix. Options are "", "ssl" or "tls"
$mail->From = 'invoice@littlefingers.ng';			//Sets the From email address for the message
$mail->FromName = 'Little Fingers Inc. - Email Notification Service';			//Sets the From name of the message
$mail->AddAddress($client_email, $fullname);		//Adds a "To" address
$mail->WordWrap = 50;							//Sets word wrapping on the body of the message to a given number of characters
$mail->IsHTML(true);							//Sets message type to HTML				
$mail->AddAttachment($file_name);     				//Adds an attachment from a path on the filesystem
$mail->Subject = 'GENERATED INVOICE ';			//Sets the Subject of the message
$mail->Body = 
'Hi '.$fullname.',<br/><br/> 

Kindly click the button below to download your invoice:
<br/><br/> 

<br/><br/> 

<a href="https://littlefingers.ng/view_invoice.php?client_id='.$client_id.'&&invoice_no='.$invoice_no.'"><input type="button" style="background-color: #4CAF50; /* Green */
border: none;
color: white;
padding: 15px 32px;
text-align: center;
text-decoration: none;
display: inline-block;
font-size: 16px;" value="Download Invoice"/></a>
<br/><br/> 

<br/><br/> 
IT Team
Little Fingers.';
//'Dear '.$name2.',<br/><br/> You just purchased an e-copy of our magazine. Kindly find your file below:<br/>';				//An HTML or plain text message body
if($mail->Send())								//Send an Email. Return true on success or false on error
{
    header('Location: https://littlefingers.ng/invoice_mgt.php');
    //$message = '<p>Your payment was successful and we have sent the purchased magazine to your mailbox. <a href="http://stir360.com.ng">Click Here to return to the Website</a></p>';
}
link($file_name);
echo $message;
?>