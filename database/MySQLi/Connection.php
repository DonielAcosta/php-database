<?php
$server ="localhost";
$database="finanzas_personales";
$username="root";
$password ="Donielacosta1995@";

//forma procedural
// $mysqli = mysql_connect($server,$database,$username,$password);


//forma orientada a objetos
$mysqli = new mysqli($server, $username, $password, $database);

if ($mysqli->connect_error) {
    die("Connection failed: ". $mysqli->connect_error);
}
//uso de caracteres
$setnames= $mysqli->prepare("SET NAMES 'utf8'");
$setnames->execute();
?>