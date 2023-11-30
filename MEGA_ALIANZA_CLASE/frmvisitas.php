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
    
    
    <title>Crear visita</title>
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
                        <h4>Crear visita</h4>
                    </div>
                    <div class="image-container">
                        <img src="icon-visita.png" alt="imagen">
                    </div>
                    <form action="regvisita.php" method="POST" style="background-color:white; padding: 1em;" enctype="multipart/form-data">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <hr>
                                    
                                    <div class="form-group">
                                        <label for="Nombre_empleado">Nombre Empleado</label>
                                        <input type="text" class="form-control" name="nombre_empleado" id="nombre_empleado" >
                                    </div>
                                    <div class="form-group">
                                        <label for="Ruta">Ruta</label>
                                        <input type="text" class="form-control" name="ruta" id="ruta" >
                                    </div>
                                    <div class="form-group">
                                        <label for="Razon_social">Razón social cliente</label>
                                        <input type="text" class="form-control" name="razon" id="razon" >
                                    </div>
                                    <div class="form-group">
                                        <label for="Nombre_comercial">Nombre Comercial cliente</label>
                                        <input type="text" class="form-control" name="nombre_comercial" id="nombre_comercial" >
                                    </div>
                                    <div class="form-group">
                                        <label for="Telefono">Telefono</label>
                                        <input type="text" class="form-control" name="tel" id="tel" >
                                    </div>
                                    <div class="form-group">
                                        <label for="Direccion">Dirección</label>
                                        <input type="text" class="form-control" name="direccion" id="direccion">
                                    </div>
                                    <div class="form-group col-md-6"><br>
                                        <label for="Antiguedad_cliente">Cliente nuevo:</label>
                                        <br>
                                        <input type="radio" name="cliente" id="cliente" value="cliente nuevo" class="custom-control-input">
                                        <label class="custom-control-label" for="cliente_nuevo">Si</label>
                                        <input type="radio" name="cliente" id="cliente" value="cliente antiguo" class="custom-control-input"><label class="custom-control-label" for="cliente_antiguo">No</label>
                                    
                                    </div>
                                    <div class="form-group"><br>
                                        <label for="Observacion">Observaciones</label>
                                        <textarea cols="30" rows="4" class="form-control" name="observacion" id="observacion"></textarea>
                                    </div>
                                    <div class="form-group"><br>
                                        <label for="Prueba" class="form-label">Evidencia visita</label>
                                        <input type="file" name="foto" accept="image/*" class="form-control">
                                    </div>
                           
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="card-footer text-center">
                        <button type="submit" class="btn" name="btn6" style=" background-color: #043B53; color: white;">Registrar visita</button>
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