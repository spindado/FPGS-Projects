<?php
//CONEXION A LA BASE DE DATOS
    include_once '../conexionBBDD/conexion.php';


$usuario_nuevo = $_POST['nombre_usuario'];
$password = $_POST['password'];
$password2 = $_POST['password2'];

//VERIFICAR SI EL USUARIO EXISTE
$sql = 'SELECT * FROM usuarios WHERE nombre = ?';
$sentencia = $pdo->prepare($sql);
$sentencia->execute(array($usuario_nuevo));
$resultado = $sentencia->fetch();

//SI EXISTE USUARIO MATAMOS LA OPERACION
if($resultado){
    echo'<script type="text/javascript">
        alert("Ya existe el usuario");
        window.location.href="index.php";
        </script>';
        die();
}



//HASH DE CONTRASEÑA
$password = password_hash($password, PASSWORD_DEFAULT);

//VERIFICAR CONTRASEÑA
if(password_verify($password2, $password)){
    echo 'La contraseña es valida.';

    //CONECTARSE A LA BASE DE DATOS


    //AGREGAR A LA BASE DE DATOS
    $sql_insert = 'INSERT INTO usuarios(nombre,pass) VALUES (?,?)';
    $sentencia_agregar = $pdo->prepare($sql_insert);
    if($sentencia_agregar->execute(array($usuario_nuevo,$password))){
        echo'<script type="text/javascript">
        alert("Usuario registrado con exito");
        window.location.href="index.php";
        </script>';
        
    }else{
        echo 'Error<br>';
    }

    $sentencia_agregar = null;
    $pdo = null;
    
}else{
    echo 'La contraseña no es valida.';
    echo '';
}
