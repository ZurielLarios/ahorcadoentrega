// JavaScript Document
$(document).ready(function(){
	var abecedario= ['A','B','C','D','E','F','G','H','I','J','K','L','M','N','Ñ','O','P','Q','R','S','T','U','V','W','X','Y','Z'];
	var encontradas= 0;
	var oportunidades= 0;
	var palabraoculta = "";
	var palabraactual = "";
	var temporal= "";
	var posicionactual= 0;
	var letraactual= "";
	var palabras=[];
	
	var colecciones=[];
	$('#btnseleccionar').on('click',function(){
		alert($('#colecciones').val());
		$.when(obtenerpalabras($('#colecciones').val(), $('#txtdificultad').val())).then( function exito(datos){
			
			alert (datos);
			palabras=JSON.parse(datos);
		}, function error(e){
			alert ('error' + e);
		}		
		);
    });
	
	function obtenerpalabras(coleccion, cuantas) {
return $.post("http://" + $('#txtIp').val() + "/ahorcado/obtenerpalabras.php",{cual:coleccion, cuantas:cuantas});
	}
	
	

	$("#btnBuscar").on('click',function(){
	
	$('#cargando').show();
	$.when(obtenercoleccion($('#txtIp').val())).then(function successHandler(datos){
		var arreglo = JSON.parse(datos);
		$('#colecciones').empty();
		$('#seleccion-opciones').hide();
		
for(var y=0; y<arreglo.length; y++)
{
	var option= new Option(arreglo[y].coleccion,arreglo[y].coleccion);
	$('#colecciones').append(option);
	$('#colecciones').trigger("change");
	}
		$('#cargando').hide();
		$('#seleccion-opciones').hide();
	$('#seleccion-opciones').show();
	//$("#btnBuscar").css(none);
	}, function errorHandler(){
		
				$('#cargando').hide();
				$('#colecciones').empty();
		alert("Error");
		
	});
	return false;
}); //elek btnbuscar
	
	function inicializarvariables(){
encontradas= 0;
	oportunidades=6;
	temporal="";
	posicionactual= 0;
	letraactual= 0;

	palabraoculta = palabras[encontradas].textoPalabra.toUpperCase();
		alert (palabraoculta);
	palabraactual = ocultarpalabra(palabraoculta);


	$('#imagen').attr('src','images/'+oportunidades+'.png');
	$('#palabra').text(palabraactual);
	$('#actual').text(abecedario[posicionactual]);
	
}


function ocultarpalabra(palabra){
	palabraactual="";
	for( var x=0; x<palabra.length; x++)
	{
		if(abecedario.includes(palabra.charAt(x)))
		{
			palabraactual= palabraactual+ "_";
		}
		else
		{
			palabraactual= palabraactual+palabra.charAt(x);
			}		
	}
	return palabraactual;
}



//document.addEventListener("deviceready",function(){



	
//}




$('#btn_comenzar').on('click',function(){
	inicializarvariables();
	alert (palabras.length);
});
	
	
	$('#btnseleccionar').on('cklick', function(){
		
		
	});
	
	
	
	
	

function obtenercoleccion(coleccion) {
	return $.post("http://" + coleccion + "/ahorcado/obtenercoleccion.php",function(){
	
	//return $.post("http://" + coleccion + "/ICAS/obtenercolecciones.php",function(){
			//se ejecuta lo que hay aqui si se pudo enviar la informacion
			alert("informacion enviada");
			});
			
			
	
			
	
					
				}//obtenercolecciones
				

	$('#siguiente').on('click',function(){
		if (posicionactual<26)
		{
			posicionactual=posicionactual+1;
			}
			else 
			{
				posicionactual=0;
			}
		$('#actual').text(abecedario[posicionactual]);
		
		});
		
		
		
		
		
	$('#anterior').on('click',function(){
		if (posicionactual>0)
		{
			posicionactual=posicionactual-1;
			}
			else 
			{
				posicionactual=26;
			}
		$('#actual').text(abecedario[posicionactual]);
		
		});
		
		
		$('#actual').on('click',function(){

		 letraactual =$('#actual').html();
		 			alert (letraactual);
		 temporal="";
		 for(x=0; x<palabraoculta.length;x++)
		 {
			 if(letraactual.charAt(0)==palabraoculta.charAt(x))
			 {
				 temporal=temporal+letraactual;
			 }
			 else
			 {
			 
			 
				 temporal=temporal+palabraactual.charAt(x);
			 }
		 }

				 if(palabraactual==temporal)
				 {
				oportunidades=oportunidades-1;
	$('#imagen').attr('src','images/'+oportunidades+'.png');
				if(oportunidades<=0)
				{
					alert('fin del juego');
					$('#palabra').text(palabraoculta);
				}
				 }
				 else
				 {
					palabraactual=temporal;

					$('#palabra').text(palabraactual); 
					if(palabraactual==palabraoculta)
					{
						alert('adivinada');
						
						//otapalabrasb
		         //win
				 encontradas +=1;
						if(encontradas<palabras.length){
		
		palabraoculta = palabras[encontradas].textoPalabra.toUpperCase();
		ocultarpalabra(palabraoculta);
		$('#palabra').text(palabraactual);
		oportunidades = 6;
		$('#imagen').attr('src','images/'+oportunidades+'.png');
}
else
{
	alert('juego terminado')
} 
					}
					
				 }
				  
		});
		

		
});//ready