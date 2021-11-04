<?php
$_SESSION["client_id"]=$admin_id;
$_SESSION["EID"]=$eid;
//$_SESSION["sn"]=$otn;
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
$dompdf->stream("'LAVEMS Proforma'.pdf", array("Attachment"=>0));
?>
