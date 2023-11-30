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
    

    <title>Crear producto</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body class="body" >
    <?php
    include 'navbar.php'
        ?>
        <section class="content mt-3">
        <div class="container">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <div class="card text-center text-white" style="background-color: #043B53; ">
                        <h4>Crear producto</h4>
                    </div>

                    <div class="image-container">
                        <img src="icon-producto.png" alt="imagen">
                    </div>

                    <form action="regproducto.php" method="post" style="background-color:white; padding: 1em;">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <hr>
                                    <div class="form-group">
                                        <label for="id_producto"> Código del producto</label>
                                        <input type="number" class="form-control" name="idproducto" id="idproducto" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="Descripcion">Descripción</label>
                                        <input type="text" class="form-control" name="descrip" id="descrip" >
                                    </div>
                                    <div class="form-group">
                                        <label for="Iva"> Valor Iva</label>
                                        <input type="number" class="form-control" name="iva" id="iva">
                                    </div>
                                    <div class="form-group">
                                        <label for="Grupo_inventario">Grupo de inventario</label>
                                        
                                        <select class="form-select" aria-label="Default select example"name="ginventario" id="ginventario">
                                        <option selected>Selecciona el grupo</option>
                                        <option value="Desinfeccion">Desinfección</option>
                                        <option value="Higiene">Higiene</option>
                                        <option value="Implementos">Implementos</option>
                                        <option value="Cafetin">Cafetín</option>
                                        <option value="Personalizados">Personalizados</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="Precio">Precio</label>
                                        <input type="number" class="form-control" name="precio" id="precio" >
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="card-footer text-center">
                        <button type="submit" class="btn" name="btn3" style=" background-color: #043B53; color: white;">Registrar</button>
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