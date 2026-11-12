<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Trabajos - Cambio de contraseña</title>
        <link href="../css/bootstrap.min.css" rel="stylesheet" >
    </head>
    <body class="bg-light">
        <div class="container mt-5">
        
            
            <form method="POST" actions="">
                <div class="form-group">    
                    <label for="contraseñaAnterior">Contraseña anterior:</label>
                    <input class="form-control" type="password" id="contraseñaAnterior" name="contraseñaAnterior">
                </div>

                <div class="form-group">    
                    <label for="contraseñaNueva">Contraseña nueva:</label>
                    <input class="form-control" type="password" id="contraseñaNueva" name="contraseñaNueva" >
                </div>

                <div class="form-group">    
                    <label for="repetirContraseña">Repita la contraseña nueva:</label>
                    <input class="form-control" type="password" id="repetirContraseña" name="repetirContraseña" >
                </div>
                
                <button class="btn btn-primary" type="submit">Cambiar</button>
                <button class="btn btn-secundary" type="submit">Cancelar</button>
            </form>

            <?php
                try
                {
                    $ficheroDeContraseña = "./contraseña.txt";

                    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                        $contraseñaAnterior = $_POST['contraseñaAnterior'];
                        $contraseñaNueva = $_POST['contraseñaNueva'];
                        $repetirContraseña = $_POST['repetirContraseña'];
                        
                        if (file_exists($ficheroDeContraseña) == false) {
                            echo "<p class='text-danger'>No hemos encontrado el fichero de credenciales</p>";
                            die();
                        }

                        $contenidoContraseña = file_get_contents($ficheroDeContraseña);

                        if (str_contains($contenidoContraseña, $contraseñaAnterior) == false) {
                                
                            echo "<p class='text-danger'>No es la contraseña correcta</p>";
                            die();

                        } 

                        if ($contraseñaNueva == $repetirContraseña) {
                            file_put_contents($ficheroDeContraseña, $contraseñaNueva);
                            echo "<p class='success'>Contraseña cambiada con exito</p>";

                        } else {
                            echo "<p class='text-danger'>Las contraseñas nuevas no son iguales</p>";

                        }
                        
                        
                    }
                } catch (Exception $e) {
                    echo $e->getMessage();
                }

                
            ?>
                              
        </div>
        
        <!-- Bootstrap JS Bundle CDN -->
        <script src="../js/bootstrap.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZálesaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>