<?php
if (isset($_POST['btn3']) && isset($_POST['idproducto'])) {
    require_once 'conexion.php';
    

    $id_producto = $_POST['idproducto'];
    $Descripcion = mb_strtoupper($_POST['descrip']);
    $Iva = $_POST['iva'];
    $Grupo_inventario = mb_strtoupper($_POST['ginventario']);
    $Precio = $_POST['precio'];

    
    $conn = "INSERT INTO
    Productos (id_Producto,Descripcion,Iva,Grupo_inventario,Precio) VALUES('$id_producto','$Descripcion','$Iva','$Grupo_inventario','$Precio')";
    

    $consulta = mysqli_query($conect, $conn);

    if ($consulta) {
        header("location:registros_productos.php");
        echo "Producto guardado";
    } else {
        header("location:frmproductos.php");
        echo 'Problemas en la consulta';
    }
}


?>