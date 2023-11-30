<?php
session_start();
$Usuario = $_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="logo_mega_alianza_peque.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">


    <title>Crear empleado</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body class="body">
    <?php
    include 'navbar.php'
        ?>
    <section class="content mt-3">
        <div class="container">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <div class="card text-center text-white" style="background-color: #043B53; ">
                        <h4>Crear empleado</h4>
                    </div>
                    <div class="image-container">
                        <img src="icon-empleado.png" alt="imagen">
                    </div>
                    <form action="regempleado.php" method="post" style="background-color: white; padding: 1em;">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <hr>
                                    <div class="form-group">
                                        <label for="id_empleados"> Número de Identificación</label>
                                        <input type="number" class="form-control" name="idempleado" id="idempleado"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <label for="Nombre"> Nombre</label>
                                        <input type="text" class="form-control" name="nomempleado" id="nomempleado">
                                    </div>
                                    <div class="form-group">
                                        <label for="Celular">Número de celular</label>
                                        <input type="number" class="form-control" name="cel" id="cel">
                                    </div>
                                    <div class="form-group">
                                        <label for="Usuario">Usuario</label>
                                        <input type="text" class="form-control" name="user" id="user">
                                    </div>
                                    <div class="form-group">
                                        <label for="Password">Contraseña</label>
                                        <input type="text" class="form-control" name="pass" id="pass">
                                    </div>
                                    <div class="form-group">

                                        <label for="Cargo">Cargo</label>
                                        
                                        <select class="form-select" aria-label="Default select example"name="cargo" id="cargo">
                                        <option selected>Selecciona el cargo</option>
                                        <option value="Administrador">Administrador</option>
                                        <option value="Vendedor">Vendedor</option>
                                        <option value="Logistica">Logística</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="Ruta">Ruta</label>
                                        <input type="text" class="form-control" name="ruta" id="ruta">
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="card-footer text-center">
                                <button type="submit" class="btn" name="btn2"
                                    style="background-color: #043B53; color: white;">Registrar</button>
                            </div>
                    </form>
                    <?php

                    //Crear consulta a la base de datos de usuarios existentes para no crear un usuario doble
                    
                    /* if (isset($_POST['btn2'])) {

                       
                     }else{
                         echo "Digite los datos en el form";
                     }*/
                    ?>
                </div>
            </div>
        </div>
    </section>



    <footer class="footer text-white">
        <h1>∞</h1>
    </footer>

</body>

</html>