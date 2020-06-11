<?php
$link = 'mysql:host=localhost';
$usuario = 'root';
$pass = '';

$query=<<<SQL
create database if not exists prueba;
/**Crear una base de datos si no existe y crear una tabla usando la base de datos */
/*create database if not exists prueba1;
use prueba1;
CREATE TABLE tabla_prueba (
    id INT(6) PRIMARY KEY,
    firstname VARCHAR(50) NOT NULL,
    lastname VARCHAR(50) NOT NULL,
    email VARCHAR(50)
) engine='Innodb';
*/
use prueba;
CREATE TABLE if not exists colores(
    id INT(10)AUTO_INCREMENT PRIMARY KEY,
    color VARCHAR(50),
    descripcion VARCHAR(100)
)engine='Innodb';
SQL;

try{
    $pdo = new PDO($link,$usuario,$pass);
    
    $statement = $pdo->prepare($query);
    $statement->execute();
    //echo "creado BBDD y una tabla";
}catch (PDOException $e){
    print "¡Error!" . $e ->getMessage() . "<br/>";

}

?>