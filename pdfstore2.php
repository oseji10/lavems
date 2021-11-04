<?php
include_once "conn.php";
$client_id=$_GET['client_id'];
$invoice_no=$_GET['invoice_no'];

$sql2 = "SELECT * FROM clients WHERE client_id='".$client_id."'";
$result2=mysqli_query($link,$sql2);
$row2=mysqli_fetch_assoc($result2);
$client_id2=$row2["client_id"];
$fullname=$row2["fullname"];
$client_email=$row2["client_email"];

require_once 'dompdf/autoload.inc.php';

ob_start();

include "receipt_print.php";

$html = ob_get_clean();
ob_end_clean();

use Dompdf\Dompdf;

//generate some PDFs!
$dompdf = new DOMPDF();  //if you use namespaces you may use new \DOMPDF()
$dompdf->loadHtml($html);
$dompdf->setPaper('A4', 'portrait');
$dompdf->render();


//$dompdf->stream("'LAVEMS Proforma'.pdf", array("Attachment"=>0));
$output = $dompdf->output();


//$fileName = '$client_id.pdf';
$fileName = "$client_id2$invoice_no.pdf";
$temp="temp/";
$com="{$temp}{$fileName}";

$header=header('Location: send_email2.php?client_id='.$client_id.'&&invoice_no='.$invoice_no.'&&f='.$com  );
file_put_contents('temp/'.$fileName, $output, $header);
$dompdf->stream("");
  
exit();

?>
