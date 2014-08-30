<?php
	require_once("model/session.php");
	require_once("model/mis-coordinadores.php");
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
		<script src="./tools/kendoui-professional-2014.2.716/src/js/kendo.data.js"></script>
		<script src="./tools/kendoui-professional-2014.2.716/src/js/kendo.popup.js"></script>
		<script src="./tools/kendoui-professional-2014.2.716/src/js/kendo.list.js"></script>
		<script src="./tools/kendoui-professional-2014.2.716/src/js/kendo.fx.js"></script>
		<script src="./tools/kendoui-professional-2014.2.716/src/js/kendo.userevents.js"></script>
		<script src="./tools/kendoui-professional-2014.2.716/src/js/kendo.draganddrop.js"></script>
		<script src="./tools/kendoui-professional-2014.2.716/src/js/kendo.mobile.scroller.js"></script>
        <script src="./tools/kendoui-professional-2014.2.716/js/cultures/kendo.culture.es-MX.min.js"></script>
		<!-- DropDownList -->
		<script src="./tools/kendoui-professional-2014.2.716/src/js/kendo.dropdownlist.js"></script>
		<!-- Grid -->
        <script src="./tools/kendoui-professional-2014.2.716/src/js/kendo.columnsorter.js"></script>
		<script src="./tools/kendoui-professional-2014.2.716/src/js/kendo.pager.js"></script>
		<script src="./tools/kendoui-professional-2014.2.716/src/js/kendo.grid.js"></script>
		<!-- Personalizado -->
		<link href="./css/styles.css" rel="stylesheet" type="text/css" media="screen" />
		<link href="./css/header.css" rel="stylesheet" type="text/css" media="screen" />
		<link href="./css/mis-coordinadores.css" rel="stylesheet" type="text/css" media="screen" />
		<link href="./css/footer.css" rel="stylesheet" type="text/css" media="screen" />
		<script type="text/javascript" src="./js/functions.js"></script>
		<script type="text/javascript" src="./js/menu.js"></script>
		<script type="text/javascript" src="./js/mis-coordinadores.js"></script>
        
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
                    	<span class="textCaption-1">Mis Coordinadores</span>
					</div>
					<div id="vcontainerSeccion-2">
						<div id="vcontainerSeccionControls">
							<div class="panel panel-default">
								<div class="panel-body">
									<table>
										<tr>
											<td>
											<table>
												<tr>
                                                	<td style="width:69%">
                                                    <table>
                                                    	<tr>
                                                			<td style="width:13%;" class="textCaption-2">
			                                                <label for="cmbheadquarter">Sede:</label>
    			                                            </td>
        	    		                                    <td style="width:87%;">
            	        		                            <select id="cmbheadquarter" name="cmbheadquarter" style="width:100%;"></select>
                	            		                    </td>
														</tr>
													</table>
													</td>
													<td style="width:31%">
                                                    <table>
                                                    	<tr>
                                                			<td style="width:25%;" class="textCaption-2">
			                                                <label for="cmblevel">Nivel:</label>
    			                                            </td>
        	    		                                    <td style="width:75%;">
            	        		                            <select id="cmblevel" name="cmblevel" style="width:100%;"></select>
                	            		                    </td>
														</tr>
													</table>
													</td>
												</tr>
											</table>
											</td>
										</tr>
										<tr>
											<td>
                                            <table>
												<tr>
                                	                <td style="width:9%;" class="textCaption-2">
                                    	            <label for="cmbprogram">Programa:</label>
                                        	        </td>
	                                                <td style="width:91%;">
    	                                            <select id="cmbprogram" name="cmbprogram" style="width:100%;"></select>
        	                                        </td>
												</tr>
											</table>
											</td>
										</tr>
										<tr>
											<td>
                                            <table>
												<tr>
													<td style="width:50%; text-align:right">
													<button id="cmdcancel" class="k-button" type="button"><span class="k-icon k-i-cancel"></span></button>
													</td>
													<td style="width:50%;">
													<button id="cmdfilter" class="k-button"><span class="k-icon k-i-funnel"></span></button>
													</td>
												</tr>
											</table>
											</td>
										</tr>
									</table>
								</div>
							</div>
                            <div class="panel panel-default">
								<div class="panel-heading">
									<table>
										<tr>
											<td style="width:5%;">
											<button id="cmdnew" class="k-button" type="button"><span class="k-icon k-i-plus"></span></button>
											</td>
											<td style="width:5%;">
											<button id="cmdupdate" class="k-button" type="button"><span class="k-icon k-i-pencil"></span></button>
											</td>
											<td style="width:5%;">
											<button id="cmddelete" class="k-button" type="button"><span class="k-icon k-i-cancel"></span></button>
											</td>
											<td style="width:85%; text-align:right">
											<button id="cmdfilter" class="k-button"><span class="k-icon k-i-search"></span></button>
											</td>
										</tr>
									</table>
								</div>
								<div class="panel-body">
									<table id="grdcoordinators">
										<thead>
											<tr>
												<th data-field="vempty" style="text-align:center; font-weight:bold;">&nbsp;</th>
												<th data-field="vcoordinator" style="text-align:center; font-weight:bold;">Coordinador</th>
												<th data-field="vprogram" style="text-align:center; font-weight:bold;">Programa</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td><input name="idCoordinator" type="radio" /></td>
												<td>Coordinador 1</td>
												<td>Programa 1</td>																												
											</tr>
											<tr>
												<td><input name="idCoordinator" type="radio" /></td>
												<td>Coordinador 1</td>
												<td>Programa 2</td>																												
											</tr>
											<tr>
												<td><input name="idCoordinator" type="radio" /></td>
												<td>Coordinador 2</td>
												<td>Programa 3</td>																												
											</tr>
											<tr>
												<td><input name="idCoordinator" type="radio" /></td>
												<td>Coordinador 3</td>
												<td>Programa 4</td>																												
											</tr>
											<tr>
												<td><input name="idCoordinator" type="radio" /></td>
												<td>Coordinador 4</td>
												<td>Programa 5</td>																												
											</tr>
										</tbody>
									</table>
								</div>
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