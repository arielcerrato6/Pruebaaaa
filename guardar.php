<?php
session_start();
  include('conexion.php');
   //CUANDO LOS DATOS SE MANDEN DESDE EL FORMULARIO CON SERIALIZE--> EN EL  $_POST TIENE QUE IR EL NOMBRE ORIGINAL DEL INPUT 
   $name  =  $_POST['n1'];
   $pass  =  $_POST['n2'];

   //echo $name;

   $obj= new conectar();
   $conexion=$obj->conexion();
   $sql = "INSERT INTO `tablaprueba`(`nombre`, `pass`)
                                   VALUES ('$name','$pass')";
   $conexion->query($sql);

   echo 'true';




  ?>
