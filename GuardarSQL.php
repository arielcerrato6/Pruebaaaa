<?php
session_start();
  include('conexionSQL.php');
   //CUANDO LOS DATOS SE MANDEN DESDE EL FORMULARIO CON SERIALIZE--> EN EL  $_POST TIENE QUE IR EL NOMBRE ORIGINAL DEL INPUT
   $name  =  $_POST['n1'];
   $pass  =  $_POST['n2'];


   $obj= new conexionSQL();
   $conexion=$obj->conectarSQL();

   $sql = "INSERT INTO pruebaTabla2 (nombre,contra)
                                   VALUES ('$name','$pass')";
   $ejecutar = sqlsrv_query($conexion ,$sql);

   if($ejecutar)
   {
     echo "True";
    }
    else {
    echo die( print_r( sqlsrv_errors(), true));
    }





  ?>
