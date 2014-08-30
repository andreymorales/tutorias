<?php
	require_once("model/session.php");
	require_once("model/mi-perfil-DGIP.php");
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Tutorias-UNACH.</title>
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
		<!-- Panel Bar Kendo -->
		<script src="./tools/kendoui-professional-2014.2.716/src/js/kendo.panelbar.js"></script>
		<!-- Personalizado -->
		<link href="./css/styles.css" rel="stylesheet" type="text/css" media="screen" />
		<link href="./css/header.css" rel="stylesheet" type="text/css" media="screen" />
		<link href="./css/mi-perfil-DGIP.css" rel="stylesheet" type="text/css" media="screen" />
		<link href="./css/footer.css" rel="stylesheet" type="text/css" media="screen" />
		<script type="text/javascript" src="./js/functions.js"></script>
		<script type="text/javascript" src="./js/menu.js"></script>
		<script type="text/javascript" src="./js/mi-perfil-DGIP.js"></script>
        
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
                    	<span class="textCaption-1">Mi perfil</span>
					</div>
					<div id="vcontainerSeccion-2">
						<div id="vcontainerSeccionControls">
							<form id="vperfil" name="vperfil" method="post" onSubmit="return false;" style="padding:0; margin:0">
							<ul id="pnbrperfil">
								<li class="k-state-active">
									<span class="k-link k-state-selected"><b>Datos Personales</b></span>
                	               	<table>
										<tr>
											<td>&nbsp;</td>
										</tr>
										<tr>
											<td>
											<table>
												<tr>
                                                	<td style="width:16%;" class="textCaption-2">
	                                                <label for="txtname">Nombre:</label>
    	                                            </td>
        	                                        <td style="width:84%;">
            	                                    <input type="text" id="txtname" name="txtname" maxlength="30" style="width:95%;" class="form-control" />
                	                                </td>
												</tr>
											</table>
											</td>
										</tr>
										<tr>
											<td>
											<table>
												<tr>
        	                                        <td style="width:16%;" class="textCaption-2">
            	                                    <label for="txtfirstName">Apellido Paterno:</label>
                	                                </td>
                    	                            <td style="width:84%;">
                        	                        <input type="text" id="txtfirstName" name="txtfirstName" maxlength="30" style="width:95%;" class="form-control" />
                            	                    </td>
												</tr>
											</table>
											</td>
										</tr>
										<tr>
											<td>
											<table>
												<tr>
                    	                            <td style="width:16%;" class="textCaption-2">
                        	                        <label for="txtlastName">Apellido Materno:</label>
                            	                    </td>
                                	                <td style="width:84%;">
                                    	            <input type="text" id="txtlastName" name="txtlastName" maxlength="30" style="width:95%;" class="form-control" />
                                        	        </td>
												</tr>
											</table>
											</td>
										</tr>
										<tr>
											<td>&nbsp;</td>
										</tr>
									</table>
								</li>
								<li>
									<span><b>Datos del Centro de Trabajo</b></span>
									<div>
									<table>
										<tr>
											<td>&nbsp;</td>
										</tr>
										<tr>
											<td>
											<table>
												<tr>
	                                                <td style="width:16%;" class="textCaption-2">
    	                                            <label for="txtjob">Puesto:</label>
        	                                        </td>
            	                                    <td style="width:84%;">
                	                                <input type="text" id="txtjob" name="txtjob" maxlength="80" style="width:95%;" class="form-control" />
                    	                            </td>
												</tr>
											</table>
											</td>
										</tr>
										<tr>
											<td>&nbsp;</td>
										</tr>
									</table>
									</div>
								</li>
								<li>
									<span><b>Datos de Cuenta</b></span>
									<div>
									<table>
										<tr>
											<td>&nbsp;</td>
										</tr>
										<tr>
											<td>
											<table>
												<tr>
                                	                <td style="width:16%;" class="textCaption-2">
                                    	            <label for="txtemail">Correo Electrónico:</label>
                                        	        </td>
	                                                <td style="width:84%;">
    	                                            <input type="text" id="txtemail" name="txtemail" maxlength="50" style="width:95%;" class="form-control" />
        	                                        </td>
												</tr>
											</table>
											</td>
										</tr>
										<tr>
											<td>&nbsp;</td>
										</tr>
									</table>
									</div>
								</li>
							</ul>
							</form>
						</div>
						<div id="vcontainerSeccionActions">
							<table>
								<tr>
									<td style="width:95%;">
									<button id="cmdpassword" class="k-button" type="button"><span class="k-icon k-i-lock"></span></button>
									</td>
									<td style="width:5%; text-align:right">
                                    <button id="cmdsave" class="k-button"><span class="k-icon k-insert"></span></button>
									</td>
								</tr>
							</table>
						</div>
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