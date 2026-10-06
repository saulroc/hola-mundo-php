<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio calculadora</title>
        <link href="./css/bootstrap.min.css" rel="stylesheet" >
    </head>
    <body class="bg-light">
        <div class="container mt-5">
        
        <?php
            $primerOperando = 10;
            $segundoOperando = 5;
            echo "<h1>Hola mundo</h1>";
            echo "<ul class='list-group'>";
            echo "<li class='list-group-item'>La suma de $primerOperando y $segundoOperando es: " . ($primerOperando + $segundoOperando) . "</li>";
            echo "<li class='list-group-item'>La resta de $primerOperando y $segundoOperando es: " . ($primerOperando - $segundoOperando) . "</li>";
            echo "<li class='list-group-item'>La multiplicación de $primerOperando y $segundoOperando es: " . ($primerOperando * $segundoOperando) . "</li>";
            echo "<li class='list-group-item'>La división de $primerOperando y $segundoOperando es: " . ($primerOperando / $segundoOperando) . "</li>";
            echo "</ul>";
            ?>
        </div>
        
        <!-- Bootstrap JS Bundle CDN -->
        <script src="./js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZálesaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>