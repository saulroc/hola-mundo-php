<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Trabajos - Calculo de años</title>
        <link href="../css/bootstrap.min.css" rel="stylesheet" >
    </head>
    <body class="bg-light">
        <div class="container mt-5">
        
            <?php require 'menu.php';
            require '../exceptions/EdadIncorrectaException.php';
            ?>

            <form method="POST" actions="">
                <div class="form-group">    
                    <label for="fechaNacimiento">Fecha de nacimiento:</label>
                    <input class="form-control" type="date" id="fechaNacimiento" name="fechaNacimiento" placeholder="Escribe tu fecha de nacimiento...">
                </div>
                
                <button class="btn btn-primary" type="submit">Calcular años</button>
            </form>

            <?php
                try
                {
                    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                        $fechaNacimiento = new DateTimeImmutable($_POST['fechaNacimiento']);
                        $hoy = new DateTimeImmutable();
                        $edad = ($fechaNacimiento->diff($hoy))->y;
                        
                        if ($edad < 0 || $edad > 130)
                            throw new EdadIncorrectaException("La edad de $edad no está contemplada en el sistema.");

                        echo "<p class='text-success'>Tienes $edad años</p>";
                        
                    }
                } catch (EdadIncorrectaException $e) {
                    echo $e->getMessage();
                }

                
            ?>
                              
        </div>
        
        <!-- Bootstrap JS Bundle CDN -->
        <script src="../js/bootstrap.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZálesaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>