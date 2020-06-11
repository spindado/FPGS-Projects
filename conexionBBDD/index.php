<?php 
include_once 'conexion.php';
include_once 'sentencias.php';



?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">

                <?php
                    foreach($resultado as $dato):

                ?>


                <div class="alert alert-<?php echo $dato['color'] ?> text-uppercase" role="alert">
                    <?php echo $dato['color'] ?>
                    -
                    <?php echo $dato['descripcion'] ?>

                    <a href="eliminar.php?id=<?php echo $dato['id']?>" class="float-right ml-3"><i class="fas fa-trash-alt    "></i></a>

                    <a href="index.php?id=<?php echo $dato['id']?>" class="float-right"><i class="fas fa-pencil-alt"></i></a>
                </div>

                <?php 
                endforeach;
                //cerramos conexion base de datos y sentencia
                $pdo = null;
                $gsent = null;

                ?>

            </div>
            <div class="col-md-6">
                <?php if(!$_GET): ?>
                <h2>AGREGAR ELEMENTOS</h2>
                <form method="POST">
                    <input type="text" class="form-control" name="color">
                    <input type="text" class="form-control mt-3" name="descripcion">
                    <button class="btn btn-primary mt-3">Agregar</button>
                </form>
                <?php endif ?>

                <?php if($_GET): ?>
                <h2>EDITAR ELEMENTOS</h2>
                <form method="GET" action="editar.php">
                    <input type="text" class="form-control" name="color" value="<?php echo $resultado_unico['color']?>">
                    <input type="text" class="form-control mt-3" name="descripcion" value="<?php echo $resultado_unico['descripcion']?>">
                    <input type="hidden" name="id" value="<?php echo $resultado_unico['id']?>">
                    <button class="btn btn-primary mt-3">Agregar</button>
                </form>
                <?php endif ?>
            </div>
        </div>
        
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>