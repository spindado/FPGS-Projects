<?php
 echo date('Y');

 function lorem(){
     return '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
      Ea iste aut quo hic unde quas illo libero a corporis sapiente adipisci quam doloremque,
      nisi eligendi similique ut, rerum excepturi inventore.</p>';

 };

 function promedio($n1,$n2){
     return ($n1+$n2)/2;
 }
 echo promedio(10,20);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <section>
        <?php echo lorem(); ?>
    </section>

    <footer>
        <h1>asdjfhasjkdhaglkg <?php  echo date('Y')?></h1>
    </footer>

</body>

</html>