<?php
session_start();
include('conexion.php');

    $name  =  $_POST['num'];


    $obj= new conectar();
    $conexion=$obj->conexion();
    $sql = "DELETE FROM `tablaprueba` WHERE `nombre` = '$name' ";
    $conexion->query($sql);

    echo "true";





?>
