<?php
	require_once("model/login.php");
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
		<!-- Personalizado -->
		<link href="./css/styles.css" rel="stylesheet" type="text/css" media="screen" />
		<link href="./css/header.css" rel="stylesheet" type="text/css" media="screen" />
		<link href="./css/login.css" rel="stylesheet" type="text/css" media="screen" />
		<link href="./css/footer.css" rel="stylesheet" type="text/css" media="screen" />
		<script type="text/javascript" src="./js/functions.js"></script>
		<script type="text/javascript" src="./js/menu.js"></script>
		<script type="text/javascript" src="./js/login.js"></script>
        
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
					<div id="vlogin">
						<div id="vloginBox" class="thumbnail">
							<div id="vimageLogin">
								<img src="./images/login/login.png" alt="Login" title="Login" class="img-responsive center-block">
							</div>
							<div id="vcaptionLogin">
								<p class="textCaption-1">Para ingresar, es necesario proporcionar los siguientes datos:</p>
							</div>
							<div>
								<form id="vlogin" name="vlogin" method="post" onSubmit="return false;" style="padding:0; margin:0">
								<table>
									<tr>
										<td style="width:10%;">&nbsp;</td>
										<td style="width:80%;">
										<input type="text" id="txtuser" name="txtuser" maxlength="20" style="width:100%; height:40px;" placeholder="Correo Electrónico" class="form-control" />
										</td>
										<td style="width:10%;">&nbsp;</td>
									</tr>
									<tr>
										<td style="width:10%;">&nbsp;</td>
										<td style="width:80%; height:20px;">
										<input type="password" id="txtpassword" name="txtpassword" maxlength="20" style="width:100%; height:40px;" placeholder="Contraseña" onkeypress="return setEntriesType(event, 'letter-numeric');" class="form-control" />
										<td style="width:10%;">&nbsp;</td>
										</td>
									</tr>
                                    <tr>
										<td colspan="3">&nbsp;</td>
									</tr>
									<tr>
										<td style="width:10%;">&nbsp;</td>
										<td style="width:80%;"><button type="button" style="width:100%" class="btn btn-primary btn-large" onClick="login();">Iniciar sesión</button>
										</td>
										<td style="width:10%;">&nbsp;</td>
									</tr>
									<tr>
										<td colspan="3">&nbsp;</td>
									</tr>
                                    <tr>
										<td style="width:10%;">&nbsp;</td>
										<td style="width:80%; text-align:right;"><a href="#">Recuperar Contraseña</a></td>
										<td style="width:10%;">&nbsp;</td>
									</tr>
								</table>
								</form>
							</div>
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