<?php

require_once (dirname(dirname(__FILE__)) . "/controller/clspUser.php");
session_start();

$vuserIdentified=false;
$vmenu ='<ul class="nav nav-pills pull-right">';
$vmenu_content='<li id="vmenu-index"><a href="./">Inicio</a></li>';

if( isset($_SESSION['idUser']) ){
	$vuser= new clspUser();
	$vuser->idUser=trim($_SESSION['idUser']);
	$vuser->queryToDataBase();
	switch ( $vuser->userType->idUserType ){
		case 1:	$vmenu_content.='<li id="vmenu-mi-perfil"><a href="./frmmi-perfil.php">Mi Perfil</a></li>';
				$vmenu_content.='<li id="vmenu-mi-coordinador"><a href="./frmmi-coordinador.php">Mi Coordinador</a></li>';
				$vuserIdentified=true;
				break;
		/*case 2:	$vmenu_content.='<li id="vuser-update"><a href="./frmuser-record.php?vaction=2">Mis datos</a></li>
								 <li id="vquestionnaires" class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">Cuestionarios<b class="caret"></b></a>
									<ul class="dropdown-menu">
										<li><a href="./frmquestionnaire-topic.php?vtype=1">Contable</a></li>
										<li><a href="./frmquestionnaire-topic.php?vtype=2">Administrativo</a></li>
									</ul>
								 </li>
								 <li><a href="#" onClick="xajax_exit_();">Salir</a></li>';
				$vuserIdentified=true;
				break;*/
	}
	if ( $vuserIdentified ){
		$vmenu_content.='<li><a href="#" onClick="xajax_exit_();">Salir</a></li>';
	}
}
if ( ! $vuserIdentified ){
	$vmenu_content.='<li id="vmenu-login"><a href="./frmlogin.php">Ingresar</a></li>';	
}

$vmenu.=$vmenu_content;
$vmenu.='</ul>';
$vmenu.='<h3 class="text-muted">Logo UNACH</h3>';

echo $vmenu;

?>