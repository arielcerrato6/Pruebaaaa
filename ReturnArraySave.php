<?php
session_start();
  include('../all/Conexion.php');   //Realizamos la conexion hacia la base de datos

  $idRe           =  'Registro';
  //$id          =      $_POST['id'];
  $name          =       $_POST['namp'];
  $emailp          =     $_POST['emailp'];
  $rolPeople       =     $_POST['rolp'];
  $passw       =     $_POST['passw'];
  $Fecha         =      date  ("y-m-d");



  $datos =        array();  //Declaramos que $datos sea un arreglo en blanco
  $dato =        array();  //Declaramos que $datos sea un arreglo en blanco

        switch($idRe){
        case 'Registro':

        $obj= new conectar();
        $conexion=$obj->conexion();
        $sql = "SELECT * FROM `tbl_usuario` WHERE `Email`='$emailp'";
        $result=mysqli_query($conexion,$sql);
        $to=mysqli_num_rows($result);


       if ($to > 0)
         {
            //echo'<script>alert("People exists")</script>';
            mesaje('false','People exists');
            break;
         }
        elseif($to == 0)
        {

          $sql = "INSERT INTO `tbl_usuario`(`Name`, `Email`, `Id_rol`, `Pass`,`Fecha`,`Estado`)
                                    VALUES ('$name','$emailp','$rolPeople', '$passw','$Fecha','A')";
          $conexion->query($sql);

          mesaje('true','Save User');
           break;
          //echo'<script>alert("Save People")</script>';
          //echo "<script>location.href='people.php'</script>";
        }

        break;
}
function mesaje( string $a, string $m){
        $datos['exito'] = $a;
        $datos['mensaje'] = $m; //mensaje de registro exitoso (opcional)
        //Retorna Array
        echo json_encode(array($datos['exito'],$datos['mensaje']));
}

?>
