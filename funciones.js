function GuardarSing()
{
  //agarrar valor de un solo campo
	//var name =$('#n1').val();
	//var pass = $('#n2').val();
  //Envia los datos desde el formulario todos los datos
	var datos =  $('#formulario').serialize();
	var url = 'SQL/GuardarSQL.php';

//
  $.ajax({
		type: 'POST',
		url: url,
		data: datos,
		success: function(data) {
				   console.log(data);
         }
	});

}

//Metodo para eliminarSQL
function eliminarSQL(num1){
	var url = 'SQL/EliminarSQL.php';
	$.ajax({
		type: 'POST',
		url: url,
		data: 'num1=' + num1,
		success: function(data) {
				   console.log(data);
         }
	});

}


//Metodo dos que guarda la informacion desde el formularios
function guardarinformacion()
{
	var datos = $('#formulario').serialize();
  console.log(datos);
}


function eliminar(num)
{

	var name = num;


  url = 'php/eliminar.php'
	$.ajax({
		type: 'POST',
		url: url,
		data: {num},
		success: function(data) {
			console.log("codigo----"+ "----"+data);
				if (data == 'true')
				{
				   console.log('Se elimino correctamente');
				}
				else {
					console.log('ERROR');
				}

         }
	});

}

function mostrarVentana()
{
	  prompt("Que edad tiene", 18);
    var ventana = document.getElementById('miVentana');
    ventana.style.marginTop = '100px';
    ventana.style.left = ((document.body.clientWidth-350) / 2) +  'px';
    ventana.style.display = 'block';

}

function ocultarVentana()
{
    var ventana = document.getElementById('miVentana');
    ventana.style.display = 'none';
}




//Funcion que pide ingresar dos numeros y que evalue cual es mayor. menor o igules
function EvaluarNumeros()
{
   var nu1 = $('#n1').val();
	 var nu2 = $('#n2').val();

	 if (nu1 > nu2)
	 {
	    alert("Numero 1 es mayor: " + nu1 );
	 }
	 else if (nu1 < nu2)
	 {
		 alert("Numero 2 es mayor: " + nu2 );
	 }
	 else
	 {
		 alert("Numeros son iguales");
	 }

}
