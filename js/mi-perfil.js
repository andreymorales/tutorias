var cmbProgram;

function _default()
 {
	menu(3);
	configureControls();
 }
 
function configureControls()
 {
	 configureProfilePanelBar();
	 showProgram();
 }
 
function configureProfilePanelBar()
 {
	$("#pnbrperfil").kendoPanelBar({
		expandMode: "single"
	});
 }

function showProgram()
 {
	var vcadenaJSON=xajax.call('showProgramList', {mode:'synchronous'});
	var vJSON=jQuery.parseJSON(vcadenaJSON);
	
	$("#cmbprogram").kendoDropDownList({
		dataTextField: "text",
		dataValueField: "value",
		dataSource: vJSON,
		index: 0
	});
	vcmbProgram=$("#cmbprogram").data("kendoDropDownList");
 }