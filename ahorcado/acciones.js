// JavaScript Document
$(document).ready(function(e){
$('#btnenviar').on('click',function(){
obtenerpalabras ($('#txtcoleccion').val(), $('#txtcantidad').val());

}); //elek btnenviar
function obtenerpalabras(coleccion,cuantas) {
	var xajax = $.post("http://192.168.4.9/ahorcado/ahorcado/obtenerpalabras.php",{
		cual: coleccion, cuantas: cuantas},function(){
			//se ejecuta lo que hay aqui si se pudo enviar la informacion
			alert("informacion enviada");
			}) 
			.done(function(datos){
				alert(datos); //se ejecuta cuando se obtiene una respuesta del servidor
			})
				.fail(function(){
					alert("error");
				});
				
					
				}//obtenerpalabras
					 

});//ready
