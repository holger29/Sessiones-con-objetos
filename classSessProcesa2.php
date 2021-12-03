<?php 
session_start();
$user=json_decode($_SESSION['usuario'],true);
echo "Usuario: ". $user['nombre']. "<br>";
echo "Edad: ". $user['edad']. "<br>";
echo "Direccion: ". $user['direc']. "<br>";
?>