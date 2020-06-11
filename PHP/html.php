<?php

$animales = ['perro', 'gato', 'iguana'];
$animales2 = array('perro','gato','elefante');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Mi animal favorito es <?php echo $animales[2]?> </h1>

    <?php 
    for ($i=0; $i <= 2 ; $i++) { 
        echo '<h1> Mi animal favorito es :'.$animales2[$i].'</h1>';
    }
    foreach ($animales as $valor => $value) {
        # code...
        echo '<h1> Mi animal favorito es :'.$value.'</h1>';
    }
    
    ?>

</body>

</html>