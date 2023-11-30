<?php

if (isset($_POST['btn5']) && isset($_POST['nombre'])) {

    require_once 'conexion.php';

    $Fecha = date('Y-m-d h:i', time());
    $Nombre_comercial_encuesta = mb_strtoupper($_POST['nombre']);
    $Nombre_contacto_encuesta = mb_strtoupper($_POST['nombre_con']);
    $Telefono_contacto_encuesta = $_POST['tel_encuesta'];
    $Nombre_empleado = mb_strtoupper($_POST['nombre_empleado']);
    $Conoce = mb_strtoupper($_POST['conoce']);
    $Personal = mb_strtoupper($_POST['personal']);
    $Productos = mb_strtoupper($_POST['producto']);
    $Servicio = mb_strtoupper($_POST['servicio']);
    $Observacion = mb_strtoupper($_POST['observacion']);

    $con = "INSERT INTO 
    Encuesta_satisfaccion(Fecha,Nombre_comercial,Nombre_contacto,Telefono_contacto,Nombre_empleado,Conoce,Personal,Productos,Servicios,Observaciones) VALUES('$Fecha','$Nombre_comercial_encuesta','$Nombre_contacto_encuesta','$Telefono_contacto_encuesta','$Nombre_empleado','$Conoce','$Personal','$Productos','$Servicio','$Observacion')";

    $consulta3 = mysqli_query($conect, $con);

    if($consulta3) {
        header("location:registros_encuesta.php");
        echo "Enucesta guardada";
    }else{
        header("location:frmencuesta.php");
        echo 'Problemas en la consulta';
    }
}else{
    echo "<br>NOOO entró al if";
}
?>