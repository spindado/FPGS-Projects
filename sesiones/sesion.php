<?php
session_start();
$login = 'Sergio';

$_SESSION['admin'] = $login;

if(isset($_SESSION['admin'])){
    header('Location:index.php');
}
