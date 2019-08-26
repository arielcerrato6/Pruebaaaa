<?php
session_start();
include('conexion.php');

$name = $_POST['pass'];
$pass = $_POST['pass'];;

$obj= new conectar();
$conexion=$obj->conexion();
$sql = "UPDATE tablaprueba SET `pass` = '.$pass.' WHERE `nombre` = '.$name.'  ";

$conexion->query($sql);

echo "true";





?>
