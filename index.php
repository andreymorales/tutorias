<?php
	if ( ! isset($_SESSION['idUser']) )
	 {	session_start();	}
	require_once("model/index.php");
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
		<!-- Personalizado -->
		<link href="./css/styles.css" rel="stylesheet" type="text/css" media="screen" />
		<link href="./css/header.css" rel="stylesheet" type="text/css" media="screen" />
		<link href="./css/index.css" rel="stylesheet" type="text/css" media="screen" />
		<link href="./css/footer.css" rel="stylesheet" type="text/css" media="screen" />
		<script type="text/javascript" src="./js/menu.js"></script>
		<script type="text/javascript" src="./js/index.js"></script>
        
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
					Datos de Bienvenida
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