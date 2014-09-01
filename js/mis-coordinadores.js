var cmbHeadquarter;
var cmbLevel;
var cmbProgram;
var vidCoordinador=1;

function _default()
 {
	menu(4);
	configureControls();
 }
 
function configureControls()
 {
	 showHeadquarter();
	 showLevel();
	 showProgram();
	 setCoordinatorList();
 }

function showHeadquarter()
 {
	var vcadenaJSON=xajax.call('showHeadquarterList', {mode:'synchronous'});
	var vJSON=jQuery.parseJSON(vcadenaJSON);
	
	$("#cmbheadquarter").kendoDropDownList({
		dataTextField: "text",
		dataValueField: "value",
		dataSource: vJSON,
		index: 0
	});
	vcmbHeadquarter=$("#cmbheadquarter").data("kendoDropDownList");
 }

function showLevel()
 {
	var vcadenaJSON=xajax.call('showLevelList', {mode:'synchronous'});
	var vJSON=jQuery.parseJSON(vcadenaJSON);
	
	$("#cmblevel").kendoDropDownList({
		dataTextField: "text",
		dataValueField: "value",
		dataSource: vJSON,
		index: 0
	});
	vcmbHeadquarter=$("#cmblevel").data("kendoDropDownList");
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

function setCoordinatorList()
 {
	$("#grdcoordinators").kendoGrid({
		dataSource: {	pageSize: 5	},
		scrollable: true,
		sortable: true,
		pageable: {
					refresh : true,
					pageSizes : false,
					messages: {
								display: "{0} - {1} de {2} registros",
								page: "Página",
								of: "de {0}",
								itemsPerPage: "registros por página",
								first: "Ir a la primera página",
								previous: "Ir a la página anterior",
								next: "Ir a la página siguiente",
								last: "Ir a la última página",
								refresh: "Actualizar"
				 			  }
				  },
		columns: [{
					field: "vempty",
					width: "5%",
					attributes:{
								style: "text-align:center"
				  			   }
				  },
				  {
					field: "vcoordinator",
					width: "45%",
					attributes:{
								style: "text-align:left"
				  			   }
				  },
				  {
					field: "vprogram",
					width: "50%",
					attributes:{
								style: "text-align:left"
				  			   }
				  }]
	});
 }

function mostrarRegistroCoordinador(vtipoAccion)
 {	
 	if( vtipoAccion==1 ){	
		vidCoordinador=0;
	}
	location.href="./frmmis-coordinadores-registro.php?vidCoordinador=" + vidCoordinador;
 }

function mostrarCoordinador()
 {	
	location.href="./frmmis-coordinadores-ver.php?vidCoordinador=" + vidCoordinador;
 }