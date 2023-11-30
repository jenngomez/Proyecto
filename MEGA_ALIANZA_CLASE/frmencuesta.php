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
    
    
    <title>Crear encuesta</title>
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
                        <h4>Crear encuesta</h4>
                    </div>
                    <div class="image-container">
                        <img src="icon-encuesta.png" alt="imagen">
                    </div>
                    <form action="regencuesta.php" method="POST" style="background-color:white; padding: 1em;">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <hr>
                                
                                    <div class="form-group">
                                        <label for="Nombre_comercial_encuesta">Nombre Comercial</label>
                                        <input type="text" class="form-control" name="nombre" id="nombre">
                                    </div>
                                    <div class="form-group">
                                        <label for="Nombre_contacto_encuesta">Nombre Contacto</label>
                                        <input type="text" class="form-control" name="nombre_con" id="nombre_con" >
                                    </div>
                                    <div class="form-group">
                                        <label for="Telefono_contacto_encuesta">Teléfono Contacto</label>
                                        <input type="number" class="form-control" name="tel_encuesta" id="tel_encuesta" >
                                    </div>
                                    <div class="form-group">
                                        <label for="Nombre_empleado">Nombre Empleado</label>
                                        <input type="text" class="form-control" name="nombre_empleado" id="nombre_empleado" >
                                    </div>
                                    <div class="form-group">
                                        <label for="Conoce">¿Hace cuanto conoce la empresa?</label>
                                        <input type="text" class="form-control" name="conoce" id="conoce" >
                                    </div>
                                    <div class="form-group">
                                        <label for="Personal">¿Cómo le ha parecido el trato del personal que atiende el servicio?</label>
                                        <input type="text" class="form-control" name="personal" id="personal">
                                    </div>
                                    <div class="form-group">
                                        <label for="Productos">¿Los productos cumplen con las caracteristicas requeridas?</label>
                                        <input type="text" class="form-control" name="producto" id="producto" >
                                    </div>
                                    <div class="form-group">
                                        <label for="Servicio">¿El tiempo de respuesta frente a sus dudas es el acordado?</label>
                                        <input type="text" class="form-control" id="servicio" name="servicio" >
                                    </div>
                                    <div class="form-group">
                                        <label for="Observacion">Observaciones</label>
                                        <textarea cols="30" rows="4" class="form-control" name="observacion" id="observacion"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="card-footer text-center">
                        <button type="submit" class="btn" name="btn5" style=" background-color: #043B53; color: white;">Registrar encuesta</button>
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