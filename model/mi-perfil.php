<?php
$mxajax_core = dirname(dirname(__FILE__)) . "/tools/xajax_0.5_standard/xajax_core";
require_once($mxajax_core . "/xajax.inc.php");

$mxajax = new xajax();
$mxajax->configure("javascript URI", "tools/xajax_0.5_standard");
$mxajax->setCharEncoding('UTF-8');
/*
require_once (dirname(dirname(__FILE__)) . "/controller/clspUser.php");

*/

function showProgramList()
 {
	$vresponse= new xajaxResponse();
	
	/*$vquestionnaires= new clscQuestionnaire();
	$vquestionnaires->queryToDataBase("");*/
	
	$vJSON='[{"text":"--Seleccionar--", "value":"0"}';
	/*for ($vi=0; $vi<$vquestionnaires->getTotal(); $vi++)
	 {	$vJSON.=', {"text":"' . $vquestionnaires->questionnaires[$vi]->questionnaire . '", "value":"' . $vquestionnaires->questionnaires[$vi]->idQuestionnaire . '"}';	}*/
	$vJSON.="]";
	$vresponse->setReturnValue($vJSON);
	
	//unset($vquestionnaires, $vJSON, $vi);
	return $vresponse;
 }
/*
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
				  {	$vresponse->redirect("./frmperfil.php");	}
				 else if( $vuser->userType->idUserType==2 )
				  {	$vresponse->redirect("./frmquestionnaire-topic.php?vtype=1");	}
				 break;
	 }
	unset($vloginForm, $vuser);
	
	return $vresponse;
 }
*/
function exit_()
 {
	$vresponse= new xajaxResponse();
	
	session_destroy();
	$vresponse->redirect("./");
	
	return $vresponse;
 }

$mxajax->register(XAJAX_FUNCTION, "showProgramList");
$mxajax->register(XAJAX_FUNCTION, "exit_");
$mxajax->processRequest();
?>