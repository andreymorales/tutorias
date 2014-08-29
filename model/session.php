<?php
	session_start();
	if( ! isset($_SESSION['idUser']) )
  	 {
	 	//Terminar la sesión iniciada
	 	session_destroy();
		//Terminar el script
		die('<table style="width:100%; height:100%; text-align:center; background-color:#ff;">
				<tr>
					<td style="text-align:center; font-family:Verdana; font-size:11px;">
					<p style="font-weight:bold;">ACCESO DENEGADO.</p>
					<p>PARA INGRESAR A ESTA PÁGINA, DEBES DE PROPORCIONAR UN<br>
						<span style="font-weight:bold; font-style:italic;">NOMBRE DE USUARIO</span> Y 
						<span style="font-weight:bold; font-style:italic;">CONTRASEÑA</span> VÁLIDOS.
					</p>
					<p><a href="frmlogin.php" target="_parent">REGISTRO.</a></p>
					</td>
          		</tr>
			 </table>');
	 }
	else
	 {
	 	//Verificar si las variables de sesión no tienen datos
	 	if ( strcmp(trim($_SESSION['idUser']),"")==0 )
	 	 {
		 	//Terminar la sesión iniciada
    		session_destroy();
			//Terminar el script
    		die('<table style="width:100%; height:100%; text-align:center; background-color:#ff;">
					<tr>
						<td style="text-align:center; font-family:Verdana; font-size:11px;">
						<p style="font-weight:bold;">ACCESO DENEGADO.</p>
						<p>PARA INGRESAR A ESTA PÁGINA, DEBES DE PROPORCIONAR UN<br>
							<span style="font-weight:bold; font-style:italic;">NOMBRE DE USUARIO</span> Y 
							<span style="font-weight:bold; font-style:italic;">CONTRASEÑA</span> VÁLIDOS.
						</p>
						<p><a href="frmlogin.php" target="_parent">REGISTRO.</a></p>
						</td>
    	      		</tr>
				 </table>');
		 }
	 }
?>