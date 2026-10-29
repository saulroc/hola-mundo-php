<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Trabajos - Ejercicio calculadora</title>
        <link href="./css/bootstrap.min.css" rel="stylesheet" >
    </head>
    <body class="bg-light">
        <div class="container mt-5">
        
            <?php require 'menu.php';
            ?>

            <form method="POST" actions="">
                <div class="form-group">    
                    <label for="primerOperando">Primer operando:</label>
                    <input class="form-control" type="number" id="primerOperando" name="primerOperando" placeholder="Escribe el primer operador...">
                </div>
                <div class="form-group">
                    <label for="segundoOperando">Segundo operando:</label>
                    <input class="form-control" type="number" id="segundoOperando" name="segundoOperando" placeholder="Escribe el segundo operador...">
                </div>

                <button class="btn btn-primary" type="submit">Calcular datos</button>
            </form>

            <?php
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $primerOperando = $_POST['primerOperando'];
                    $segundoOperando = $_POST['segundoOperando'];
                    echo "<h1>Hola mundo</h1>";
                    echo "<ul class='list-group'>";
                    echo "<li class='list-group-item'>La suma de $primerOperando y $segundoOperando es: " . ($primerOperando + $segundoOperando) . "</li>";
                    echo "<li class='list-group-item'>La resta de $primerOperando y $segundoOperando es: " . ($primerOperando - $segundoOperando) . "</li>";
                    echo "<li class='list-group-item'>La multiplicación de $primerOperando y $segundoOperando es: " . ($primerOperando * $segundoOperando) . "</li>";
                    echo "<li class='list-group-item'>La división de $primerOperando y $segundoOperando es: " . ($primerOperando / $segundoOperando) . "</li>";
                    echo "</ul>";
                                    
                }                
                ?>            
        </div>
        
        <!-- Bootstrap JS Bundle CDN -->
        <script src="./js/bootstrap.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZálesaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>