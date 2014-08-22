$(document).ready(function(){

		$("#formNew").validate({
			rules: {
	
				txtNombre: {
					required: true,
					minlength: 2
				},
	
				txtCorreo: {
					required: true,
					email: true
				},

				txtTelefono: {
				    required: true,
				    digits: true,
				    minlength: 10,
				    maxlength: 10
 				 },
				txtDireccion: {
				    required: true,
				    minlength: 5,
				   
 				 },

			},
			messages: {

				txtNombre: {
					required: "Porfavor introduca el nombre",
					minlength: "Minimo tiene que tener 2 caracteres"
				},

				txtCorreo: {
					required: "Porfavor introduca el Email",
					email: "Introdusca un correo Valido"
				},


				txtTelefono: {
				    required:"Porfavor introduca el Telefono",
				    digits: "Inserte solo numeros",
				    minlength: "inserte 10 caracteres",
				    maxlength: "Excede el maximo"
 				 },

 				 txtDireccion: {
				    required:"Porfavor introduca la Direccion",
				    minlength: "La direccion es muy corta",
				   
 				 }
		
			}
		});
		$("#formEdit").validate({
			rules: {
	
				txtNombre: {
					required: true,
					minlength: 2
				},
	
				txtCorreo: {
					required: true,
					email: true
				},

				txtTelefono: {
				    required: true,
				    digits: true,
				    minlength: 10,
				    maxlength: 10
 				 },
				txtDireccion: {
				    required: true,
				    minlength: 5,
				   
 				 },

			},
			messages: {

				txtNombre: {
					required: "Porfavor introduca el nombre",
					minlength: "Minimo tiene que tener 2 caracteres"
				},

				txtCorreo: {
					required: "Porfavor introduca el Email",
					email: "Introdusca un correo Valido"
				},


				txtTelefono: {
				    required:"Porfavor introduca el Telefono",
				    digits: "Inserte solo numeros",
				    minlength: "inserte 10 caracteres",
				    maxlength: "Excede el maximo"
 				 },

 				 txtDireccion: {
				    required:"Porfavor introduca la Direccion",
				    minlength: "La direccion es muy corta",
				   
 				 }
		
			}
		});

}); 



// window.onload = function (){
function confirma(){
	var r = confirm("Esta seguro que desea eliminar este estudiante?");
	if (!r) {
   		return false;
	} else {
    	return true;
	}
}
 
function redir(){

	setInterval(function(){ window.location="index.php"}, 1000);
}

function activaTab(tab){
	$(document).ready(function(){
	    $('.nav-tabs a[href="#' + tab + '"]').tab('show');
	}); 
};
	
// }

