<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Trabajos - Ejercicio edad</title>
        <link href="./css/bootstrap.min.css" rel="stylesheet" >
    </head>
    <body class="bg-light">
        <div class="container mt-5">
        
            <?php require 'menu.php';
            ?>

            <form method="POST" actions="">
                <div class="form-group">    
                    <label for="edad">Edad:</label>
                    <input class="form-control" type="number" id="edad" name="edad" placeholder="Escribe tu edad...">
                </div>
                
                <button class="btn btn-primary" type="submit">Comprobar acceso</button>
            </form>

            <?php
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $edad = $_POST['edad'];
                    if ($edad >= 18) {
                        echo "<p class='text-success'>Tienes acceso al contenido.</p>";
                    } else {
                        echo "<p class='text-danger'>No tienes acceso al contenido.</p>";
                    }
                }
            ?>
                              
        </div>
        
        <!-- Bootstrap JS Bundle CDN -->
        <script src="./js/bootstrap.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZálesaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>