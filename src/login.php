<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Trabajos - login</title>
        <link href="../css/bootstrap.min.css" rel="stylesheet" >
    </head>
    <body class="bg-light">
        <div class="container mt-5">
        
            
            <form method="POST" actions="">
                <div class="form-group">    
                    <label for="usuario">Usuario:</label>
                    <input class="form-control" type="text" id="usuario" name="usuario" placeholder="Escribe tu usuario...">
                </div>

                <div class="form-group">    
                    <label for="contraseña">Contraseña:</label>
                    <input class="form-control" type="password" id="contraseña" name="contraseña" >
                </div>
                
                <button class="btn btn-primary" type="submit">Login</button>
            </form>

            <?php
                try
                {
                    $ficheroDeUsuario = "./usuario.txt";
                    $ficheroDeContraseña = "./contraseña.txt";

                    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                        $usuario = $_POST['usuario'];
                        $contraseña = $_POST['contraseña'];
                        
                        if (file_exists($ficheroDeUsuario) && file_exists($ficheroDeContraseña)) {
                            $contenidoUsuario = file_get_contents($ficheroDeUsuario);
                            $contenidoContraseña = file_get_contents($ficheroDeContraseña);

                            if (str_contains($contenidoUsuario, $usuario) && str_contains($contenidoContraseña, $contraseña)) {
                                
                                echo "<p class='text-success'>¡Hola $usuario, bienvenido!</p>";

                            } else {

                                echo "<p class='text-danger'>¡No te conocemos de nada!</p>";

                            }

                        } else {
                            echo "<p>No podemos encontrar el fichero de credenciales</p>";
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