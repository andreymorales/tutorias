<?php
$mxajax_core = dirname(dirname(__FILE__)) . "/tools/xajax_0.5_standard/xajax_core";
require_once($mxajax_core . "/xajax.inc.php");

$mxajax = new xajax();
$mxajax->configure("javascript URI", "tools/xajax_0.5_standard");
$mxajax->setCharEncoding('UTF-8');

require_once (dirname(dirname(__FILE__)) . "/controller/clspUser.php");


function login($vloginForm)
 {
	$vresponse= new xajaxResponse();
	$vuser= new clspUser();
	$vuser->idUser=trim($vloginForm["txtuser"]);
	
	switch($vuser->verifyPasswordToDataBase($vloginForm["txtpassword"]))
	 {
		case -2: $vresponse->alert("Ocurrió un error al tratar de logearse, intente de nuevo");
				 break;
		case -1: $vresponse->alert("El usuario se encuentra inactivo, póngase en contacto con el administrador del portal");
				 break;
		case 0:  $vresponse->alert("No existen usuarios registrados con el nombre y/o contraseña proporcionado");
				 break;
		case 1:  session_start();
				 $vuser->queryToDataBase();
				 $_SESSION['idUser']=$vuser->idUser;
				 if ( $vuser->userType->idUserType==1 )
				  {	$vresponse->redirect("./frmmi-perfil-DGIP.php");	}
				 else if( $vuser->userType->idUserType==2 )
				  {	$vresponse->redirect("./frm.php?vtype=1");	}
				 break;
	 }
	unset($vloginForm, $vuser);
	
	return $vresponse;
 }

$mxajax->register(XAJAX_FUNCTION,"login");
$mxajax->processRequest();
?>