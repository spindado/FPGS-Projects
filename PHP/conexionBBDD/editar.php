<?php

/*echo 'editar.php?id=1&color=success&descripcion=este es un color verde';
echo '<br>';
*/

$id = $_GET['id'];
$color = $_GET['color'];
$descricion = $_GET['descripcion'];

/*echo $id;
echo '<br>';
echo $color;
echo '<br>';
echo $descricion;*/


include_once 'conexion.php';

$sql_editar = 'UPDATE colores SET color=?,descripcion=? WHERE id=?' ;

$sentencia_editar = $pdo->prepare($sql_editar);
$sentencia_editar->execute(array($color,$descricion,$id));

$pdo = null;
$sentencia_editar = null;

 header('location:index.php');