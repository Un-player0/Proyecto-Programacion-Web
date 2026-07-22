<?php

$host = "localhost";
$usuario = "root";
$password = "";
$bd = "black_angus_house";
$port =  3307;

$conn = mysqli_connect($host,$usuario,$password,$bd,$port);

if(!$conn){
    die("Error de conexión a base de datos '$bd': " . mysqli_connect_error());
}
?>