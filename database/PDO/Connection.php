<?php
$server ="localhost";
$database="finanzas_personales";
$username="root";
$password ="Donielacosta1995@";


$conecction = new PDO("mysql:host=$server;dbname=$database",$username,$password);
//uso de caracteres
$setnames= $conecction->prepare("SET NAMES 'utf8'");
$setnames->execute();
var_dump($setnames);
?>