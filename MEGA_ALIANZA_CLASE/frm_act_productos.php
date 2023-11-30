<?php
session_start();
$Usuario = $_SESSION['username'];
include 'conexion.php';

$prod = $_GET['prod'];

$query = "SELECT * FROM Productos WHERE id_Producto = $prod";
$consul = mysqli_query($conect, $query);
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

    <title>Actualizar producto</title>
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
                        <h4>Actualizar producto</h4>
                    </div>
                    <form action="reg_act_producto.php" method="post" style="background-color: white; padding: 1em;">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <hr>
                                    <div class="form-group">
                                        <label for="id_producto">Código del producto </label>
                                        <input type="text" class="form-control" name="idproducto" id="idproducto" value="<?php echo $vec[0] ?>" aria-label="First name">
                                        <input type="hidden" name="id_act_producto" value="<?php echo $vec[0] ?>">
                                        
                                    </div>
                                    <div class="form-group">
                                        <label for="Descripcion">Descripción</label>
                                        <input type="text" class="form-control" name="descrip" id="descrip" value="<?php echo $vec[1] ?>" aria-label="First name">
                                        <input type="hidden" name="id_act_producto" value="<?php echo $vec[1] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="Grupo_inventario">Grupo de inventario</label>
                                        <input type="text" class="form-control" name="ginventario" id="ginventario" value="<?php echo $vec[2] ?>" aria-label="First name">
                                        <input type="hidden" name="id_act_producto" value="<?php echo $vec[2] ?>"> 
                                    </div>
                                    <div class="form-group">
                                        <label for="Precio">Precio</label>
                                        <input type="number" class="form-control" name="precio" id="precio" value="<?php echo $vec[3] ?>" aria-label="First name">
                                        <input type="hidden" name="id_act_producto" value="<?php echo $vec[3] ?>">
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