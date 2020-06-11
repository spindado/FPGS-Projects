<?php
session_start();

include_once '../conexionBBDD/conexion.php';

$usuario_login = $_POST['nombre_usuario'];
$password_login = $_POST['password'];

echo '<pre>';
var_dump($usuario_login);
var_dump($password_login);
echo '</pre>';

//VERIFICAR SI EL USUARIO EXISTE
$sql = 'SELECT * FROM usuarios WHERE nombre = ?';
$sentencia = $pdo->prepare($sql);
$sentencia->execute(array($usuario_login));
$resultado = $sentencia->fetch();

echo '</pre>';
var_dump($resultado);
echo '</pre>';

if(!$resultado){
    //matar la operacion si el usuario no existe
    echo'<script type="text/javascript">
        alert("No existe el usuario");
        window.location.href="index.php";
        </script>';
        die();
}

if(password_verify($password_login, $resultado['pass'])){
    //Las contraseñas son iguales
    $_SESSION['admin'] = $usuario_login;
    header('Location:restringido.php');
}else{
    echo 'Las contraseña es incorrecta';
}

