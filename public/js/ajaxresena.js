$("#registro").click(function(){
	var dato = $("#titulo").val();
	var dato2 = $("#genero").val();
	var dato3 = $("#imagen").val();
	var dato4 = $("#texto").val();
	var dato5 = $("#iduser").val();

    $.ajax({
    	url: route,
    	headers: {"X-CSRF-TOKEN",token},
    	type:"POST",
    	datatype: "json",
    	data:{}
    })
});