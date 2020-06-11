<?php
//LEER
$sql_leer = 'SELECT * FROM colores';

$gsent = $pdo->prepare($sql_leer);
$gsent->execute();

$resultado = $gsent->fetchAll();

//var_dump($resultado);

//AGREGAR
if($_POST){
    $color =  $_POST['color'];
    $descripcion = $_POST['descripcion'];

    $sql_insert = 'INSERT INTO colores(color,descripcion) VALUES (?,?)';
    $sentencia_agregar = $pdo->prepare($sql_insert);
    $sentencia_agregar->execute(array($color,$descripcion));

    $sentencia_agregar = null;
    $pdo = null;
    header('location:index.php');
}
//EDITAR
if(($_GET)){
    $id = $_GET['id'];
    $sql_unico = 'SELECT * FROM colores WHERE id=?';
    $gsent_unico = $pdo->prepare($sql_unico);
    $gsent_unico->execute(array($id));
    $resultado_unico = $gsent_unico->fetch(); 

}