<!DOCTYPE html>
<html>
<head>
<title>Mostrar Registros</title>

 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">

<!--LIBRERIA DE JS-->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

</head>
<body>

	<div>

    <table class="table table-striped table-bordered table-hover " id="editable" >
    <thead>
    <tr>
        <th>Nombre</th>
        <th>Contrasena</th>
        <th>Editar</th>
        <th>Eliminar</th>

    </tr>
    </thead>
    <?php

          $serverName = "localhost";

          $connectionInfo = array( "Database"=>"PruebaArielBD");

          $conn2 = sqlsrv_connect( $serverName, $connectionInfo);


    			$sql= "SELECT * FROM pruebaTabla2";

    			if ($ejecutar = sqlsrv_query($conn2 ,$sql))
    			{
    				while ($fila = sqlsrv_fetch_array($ejecutar) )
    				{
    					echo "<tr>";
    					echo "<td>$fila[1]</td><td>$fila[2]</td><td><input onclick='mostrarVentana();' type='button'  name='Editar' style='width: 70px;' value='Editar' > </input> </td><td><input id='".$fila[0]."' onclick='eliminarSQL(this.id);' value='Eliminar' style='width: 70px;' type='button'name='Eliminar' ></input> </td>";
    					echo"<td>";
    				  echo "<a data-toggle='modal' data-target='#editUsu' data-nombre='" .$fila[1] ."' data-contra='" .$fila[2]."' </a>";

    					echo "</td>";
    					echo "</tr>";
    				}

    			}


    ?>

    </table>



	</div>

  <div id="miVentana" style="position: fixed; width: 350px; height: 190px; top: 0; left: 0; font-family:Verdana, Arial, Helvetica, sans-serif; font-size: 12px; font-weight: normal; border: #333333 3px solid; background-color: #000000; color: #000000; display:none;">

     <input type="text" placeholder="Ingrese su nueva Contrasena"  />
     <input type="button" value="Aceptar" width="80px;" / />
     <input type="button" onclick="ocultarVentana();" value="CERRAR" width="80px;" / />

  </div>


 <script src="js/funciones.js"></script>

</body>
</html>
