function _default()
 {
	menu(3);
	configureControls();
 }
 
function configureControls()
 {
	 configureProfilePanelBar();
 }
 
function configureProfilePanelBar()
 {
	$("#pnbrperfil").kendoPanelBar({
		expandMode: "single"
	});
 }