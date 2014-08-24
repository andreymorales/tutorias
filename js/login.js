function _default()
 {
	menu(2);
 }

function login()
 {
	if ( validateFormFields() )
	 {	xajax_login(xajax.getFormValues("vlogin"));	}
	else
	 {	alert("El logeo no puede ser realizado, no tiene los datos necesarios, complete los datos");	}
 }

function validateFormFields()
 {
	vstatus=true; 
	
	if ( Trim(xajax.$("txtuser").value) == "" )
	 {
		xajax.$("txtuser").focus();
		vstatus=false;
	 }
	else if ( Trim(xajax.$("txtpassword").value) == "" )
	 {
		xajax.$("txtpassword").focus();
		vstatus=false;
	 }
		
	return vstatus;
 }