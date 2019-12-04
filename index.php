<?php

// Incluyo el archivo de conexion a la BD
include_once 'conexion.php';

//---------Leer--------
// defino la query a ejecutar
$sql_leer = 'SELECT * FROM colores';
//creo un conector que llame al pdo, le pase la query y la ejecute
$conector = $pdo->prepare($sql_leer);
$conector->execute();
// capturo el resultado de la ejecucion en $resultado
$resultado = $conector->fetchAll();
// muestro por pantalla en crudo
// var_dump($resultado);

//---------Agregar--------
// defino la query a ejecutar
$sql_leer = 'SELECT * FROM colores';
//creo un conector que llame al pdo, le pase la query y la ejecute
$conector = $pdo->prepare($sql_leer);
$conector->execute();
// capturo el resultado de la ejecucion en $resultado
$resultado = $conector->fetchAll();
?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <!-- bloque de codigo php que recorrerá el array de resultado y cada registro lo guarda en $dato
                los dos puntos (:) indican que la sentencia foreach continúa. -->
                <?php foreach($resultado as $dato):?>
                    <!-- Usa funciones de bootstrap y concatena la clase con el valor que trae de la tabla
                    para cambiar el color de los registros -->
                    <div class="alert alert-<?php echo $dato['color']?> text-UPPERCASE" role="alert">
                        <?php echo $dato['color']?>
                        -
                        <?php echo $dato['descripcion']?>
                    </div>
                <?php endforeach ?>
            </div>
            <div class="col-md-6">
                <form>
                    <input type="text" class="form-control" name="color">
                    <input type="text" class="form-control" name="descripcion">
                    <button class="btn btn-primary mt-3"> Agregar </button>
                </form>
            </div>

        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
