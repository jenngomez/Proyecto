<?php
include 'conexion.php';
$id = $_GET['id'];
$delete = "DELETE FROM Empleados WHERE id_Empleados='$id'";
$consulta = mysqli_query($conect, $delete);
if($consulta){
    header("location:registros_empleados.php");
} else {
    echo "<script> alert ('Ha sucedido un error');
    location.href = 'registros_empleados.php';
    <script>";
}
?>