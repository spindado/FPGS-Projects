<?php 
$ciudad = ['Valdivia', 'Puerto Varas'];

//array asociativo
$ciudad2[0] = [
    'nombre' => 'Valdivia',
    'poblacion' => 100
];
$ciudad2[1] = [
    'nombre' => 'Puerto Varas',
    'poblacion' => 35
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ciudades</h1>
    <hr>
    <?php
    for($i = 0;$i <= 1; $i++){
        echo '<h2> Nombre: '.$ciudad2[$i]['nombre'].'</h2>';
        echo '<h2> Poblacion: '.$ciudad2[$i]['poblacion'].'</h2>';
        echo '<hr>';
    }

    foreach($ciudad2 as $valor){
        echo '<h2> Nombre: '.$valor['nombre'].'</h2>';
        echo '<h2> Poblacion: '.$valor['poblacion'].'</h2>';
        echo '<hr>';
    }
    ?>
    
</body>
</html>