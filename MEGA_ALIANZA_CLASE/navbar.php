<?php
session_start();
if (!isset($_SESSION['Usuario'])) {
    header('Location:loguin.php');
} else {
    $Cargo = $_SESSION['Cargo'];
    if ($Cargo == 'ADMINISTRADOR') { ?>

        <nav class="navbar navbar-expand-lg" style="background-color: #043B53;">
            <div class="container-fluid">
                <a class="navbar-brand" href="iniciosoftware.php" style="color:white">
                    <img src="logo_mega_alianza_peque.png" alt="MEGA ALIANZA" width="me-auto" height="50"
                        style="display: block;">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="iniciosoftware.php" style="color:white">
                                INICIO</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false" style="color:white">PEDIDOS
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="frmpedidos.php">Nuevo pedido</a></li>
                                <hr class="dropdown-divider">
                                <li><a class="dropdown-item" href="registros_pedidos.php">Registros de pedidos</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false" style="color:white">FORMATOS
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="frmencuesta.php">Encuesta satisfacción</a></li>
                                <li><a class="dropdown-item" href="registros_encuesta.php">Registros encuesta</a></li>
                                <li><a class="dropdown-item" href="frmvisitas.php">Visitas clientes</a></li>
                                <li><a class="dropdown-item" href="registros_visitas.php">Registros visitas</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false" style="color:white">PRODUCTOS
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="frmproductos.php">Crear producto</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="registros_productos.php">Registros de productos</a></li>

                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false" style="color:white">CLIENTES
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="frmcliente.php">Crear cliente</a></li>
                                <hr class="dropdown-divider">
                                <li><a class="dropdown-item" href="registros_clientes.php">Registros de clientes</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false" style="color:white">EMPLEADOS
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="frmempleados.php">Crear empleado</a></li>
                                <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="registros_empleados.php">Registros de empleados</a></li>
                    </ul>
                    </li>

                    </ul>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a href="salir.php"><button name="btns" class="btn btn-outline-success" type="submit">Cerrar
                                sesión</button></a>
                    </div>
                </div>

            </div>
        </nav>
        <?php
    } else if ($Cargo == 'VENDEDOR') { ?>
            <nav class="navbar navbar-expand-lg" style="background-color: #043B53;">
                <div class="container-fluid">
                    <a class="navbar-brand" href="iniciosoftware.php" style="color:white">
                        <img src="logo_mega_alianza_peque.png" alt="MEGA ALIANZA" width="me-auto" height="50" style="display: block;">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="iniciosoftware.php" style="color:white">
                                    INICIO</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false" style="color:white">PEDIDOS
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="frmpedidos.php">Nuevo pedido</a></li>
                                    <hr class="dropdown-divider">
                                    <li><a class="dropdown-item" href="registros_pedidos.php">Registros de pedidos</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false" style="color:white">FORMATOS
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="frmencuesta.php">Encuesta satisfacción</a></li>
                                    <li><a class="dropdown-item" href="registros_encuesta.php">Registros encuesta</a></li>
                                    <li><a class="dropdown-item" href="frmvisitas.php">Visitas clientes</a></li>
                                    <li><a class="dropdown-item" href="registros_visitas.php">Registros visitas</a></li>
                                </ul>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false" style="color:white">PRODUCTOS
                                </a>
                                <ul class="dropdown-menu">

                                    <li><a class="dropdown-item" href="registros_productos.php">Registros de productos</a></li>

                                </ul>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false" style="color:white">CLIENTES
                                </a>
                                <ul class="dropdown-menu">

                                    <li><a class="dropdown-item" href="registros_clientes.php">Registros de clientes</a></li>
                                </ul>
                            </li>

                        </ul>
                        </li>

                        </ul>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <a href="salir.php"><button name="btns" class="btn btn-outline-success" type="submit">Cerrar
                                    sesión</button></a>
                        </div>
                    </div>

                </div>
            </nav>
            <?php
        } else
            if ($Cargo == 'LOGISTICA') { ?>
                <nav class="navbar navbar-expand-lg" style="background-color: #043B53;">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#" style="color:white">
                            <img src="logo_mega_alianza_peque.png" alt="MEGA ALIANZA" width="me-auto" height="50" style="display: block;">
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                        aria-expanded="false" style="color:white">PEDIDOS
                                    </a>
                                    <ul class="dropdown-menu">

                                        <li><a class="dropdown-item" href="registros_pedidos.php">Registros de pedidos</a></li>
                                    </ul>
                                </li>


                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                        aria-expanded="false" style="color:white">PRODUCTOS
                                    </a>
                                    <ul class="dropdown-menu">

                                        <li><a class="dropdown-item" href="registros_productos.php">Registros de productos</a></li>

                                    </ul>
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                        aria-expanded="false" style="color:white">CLIENTES
                                    </a>
                                    <ul class="dropdown-menu">

                                        <li><a class="dropdown-item" href="registros_clientes.php">Registros de clientes</a></li>
                                    </ul>
                                </li>

                            </ul>
                            </li>

                            </ul>
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <a href="salir.php"><button name="btns" class="btn btn-outline-success" type="submit">Cerrar
                                        sesión</button></a>
                            </div>
                        </div>

                    </div>
                </nav>

                <?php
            }
} ?>