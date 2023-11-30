<?php
include 'conexion.php';
$prod= $_GET['prod'];
$delete = "DELETE FROM Productos WHERE id_Producto='$prod'";
$consulta = mysqli_query($conect, $delete);
if ($consulta) {
    header("location:registros_productos.php");
} else {
    echo "<script> alert ('Ha sucedido un error');
    location.href = 'registros_productos.php';
    <script>";
}
?>