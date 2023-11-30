<?php
include 'conexion.php';
$id = $_GET['id'];
$delete = "DELETE FROM Clientes WHERE id_Clientes='$id'";
$consulta = mysqli_query($conect, $delete);
if ($consulta) {
    header("location:registros_clientes.php");
} else {
    echo "<script> alert ('Ha sucedido un error');
    location.href = 'registros_empleados.php';
    <script>";
}
?>