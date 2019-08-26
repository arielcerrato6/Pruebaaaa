<?php
  session_start();
  include('Conexion.php');   //Realizamos la conexion hacia la base de datos
    //action
    $id ='Log';
    //login
    $us = $_POST['email'  ];
    $ps = $_POST['pass'   ];
    //echo "<script>location.href='index.php'</script>";


  switch($id)
  {
    case 'Log':
    $obj= new conectar();
    $conexion=$obj->conexion();
    #PAse a produccion
    //$sql = "SELECT `Id_people`,`Name`, `Pass`,`Estado`,`Id_rol` FROM `tbl_usuario` WHERE `Email`='$us' AND `Pass`='$ps'";
    #desarrollo
    $sql = "SELECT `Id_people`,`Name`, `Pass`,`Estado`,`Id_rol` FROM `tbl_usuario` WHERE `Name`='$us' AND `Pass`='$ps'";
    $result=mysqli_query($conexion,$sql);
    $to=mysqli_num_rows($result);
    $ver=mysqli_fetch_row($result);

    if ($to > 0)
            {
              $_SESSION['id'] = $ver[0];
              $_SESSION["id"] = $ver[0];
              $_SESSION['rol'] = $ver[4];
              $_SESSION["rol"] = $ver[4];
              if ($ver[3] == 'A')
              {
                if ($ver[4] == 1 or $ver[4] == 2)
                {
                  #echo "<script>location.href='index.php'</script>";
                  mesaje('true',$ver[4]);
                  break;
                }
                else
                {
                  #echo "<script>location.href='indexU.php'</script>";
                  mesaje('true',$ver[4]);
                  break;
                }

              }
              else
              {
              //  echo'<script>alert("User ")</script>';
              //  echo "<script>location.href=' Login.php'</script>";
                mesaje('false','Inactive user');
                 break;
              }
              /*  $_SESSION['id '] = $ver[0];
                $_SESSION['rol'] = $ver[4];

                if ($ver[4] == 1 or $ver[4] == 2)
                {
                  echo "<script>location.href='index.php'</script>";
                }
                else
                {
                  echo "<script>location.href='indexU.php'</script>";
                }*/

            }
    elseif($to == 0)
              {
                mesaje('false','User / Password invalid');
                 break;
               }


  }


  function mesaje( string $a, string $m){
          $datos['exito'] = $a;
          $datos['mensaje'] = $m; //mensaje de registro exitoso (opcional)
          echo json_encode(array($datos['exito'],$datos['mensaje']));
  }


?>
