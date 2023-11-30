<?php
session_start();
$Usuario = $_SESSION['username'];
include 'conexion.php';

$id=$_GET['id'];

$query = "SELECT * FROM Empleados WHERE id_Empleados = $id";
$consul = mysqli_query($conect,$query);
$vec = mysqli_fetch_array($consul);


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

    <title>Actualizar empleado</title>
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
                        <h4>Actualizar empleado</h4>
                    </div>
                    <form action="reg_act_empleado.php" method="post" style="background-color: white; padding: 1em;">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <hr>
                                    <div class="form-group">
                                        <label for="id_empleados"> Número de Identificación</label>
                                        <input type="number" class="form-control" name="idempleado" id="idempleado" value="<?php echo $vec[0] ?>" aria-label="First name">
                                        <input type="hidden" name="id_act_empleado" value="<?php echo $vec[0] ?>">
                                        
                                    </div>
                                    <div class="form-group">
                                        <label for="Nombre"> Nombre Empleado</label>
                                        <input type="text" class="form-control" name="nomempleado" id="nomempleado" value="<?php echo $vec[1] ?>" aria-label="First name">
                                        <input type="hidden" name="id_act_empleado" value="<?php echo $vec[1] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="Celular">Celular</label>
                                        <input type="number" class="form-control" name="cel" id="cel" value="<?php echo $vec[2] ?>" aria-label="First name">
                                        <input type="hidden" name="id_act_empleado" value="<?php echo $vec[2] ?>"> 
                                    </div>
                                    <div class="form-group">
                                        <label for="Usuario">Usuario</label>
                                        <input type="text" class="form-control" name="user" id="user" value="<?php echo $vec[3] ?>" aria-label="First name">
                                        <input type="hidden" name="id_act_empleado" value="<?php echo $vec[3] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="Contrasena">Contraseña</label>
                                        <input type="text" class="form-control" name="pass" id="pass" value="<?php echo $vec[4] ?>" aria-label="First name">
                                        <input type="hidden" name="id_act_empleado" value="<?php echo $vec[4] ?>">
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="Cargo">Cargo</label>
                                        <input type="text" class="form-control" name="cargo" id="cargo" value="<?php echo $vec[5] ?>" aria-label="First name">
                                        <input type="hidden" name="id_act_empleado" value="<?php echo $vec[5] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="Ruta">Ruta</label>
                                        <input type="text" class="form-control" name="ruta" id="ruta" value="<?php echo $vec[6] ?>" aria-label="First name">
                                        <input type="hidden" name="id_act_empleado" value="<?php echo $vec[6] ?>">
                                    </div>
                                    
                                    
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="card-footer text-center">
                            <button type="submit" class="btn" name="btn2"
                                style="background-color: #043B53; color: white;">Actualizar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <footer class="footer text-white" >
            <h1>∞</h1>
</footer>

</body>

</html>