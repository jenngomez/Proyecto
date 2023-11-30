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
    
    
    <title>Crear cliente</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body class="body">
    <?php
    include'navbar.php'
    ?>
    <section class="content mt-3">
        <div class="container">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <div class="card text-center text-white" style="background-color: #043B53; ">
                        <h4>Crear cliente</h4>
                    </div>
                    <div class="image-container">
                        <img src="icon-cliente.png" alt="imagen">
                    </div>
                    <form action="regcliente.php" method="post" style="background-color: white; padding: 1em;">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <hr>
                                    <div class="form-group">
                                        <label for="id_clientes"> Número de Identificación</label>
                                        <input type="number" class="form-control" name="idcliente" id="idcliente" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="Razon_social"> Razón social</label>
                                        <input type="text" class="form-control" name="razon" id="razon" >
                                    </div>
                                    <div class="form-group">
                                        <label for="Nombre_comercial">Nombre Comercial</label>
                                        <input type="text" class="form-control" name="nombre" id="nombre" >
                                    </div>
                                    <div class="form-group">
                                        <label for="Telefono">Teléfono</label>
                                        <input type="number" class="form-control" name="tel" id="tel" >
                                    </div>
                                    <div class="form-group">
                                        <label for="Ciudad">Ciudad</label>
                                        <select class="form-select" name="ciudad" id="ciudad" aria-label="Default select example">
                                        <option selected>Selecciona una opción</option>
                                        <option value="marinilla">Marinilla</option>
                                        <option value="rionegro">Rionegro</option>
                                        <option value="guarne">Guarne</option>
                                        <option value="retiro">Retiro</option>
                                        <option value="guatape">Guatape</option>
                                        <option value="san rafael">San Rafael</option>
                                        <option value="el carmen">El Carmen</option>
                                        <option value="santuario">Santuario</option>
                                        <option value="la ceja">La Ceja</option>
                                        <option value="la union">La Union</option>
                                        <option value="san antonio">San Antonio</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="Direccion">Dirección</label>
                                        <input type="text" class="form-control" name="dir" id="dir">
                                    </div>
                                    <div class="form-group">
                                        <label for="Correo">Correo</label>
                                        <input type="email" class="form-control" name="email" id="email" >
                                    </div>
                                    <div class="form-group">
                                        <label for="Persona_contacto">Persona contacto</label>
                                        <input type="text" class="form-control" id="percontact" name="percontact" >
                                    </div>
                                    <div class="form-group">
                                        <label for="Telefono_p_contacto">Teléfono contacto</label>
                                        <input type="number" class="form-control" name="telcontact" id="telcontact" >
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="card-footer text-center">
                        <button type="submit" class="btn" name="btn" style=" background-color: #043B53; color: white;">Registrar</button>
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