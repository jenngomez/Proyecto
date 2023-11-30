<?php
session_start();
$Usuario = $_SESSION['username'];
include 'conexion.php';
$id = $_GET['id'];
$q = "SELECT c.id_Clientes,c.Nombre_comercial,p.* FROM Clientes as c
      INNER JOIN Pedidos as p ON p.id_cliente=c.id_Clientes WHERE id_Clientes=$id";
$c=mysqli_query($conect,$q);
$cli=mysqli_fetch_array($c);

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


    <title>Seleccionar productos</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <?php
    include 'navbar.php';
    //echo $_GET['idp'];
        ?>

    <div class="container-fluid">
        <div class="col-md-4 text-center">

            <fieldset class="scheduler-border" style="">
                <h2 style="color:#0D9F4D;">Selecciona el producto </h2>
                <hr>
                <div class="col-auto text-center">
                    <h4 style="color:#043B53">Buscar un producto</h4>
                </div>
                <form class="d-flex" role="search" action="" method="GET">
                    <input type="hidden" value="<?php echo $cli[0] ?>" name="id">
                    <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Buscar2"
                        name="TextoBuscar2">
                    <button class="btn btn-primary" type="submit" name="Buscar2"
                        style="background-color:#043B53">Buscar</button>
                </form>


                <table class="table table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Id Producto</th>
                            <th scope="col">Descripción</th>
                            <th scope="col">Precio</th>
                            <th scope="col">Cantidad</th>
                            <th scope="col">Acción</th>
                            
                           
                        </tr>
                    </thead>
                    <tbody>

                        <?php if (isset($_GET['Buscar2']) && isset($_GET['TextoBuscar2'])) {
                            include 'conexion.php';
                            $buscar2 = $_GET['TextoBuscar2'];
                            $buscar2 = "%$buscar2%";
                            $query = "SELECT * FROM Productos
                            WHERE id_Producto lIKE '$buscar2' OR Descripcion lIKE '$buscar2'";
                            $consulta = mysqli_query($conect, $query);
                            if (mysqli_num_rows($consulta) >= 1) {
                                while ($fila = mysqli_fetch_array($consulta)) { ?>
                                    <tr>
                                    <form action="" method="get">
                                        <th scope='row'>
                                            <?php echo $fila["id_Producto"] ?>
                                        </th>
                                        <th>
                                            <?php echo $fila["Descripcion"] ?>
                                        </th>
                                        <th>
                                            <?php echo $fila["Precio"] ?>
                                        </th>
                                        <td>                
                                            <input type="number" id='cantpro' name="cantidad" style="width:4em" class="cantidad" value="1">
                                        </td>
                                        
                                        <td>
                                        <a onclick="capturacantidad();" href="" >Seleccionar</a>
                                    <input type="submit" value="enviar" onclick="capturacantidad();">                                       
                                        </td>
                                        
                             //       </tr>
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

            <hr>
            <fieldset class="scheduler-border py-3" style="background-color:#BDBEC1;">
                
                    <button type="button" id="send" class="btn btn-success col-sm-8 btn-lg" onclick="submitForm()">Realizar
                        pedido</button>
                

            </fieldset>
        </div>

        <?php
        //echo "antes de recibir el codigo producto";
        if (isset($_GET['codp'])) {
            echo '<br>si recibió el codigo de producto';
            include 'conexion.php';

            $id = $_GET['id'];
            $cod=$_GET['codp'];
            $cant = $_POST['cant'];
            $idempleado = $_SESSION['id_Empleados'];
            $ped = $_GET['ped'];

            $consultaped = "INSERT INTO Clientes_has_Productos (Clientes_id_Clientes,Productos_id_Producto,Empleados_id_Empleados,Pedidos_Id_Pedido,Cantidad) VALUES('$id','$cod','$idempleado','$ped','$cant')";

            $consulta4 = mysqli_query($conect, $consultaped);

            if ($consulta4) {
                echo "Se seleccionó  el producto";


            } else {
                echo "No se realizó la consulta";

            }
        }else{
            echo 'no recibió el codigo del producto';
        }
        ?>
        


        <div class="col-md-7 text-center">
            <h1 style="color:#0D9F4D;">Registrar pedido</h1>
            <hr>
        <fieldset>
         <!--<?php echo "<h2>" . $cli[0] . " - " . $cli[2] . " - " . $cli[3] . "</h2>"; ?>-->
         <div class="row g-4 justify-content-center">
                        <div class="col-sm-8">
                            <p>Cliente:</p>
                            <label for="Pedido" style="color:#043B53;">
                          <?php echo $cli[0] . " - " ?>
                        </label>
                        <label for="Pedido" style="color:#043B53;">
                            <?php echo $cli[1] ?>
                        </label><br>
                        <p>Empleado:</p>
                        <label for="Pedido" class="visually" style="color:#043B53;">
                            <?php echo $_SESSION['Nombre'] ?>
                        </label><br>
                        <p>Producto:</p>
                        <table class="table table-striped">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">Referencia</th>
                                    <th scope="col">Descripción</th>
                                    <th scope="col">Precio Unitario</th>
                                    <th scope="col">Precio Total</th>
                                </tr>
                            </thead>
                            <tbody style="color:black">
                                <?php 
                                    //if (isset($_GET['cod'])) {

                                        include 'conexion.php';
                                        $cod = $_GET['codp'];
                                        $selectionar = "SELECT cp.Productos_id_Producto,p.* 
                                        FROM Clientes_has_Productos as cp
                                        INNER JOIN Pedidos as p ON p.Id_Pedido=cp.Pedidos_Id_Pedido WHERE Id_Pedido=$cod";
                                        //$seleccionar = "SELECT * FROM Clientes_has_Productos";
                                        $consultab = mysqli_query($conect, $selectionar);
                                    
                                    if (mysqli_num_rows($consultab)!==0) {
                                        
                                        while ($g = mysqli_fetch_array($consultab)) {?>

                                        <th scope='row'>
                                            <?php echo $g[2] ?>
                                        </th>
                                        <th>
                                            <?php echo $fila["Descripcion"] ?>
                                        </th>
                                        <th>
                                            <?php echo $fila["Precio"] ?>
                                        </th>
                                    
                                        <td>
                                            <span class="total">0</span>
                                        </td>

                                        <?php     
                                        }
                                    }    
                                ?>
                           
                            </tbody>
                        </table>
            </div>
        </div>
        </fieldset>
        </div>

    </div>

    <footer class="footer text-white">
        <h1>∞</h1>
    </footer> 

<script>
    function capturacantidad(){ 
        let cant=parseInt(document.getElementById('cantpro').value);
        console.log(cant);
        alert(cant);
        //return(cant);
    }
    function submitForm() {
            document.getElementById('productForm').submit();
        }

</script>
    
</body>
</html>