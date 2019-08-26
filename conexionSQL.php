<?php

  class conexionSQL
  {
      public function conectarSQL()
      {
        $serverName = "localhost";

        $connectionInfo = array( "Database"=>"PruebaArielBD");

        $conn = sqlsrv_connect( $serverName, $connectionInfo);

        return  $conn;


      }


  }




?>
