<?php
$mxajax_core = dirname(dirname(__FILE__)) . "/tools/xajax_0.5_standard/xajax_core";
require_once($mxajax_core . "/xajax.inc.php");

$mxajax = new xajax();
$mxajax->configure("javascript URI", "tools/xajax_0.5_standard");
$mxajax->setCharEncoding('UTF-8');
 
 
function exit_()
 {
	$vresponse= new xajaxResponse();
	
	session_destroy();
	$vresponse->redirect("./");
	
	return $vresponse;
 }


$mxajax->register(XAJAX_FUNCTION, "exit_");
$mxajax->processRequest();
?>