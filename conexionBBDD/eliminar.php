<?php

include_once 'conexion.php';

$id = $_GET['id'];

$sql_delete = 'DELETE FROM colores WHERE id=?';

$sentencia_eliminar = $pdo->prepare($sql_delete);
$sentencia_eliminar->execute(array($id));

$pdo = null;
$sentencia_eliminar = null;

header('location:index.php');