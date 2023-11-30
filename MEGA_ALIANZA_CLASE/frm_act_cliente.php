<?php
session_start();
$Usuario = $_SESSION['username'];
include 'conexion.php';

$id=$_GET['id'];

$query = "SELECT * FROM Clientes WHERE id_Clientes = $id";
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

    <title>Actualizar cliente</title>
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
                        <h4>Actualizar cliente</h4>
                    </div>
                    <form action="reg_act_cliente.php" method="post" style="background-color: white; padding: 1em;">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <hr>
                                    <div class="form-group">
                                        <label for="id_clientes"> Número de Identificación</label>
                                        <input type="text" class="form-control" name="idcliente" id="idcliente" value="<?php echo $vec[0] ?>" aria-label="First name">
                                        <input type="hidden" name="id_act_cliente" value="<?php echo $vec[0] ?>">
                                        
                                    </div>
                                    <div class="form-group">
                                        <label for="Razon_social"> Razón social</label>
                                        <input type="text" class="form-control" name="razon" id="razon" value="<?php echo $vec[1] ?>" aria-label="First name">
                                        <input type="hidden" name="id_act_cliente" value="<?php echo $vec[1] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="Nombre_comercial">Nombre Comercial</label>
                                        <input type="text" class="form-control" name="nombre" id="nombre" value="<?php echo $vec[2] ?>" aria-label="First name">
                                        <input type="hidden" name="id_act_cliente" value="<?php echo $vec[2] ?>"> 
                                    </div>
                                    <div class="form-group">
                                        <label for="Telefono">Teléfono</label>
                                        <input type="number" class="form-control" name="tel" id="tel" value="<?php echo $vec[3] ?>" aria-label="First name">
                                        <input type="hidden" name="id_act_cliente" value="<?php echo $vec[3] ?>">
                                    </div>
                                     <div class="form-group">
                                        <label for="Ciudad">Ciudad</label>
                                        <input type="text" class="form-control" name="ciudad" id="ciudad" value="<?php echo $vec[4] ?>" aria-label="First name">
                                        <input type="hidden" name="id_act_cliente" value="<?php echo $vec[4] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="Direccion">Dirección</label>
                                        <input type="text" class="form-control" name="dir" id="dir" value="<?php echo $vec[5] ?>" aria-label="First name">
                                        <input type="hidden" name="id_act_cliente" value="<?php echo $vec[5] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="Correo">Correo</label>
                                        <input type="email" class="form-control" name="email" id="email" value="<?php echo $vec[6] ?>" aria-label="First name">
                                        <input type="hidden" name="id_act_cliente" value="<?php echo $vec[6] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="Persona_contacto">Persona contacto</label>
                                        <input type="text" class="form-control" id="percontact" name="percontact" value="<?php echo $vec[7] ?>" aria-label="First name">
                                        <input type="hidden" name="id_act_cliente" value="<?php echo $vec[7] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="Telefono_p_contacto">Teléfono contacto</label>
                                        <input type="number" class="form-control" name="telcontact" id="telcontact" value="<?php echo $vec[8] ?>" aria-label="First name">
                                        <input type="hidden" name="id_act_cliente" value="<?php echo $vec[8] ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="card-footer text-center">
                            <button type="submit" class="btn" name="btn"
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