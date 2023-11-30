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
    <title>Registros de encuestas</title>
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
                        <h5>Registros de encuestas</h5>
                    </div>
                </div>
            </div>
            <div class="container-fluid pt-3">
                <div class="row">
                    <div class="col-12">
                        <form class="d-flex" role="search" action="" method="GET">
                            <input autofocus name="Buscar" class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
                            <input name="FechaInicio" class="form-control me-2" type="date" placeholder="Fecha de inicio" aria-label="Fecha de inicio">
                            <input name="FechaFin" class="form-control me-2" type="date" placeholder="Fecha de finalización" aria-label="Fecha de finalización">
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
                                    <th scope="col">Id Registro</th>
                                    <th scope="col">Fecha</th>
                                    <th scope="col">Nombre cliente</th>
                                    <th scope="col">Nombre contacto</th>
                                    <th scope="col">Teléfono</th>
                                    <th scope="col">Nombre empleado</th>
                                    <th scope="col">Descargar archivo</th>

                                </tr>
                            </thead>
                            <tbody style="color:black">
                                <?php
                                if (isset($_GET['btns']) && isset($_GET['Buscar'])) {
                                    
                                    $search = $_GET['Buscar'];
                                    $Buscar = "%$search%";
                                    /*$FechaInicio = $_GET['FechaInicio'];
                                    $FechaFin = $_GET['FechaFin'];*/
                                    include('conexion.php');
                                    $query = "SELECT*FROM Encuesta_satisfaccion WHERE id_Encuesta_satisfaccion LIKE '$Buscar' or Nombre_comercial LIKE '$Buscar' or Nombre_empleado LIKE '$Buscar'";
                                    if (!empty($FechaInicio) && !empty($FechaFin)) {
                                        $query .= " AND Fecha BETWEEN '$FechaInicio' AND '$FechaFin'";
                                    } /*elseif (!empty($FechaInicio)) {
                                        $query .= " AND Fecha >= '$FechaInicio'";
                                    } elseif (!empty($FechaFin)) {
                                        $query .= " AND Fecha <= '$FechaFin'";
                                    }*/
                                    $consulta = mysqli_query($conect, $query);
                                    if (mysqli_num_rows($consulta) !== 0) {

                                        while ($guardar = mysqli_fetch_array($consulta)) { ?>
                                            <tr>
                                                <th scope="row" style="border-color:black">
                                                    <?php echo $guardar[0];?>
                                                </th>
                                                <td scope="row" style="color:black">
                                                    <?php echo $guardar[1];?>
                                                </td>
                                                <td style="color:black">
                                                    <?php echo mb_strtoupper($guardar[2]); ?>
                                                </td>
                                                <td>
                                                    <?php echo mb_strtoupper($guardar[3]); ?>
                                                </td>
                                                <td>
                                                    <?php echo $guardar[4]; ?>
                                                </td>
                                                <td>
                                                    <?php echo mb_strtoupper($guardar[5]); ?>
                                                </td>
                                                
                                                <td>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-filetype-pdf" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M14 4.5V14a2 2 0 0 1-2 2h-1v-1h1a1 1 0 0 0 1-1V4.5h-2A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v9H2V2a2 2 0 0 1 2-2h5.5L14 4.5ZM1.6 11.85H0v3.999h.791v-1.342h.803c.287 0 .531-.057.732-.173.203-.117.358-.275.463-.474a1.42 1.42 0 0 0 .161-.677c0-.25-.053-.476-.158-.677a1.176 1.176 0 0 0-.46-.477c-.2-.12-.443-.179-.732-.179Zm.545 1.333a.795.795 0 0 1-.085.38.574.574 0 0 1-.238.241.794.794 0 0 1-.375.082H.788V12.48h.66c.218 0 .389.06.512.181.123.122.185.296.185.522Zm1.217-1.333v3.999h1.46c.401 0 .734-.08.998-.237a1.45 1.45 0 0 0 .595-.689c.13-.3.196-.662.196-1.084 0-.42-.065-.778-.196-1.075a1.426 1.426 0 0 0-.589-.68c-.264-.156-.599-.234-1.005-.234H3.362Zm.791.645h.563c.248 0 .45.05.609.152a.89.89 0 0 1 .354.454c.079.201.118.452.118.753a2.3 2.3 0 0 1-.068.592 1.14 1.14 0 0 1-.196.422.8.8 0 0 1-.334.252 1.298 1.298 0 0 1-.483.082h-.563v-2.707Zm3.743 1.763v1.591h-.79V11.85h2.548v.653H7.896v1.117h1.606v.638H7.896Z"/>
                                                </svg>
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

            </div>
        </div>
    </section>
    <footer class="footer text-white" >
            <h1>∞</h1>
</footer>

</body>

</html>