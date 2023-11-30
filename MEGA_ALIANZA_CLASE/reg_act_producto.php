<?php

if (isset($_POST['btn']) && isset($_POST['idproducto'])) {
    
    require_once 'conexion.php';

    $id_producto = $_POST['idproducto'];
    $Descripcion = mb_strtoupper($_POST['descrip']);
    $Grupo_inventario = mb_strtoupper($_POST['ginventario']);
    $Precio = $_POST['precio'];
    

    $conn = "UPDATE Productos

    SET id_Producto = '$id_producto',
    Descripcion = '$Descripcion',
    Grupo_inventario='$Grupo_inventario',
    Precio='$Precio'
    
    WHERE id_Producto=$id_producto";

    
    $consulta = mysqli_query($conect, $conn);

    

    if ($consulta) {
        header("location:registros_productos.php");
        echo "Guardado el producto";
    } else {
        header("location:frmproductos.php");
        echo 'Problemas en la consulta';
    }
} else {
    echo "<br>NO entró al if";
}

?>