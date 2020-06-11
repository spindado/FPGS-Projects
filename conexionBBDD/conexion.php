<?php
include_once 'creacionBBDD.php';
$link = 'mysql:host=localhost;dbname=prueba';
$usuario = 'root';
$pass = '';
try{
    $pdo = new PDO($link,$usuario,$pass);

    

}catch (PDOException $e){
    print "¡Error!" . $e ->getMessage() . "<br/>";

}
