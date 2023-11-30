<?php
session_start();
if (!isset($_SESSION['Usuario'])) {
    header('Location:loguin.php');
} else {
    $Cargo = $_SESSION['Cargo'];

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

        <title>Inicio</title>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    </head>

    <body class="body">

        <nav class="navbar bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="logo_mega_alianza_peque.png" alt="Logo" width="70" height="me-auto" class="d-line"
                        style="color:#043B53">
                    SOFTWARE MEGA ALIANZA
                </a>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <a href="salir.php"><button name="btns" class="btn btn-outline-success" type="submit">Cerrar
                            sesión</button></a>
                </div>
            </div>
        </nav>

        <section class="categorias section-padding">

            <div class="container">

                <div class="row">
                    <div class="col-md-12">
                        <div class="section-header text-center pb-5">

                            <span>
                                <h2><label
                                        style="color: #043B53; font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">Bienvenido
                                        <?php echo $_SESSION['Nombre'] . " "; ?>
                                    </label></h2>
                            </span>

                        </div>
                    </div>
                </div>
                <?php
                if ($Cargo == 'ADMINISTRADOR') { ?>
                    <div class="row">
                        <div class="col-12 col-md-12 col-lg-3">
                            <div class="card text-white text-center pb-2"
                                style="background-color: #BDBEC1; border-color:#BDBEC1">
                                <div class="card-body">
                                    <a title="icon-pedido" href="frmpedidos.php">
                                        <img src="icon-pedido.png" alt="icon-pedido" style="color:  white; height: 80px;"></a>
                                    <p class="card-title" style="color:#043B53"><br>Nuevo pedido</p>

                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-12 col-lg-3">
                            <div class="card text-white text-center pb-2"
                                style="background-color: #BDBEC1; border-color:#BDBEC1">
                                <div class="card-body">
                                    <a title="icon-producto" href="frmproductos.php">
                                        <img src="icon-producto.png" alt="icon-producto"
                                            style="color:  white; height: 80px;"></a>
                                    <p class="card-title" style="color:#043B53"><br>Crear producto</p>

                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-12 col-lg-3">
                            <div class="card text-white text-center pb-2"
                                style="background-color: #BDBEC1; border-color:#BDBEC1">
                                <div class="card-body">
                                    <a title="icon-cliente" href="frmcliente.php">
                                        <img src="icon-cliente.png" alt="icon-cliente" style="color:  white; height: 80px;"></a>
                                    <p class="card-title" style="color:#043B53"><br>Registrar cliente</p>

                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-12 col-lg-3">
                            <div class="card text-white text-center pb-2"
                                style="background-color: #BDBEC1; border-color:#BDBEC1">
                                <div class="card-body">
                                    <a title="icon-empledado" href="frmempleados.php">
                                        <img src="icon-empleado.png" alt="icon-empleado"
                                            style="color:  white; height: 80px;"></a>
                                    <p class="card-title" style="color:#043B53"><br>Registrar empleado</p>

                                </div>
                            </div>
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col-12 col-md-12 col-lg-6">
                            <div class="card text-white text-center pb-2"
                                style="background-color: #BDBEC1; border-color:#BDBEC1">
                                <div class="card-body">
                                    <a title="icon-visita" href="frmvisitas.php">
                                        <img src="icon-visita.png" alt="icon-visita" style="color:  white; height: 80px;"></a>
                                    <p class="card-title" style="color:#043B53"><br>Registrar visita</p>

                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-12 col-lg-6">
                            <div class="card text-white text-center pb-2"
                                style="background-color: #BDBEC1; border-color:#BDBEC1">
                                <div class="card-body">
                                    <a title="icon-encuesta" href="frmencuesta.php">
                                        <img src="icon-encuesta.png" alt="icon-encuesta"
                                            style="color:  white; height: 80px;"></a>
                                    <p class="card-title" style="color:#043B53"><br>Registrar encuesta</p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <?php

                } ?>
        
        <?php
            if ($Cargo == 'VENDEDOR') { ?>
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-4">
                        <div class="card text-white text-center pb-2" style="background-color: #BDBEC1; border-color:#BDBEC1">
                            <div class="card-body">
                                <a title="icon-pedido" href="frmpedidos.php">
                                    <img src="icon-pedido.png" alt="icon-pedido" style="color:  white; height: 80px;"></a>
                                <p class="card-title" style="color:#043B53"><br>Nuevo pedido</p>
        
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-12 col-lg-4">
                            <div class="card text-white text-center pb-2"
                                style="background-color: #BDBEC1; border-color:#BDBEC1">
                                <div class="card-body">
                                    <a title="icon-producto" href="registros_productos.php">
                                        <img src="icon-producto.png" alt="icon-producto"
                                            style="color:  white; height: 80px;"></a>
                                    <p class="card-title" style="color:#043B53"><br>Registros de productos</p>

                                </div>
                            </div>
                        </div>
                    
                    <div class="col-12 col-md-12 col-lg-4">
                        <div class="card text-white text-center pb-2" style="background-color: #BDBEC1; border-color:#BDBEC1">
                            <div class="card-body">
                                <a title="icon-cliente" href="registros_clientes.php">
                                    <img src="icon-cliente.png" alt="icon-cliente" style="color:  white; height: 80px;"></a>
                                <p class="card-title" style="color:#043B53"><br>Registros de clientes</p>
        
                            </div>
                        </div>
                    </div>
                    
                </div><br>
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-4">
                        <div class="card text-white text-center pb-2" style="background-color: #BDBEC1; border-color:#BDBEC1">
                            <div class="card-body">
                                <a title="icon-visita" href="frmvisitas.php">
                                    <img src="icon-visita.png" alt="icon-visita" style="color:  white; height: 80px;"></a>
                                <p class="card-title" style="color:#043B53"><br>Registrar visita</p>
        
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-12 col-lg-4">
                        <div class="card text-white text-center pb-2" style="background-color: #BDBEC1; border-color:#BDBEC1">
                            <div class="card-body">
                                <a title="icon-encuesta" href="frmencuesta.php">
                                    <img src="icon-encuesta.png" alt="icon-encuesta" style="color:  white; height: 80px;"></a>
                                <p class="card-title" style="color:#043B53"><br>Registrar encuesta</p>
        
                            </div>
                        </div>
                    </div>
                    
                </div>
                </div>
                </section>
                <?php

            } ?>

            <?php
                if ($Cargo == 'LOGISTICA') { ?>
                    <div class="row">
                        <div class="col-12 col-md-12 col-lg-4">
                            <div class="card text-white text-center pb-2" style="background-color: #BDBEC1; border-color:#BDBEC1">
                                <div class="card-body">
                                    <a title="icon-pedido" href="registros_pedidos.php">
                                        <img src="icon-pedido.png" alt="icon-pedido" style="color:  white; height: 80px;"></a>
                                    <p class="card-title" style="color:#043B53"><br>Registros de pedidos</p>
            
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-12 col-lg-4">
                            <div class="card text-white text-center pb-2" style="background-color: #BDBEC1; border-color:#BDBEC1">
                                <div class="card-body">
                                    <a title="icon-producto" href="registros_productos.php">
                                        <img src="icon-producto.png" alt="icon-producto" style="color:  white; height: 80px;"></a>
                                    <p class="card-title" style="color:#043B53"><br>Registros de productos</p>
                                </div>
                            </div>
                        </div> 
                        <div class="col-12 col-md-12 col-lg-4">
                            <div class="card text-white text-center pb-2"
                                style="background-color: #BDBEC1; border-color:#BDBEC1">
                                <div class="card-body">
                                    <a title="icon-cliente" href="registros_clientes.php">
                                        <img src="icon-cliente.png" alt="icon-cliente" style="color:  white; height: 80px;"></a>
                                    <p class="card-title" style="color:#043B53"><br>Registros de clientes</p>

                                </div>
                            </div>
                        </div> 
                    </div>
                    </section>
                    <?php

                } ?>

                <footer class="footer text-white">
                    <h1>∞</h1>
                </footer>

            </body>

            </html>
        <?php

} ?>