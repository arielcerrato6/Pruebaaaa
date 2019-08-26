<?php

    class conectar
    {
      public function conexion()
      {
        $servername = 'localhost';
        $database = 'pruebabd';
        $user = 'root';
        $pass = '';

        $conexion=mysqli_connect($servername, $user, $pass, $database);

        return $conexion;
      }
    }


?>
