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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="styles.css">
    <title>Registros de empleados</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body class="body">
    <?php
    include 'navbar.php';
    ?>
    <section class="content mt-3">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card card-outlibe text-center" style="background-color: #043B53; color: white">
                        <h5>Registro de empleados</h5>
                    </div>
                </div>
            </div>
            <div class="container-fluid pt-3">
                <div class="row">
                    <div class="col-12">
                        <form class="d-flex" role="search" action="" method="GET">
                            <input autofocus name="Buscar" class="form-control me-2" type="search" placeholder="Buscar"
                                aria-label="Search">
                            <button name="btns" class="btn btn-outline-success" type="submit">Buscar</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive pt-2">
                        <table class="table">
                            <thead>
                                <tr style="border-color:black">
                                    <th scope="col">Cédula Empleado</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Celular</th>
                                    <th scope="col">Usuario</th>
                                    <th scope="col">Contraseña</th>
                                    <th scope="col">Cargo</th>
                                    <th scope="col">Ruta</th>

                                </tr>
                            </thead>
                            <tbody style="color:black">
                                <?php
                                if (isset($_GET['btns']) && isset($_GET['Buscar'])) {

                                    $search = $_GET['Buscar'];
                                    $Buscar = "%$search%";
                                    include('conexion.php');
                                    //Hacer la consulta, a donde me voy a conectar y que voy hacer
                                    $query = "SELECT*FROM Empleados WHERE id_Empleados LIKE '$Buscar' or Nombre LIKE '$Buscar'";
                                    $consulta = mysqli_query($conect, $query);
                                    //Mostrar la información
                                    if (mysqli_num_rows($consulta) !== 0) {

                                        while ($guardar = mysqli_fetch_array($consulta)) { ?>
                                            <tr>
                                                <th scope="row" style="color:black">
                                                    <?php echo $guardar[0]; ?>
                                                </th>
                                                <td style="color:black">
                                                    <?php echo mb_strtoupper($guardar[1]); ?>
                                                </td>
                                                <td>
                                                    <?php echo ($guardar[2]); ?>
                                                </td>
                                                <td>
                                                    <?php echo $guardar[3]; ?>
                                                </td>
                                                <td>
                                                    <?php echo $guardar[4]; ?>
                                                </td>
                                                <td>
                                                    <?php echo mb_strtoupper($guardar[5]); ?>
                                                </td>
                                                <td>
                                                    <?php echo mb_strtoupper($guardar[6]); ?>
                                                </td>

                                                <td>
                                                    <a href='frm_act_empleado.php?id=<?php echo $guardar[0] ?>'>
                                                        <i class="bi bi-pencil"></i></a>
                                                    <a href='eliminar_empleado.php?id=<?php echo $guardar[0] ?>'>
                                                        <i class="bi bi-eraser" onclick="confirmación(e);"></i></a>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                    } else {
                                        echo "No se encontraron datos en la búsqueda";
                                    }
                                } else {
                                    echo "Escribe un indicio de búsqueda";
                                } ?>

                            </tbody>
                        </table>
                    </div>
                </div>
                <hr>
                <div class="text-center">
                    <a href="frmempleados.php" class="btn" style="background-color: #043B53; color: white;">Nuevo
                        registro</a>
                </div>
            </div>
        </div>
    </section>
    <footer class="footer text-white">
        <h1>∞</h1>
    </footer>
    <script src="delete.js"></script>
</body>

</html>