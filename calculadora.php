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
        
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="index.php">Primera Tarea</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="calculadora.php">Calculadora</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#">Edad</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link " href="#">Imprimir números</a>
                        </li>
                    </ul>
                    </div>
                </div>
            </nav>

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