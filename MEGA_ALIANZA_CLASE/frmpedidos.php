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
    <!-- Minified Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- Minified JS library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Minified Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet">
    <script src="js/bootstrap-datetimepicker.min.js"></script>
    <link rel="stylesheet" href="styles.css">


    <title>Seleccionar cliente</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body class="body">
    <?php
    include 'navbar.php'
        ?>

    <div class="container-fluid">
        <div class="col-md-4 text-center">
            

            <fieldset class="scheduler-border" style=""
            <?php
            if (isset($_GET['id'])) {
                echo "disabled";
            }
            ?>
            >
            <h2 style="color:#0D9F4D;">Selecciona el cliente </h2>
            <hr>
            <div class="col-auto text-center">
                    <h4 style="color:#043B53">Buscar un cliente</h4>
                </div>
                <form class="d-flex" action="" method="GET">
                    <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Buscar"
                        name="TextoBuscar">
                    <button class="btn btn-primary" type="submit" name="Buscar"
                        style="background-color:#043B53">Buscar</button>
                </form>


                <table class="table table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Nit</th>
                            <th scope="col">Nombre cliente</th>
                            <th scope="col">Teléfono</th>
                            <th scope="col">Ciudad</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php if (isset($_GET['Buscar']) && isset($_GET['TextoBuscar'])) {
                            include 'conexion.php';
                            $buscar = $_GET['TextoBuscar'];
                            $buscar = "%$buscar%";
                            $query = "SELECT * FROM Clientes
                                WHERE id_Clientes lIKE '$buscar' OR Razon_social lIKE '$buscar' OR Nombre_comercial lIKE '$buscar' OR Correo lIKE '$buscar' OR Persona_contacto lIKE '$buscar' ";
                            $consulta = mysqli_query($conect, $query);
                            if (mysqli_num_rows($consulta) >= 1) {
                                while ($fila = mysqli_fetch_array($consulta)) { ?>
                                    <tr>
                                        <th scope='row'>
                                            <?php echo $fila["id_Clientes"] ?>
                                        </th>
                                        <th>
                                            <?php echo $fila["Nombre_comercial"] ?>
                                        </th>
                                        <th>
                                            <?php echo $fila["Telefono"] ?>
                                        </th>
                                        <th>
                                            <?php echo $fila["Ciudad"] ?>
                                        </th>

                                        <td>
                                        <a href="?id=<?php echo $fila["id_Clientes"] ?> &Nom=<?php echo $fila["Nombre_comercial"] ?> &Tel=<?php echo $fila["Telefono"] ?> &Ciu=<?php echo $fila["Ciudad"] ?>">Seleccionar</a>
                                        </td>
                                    </tr>
                                    <?php
                                }
                            } else {
                                echo "No hay resultados para esa búsqueda";
                            }
                        }
                        ?>
                    </tbody>
                </table>
                <hr>
            </fieldset>
        </div>

    </div>

<?php
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $Nom = $_GET['Nom'];
    $Tel = $_GET['Tel'];
    $id_empleado = $_SESSION['id_Empleados'];

    include 'conexion.php';
    $q = "INSERT INTO Pedidos (id_cliente, Id_empleado, Estado) 
    VALUES ($id, $id_empleado,'En elaboración')";

    $c = mysqli_query($conect, $q);

    if($c){
        echo "<script>alert('Se ha iniciado el proceso de creación de pedido.');
        location.href = 'frmrepedidos.php?id=$id';
        </script>";
    }
}

?>


    <footer class="footer text-white">
        <h1>∞</h1>
    </footer>
</body>

</html>