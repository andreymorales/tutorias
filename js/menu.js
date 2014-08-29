function menu(vtype)
 {
	$.ajax({
        type: "POST",
        url: "model/menu.php",
        success: function( vresponse ){
            $("#vmenu").html(vresponse);
			switch (vtype){
				case 1:	$("#vmenu-index").attr('class', 'active');
						break;
				case 2:	$("#vmenu-login").attr('class', 'active');
						break;
				case 3:	$("#vmenu-mi-perfil-DGIP").attr('class', 'active');
						break;
				case 4:	$("#vmenu-mis-coordinadores").attr('class', 'active');
						break;
				/*case 5:	$("#vuser-query").attr('class', 'active');
						break;
				case 6:	$("#vquestionnaires").attr('class', 'dropdown active');
						break;*/
			}
		}
	});
 }