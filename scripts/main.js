
activaTab('consultas');

// window.onload = function (){

function activaTab(tab){
	$(document).ready(function(){
	    $('.nav-tabs a[href="#' + tab + '"]').tab('show');
	}); 
};
	
// }

