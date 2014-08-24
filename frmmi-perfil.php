<?php
	require_once("model/session.php");
	require_once("model/mi-perfil.php");
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Tutorias-UNACH.</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        
		<!-- Bootstrap -->
		<link href="./css/bootstrap.min.css" rel="stylesheet">
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		<script src="./js/jquery-1.11.1.js"></script>
		<script src="./js/bootstrap.min.js"></script>
		<!-- Comunes Kendo -->
		<link href="./tools/kendoui-professional-2014.2.716/src/styles/web/kendo.common.css" rel="stylesheet"/>
		<link href="./tools/kendoui-professional-2014.2.716/src/styles/web/kendo.bootstrap.css" rel="stylesheet"/>
		<script src="./tools/kendoui-professional-2014.2.716/src/js/kendo.core.js"></script>
        
		<script src="./tools/kendoui-professional-2014.2.716/src/js/kendo.data.js"></script>
		<script src="./tools/kendoui-professional-2014.2.716/src/js/kendo.popup.js"></script>
		<script src="./tools/kendoui-professional-2014.2.716/src/js/kendo.list.js"></script>
		<script src="./tools/kendoui-professional-2014.2.716/src/js/kendo.fx.js"></script>
		<script src="./tools/kendoui-professional-2014.2.716/src/js/kendo.userevents.js"></script>
		<script src="./tools/kendoui-professional-2014.2.716/src/js/kendo.draganddrop.js"></script>
		<script src="./tools/kendoui-professional-2014.2.716/src/js/kendo.mobile.scroller.js"></script>
		<!-- Panel Bar Kendo -->
		<script src="./tools/kendoui-professional-2014.2.716/src/js/kendo.panelbar.js"></script>
		<!-- DropDownList -->
		<script src="./tools/kendoui-professional-2014.2.716/src/js/kendo.dropdownlist.js"></script>
		<!-- Personalizado -->
		<link href="./css/styles.css" rel="stylesheet" type="text/css" media="screen" />
		<link href="./css/header.css" rel="stylesheet" type="text/css" media="screen" />
		<link href="./css/mi-perfil.css" rel="stylesheet" type="text/css" media="screen" />
		<link href="./css/footer.css" rel="stylesheet" type="text/css" media="screen" />
		<script type="text/javascript" src="./js/functions.js"></script>
		<script type="text/javascript" src="./js/menu.js"></script>
		<script type="text/javascript" src="./js/mi-perfil.js"></script>
        
		<?php $mxajax->printJavascript(); ?>
	</head>
	<body onLoad="_default();">
		<!-- Wrap -->
    	<div id="vwrap">
			<div class="container">
				<!-- Header -->
				<div id="vheader">
                	<!-- Menu -->
					<div id="vmenu" class="masthead"></div>
					<!-- /. Menu -->
				</div>
                <!-- /. Header -->
				<!-- Container -->
                <div id="vcontainer">
					<div id="vcontainerSeccion-1">
                    	<span class="textCaption-2">Mi perfil</span>
					</div>
					<div id="vcontainerSeccion-2">
						<form id="vperfil" name="vperfil" method="post" onSubmit="return false;" style="padding:0; margin:0">
						<ul id="pnbrperfil">
							<li class="k-state-active">
								<span class="k-link k-state-selected"><b>Datos Personales</b></span>
                               	<table>
									<tr>
										<td style="width:12%;">
										<label for="cmbprogram" class="textCaption-3">Programa:</label>
										</td>
										<td style="width:88%;">
										<select id="cmbprogram" name="cmbprogram" style="width:auto"></select>
										</td>
									</tr>
								</table>
							</li>
							<li>
								<span><b>Datos del Centro de Trabajo</b></span>
								<div>
                                controles
								</div>
							</li>
							<li>
								<span><b>Datos de Cuenta</b></span>
								<div>
                                controles
								</div>
							</li>
						</ul>
						</form>
					</div>
				</div>
                <!-- /. Container -->
			</div>
        </div>
        <!-- /. Wrap -->
		<!-- Footer -->
		<div id="vfooter">
			<div class="container">
				<div id="vfooterSeccion-1">
					<p style="text-align:left">
						Universidad Autónoma de Chiapas<br />
						"Dirección"
					</p>
				</div>
				<div id="vfooterSeccion-2">
					<p style="text-align:right">Tuxtla Gutiérrez, Chiapas, 2014</p>
				</div>
			</div>
		</div>
		<!-- /. Footer -->
	</body>
</html>