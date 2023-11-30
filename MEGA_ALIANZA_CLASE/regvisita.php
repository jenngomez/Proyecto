<?php

if (isset($_POST['btn6']) && isset($_POST['nombre_empleado'])) {

    require_once 'conexion.php';

    $Fecha = date('Y-m-d h:i', time());
    $Nombre_empleado = mb_strtoupper($_POST['nombre_empleado']);
    $Ruta = mb_strtoupper($_POST['ruta']);
    $Razon_social = mb_strtoupper($_POST['razon']);
    $Nombre_comercial = mb_strtoupper($_POST['nombre_comercial']);
    $Telefono = $_POST['tel'];
    $Direccion = $POST['direccion'];
    $Antiguedad_cliente = mb_strtoupper($_POST['cliente']);
    $Observacion = mb_strtoupper($_POST['observacion']);

    $nombre_imagen ='imgvisitas/'.$_FILES['foto']['name']; //Captura el nombre de la imagen
    //$nom= $_FILES['foto']['name'];
    $nombre = $_FILES['foto']['tmp_name']; //nombre temporal
    
    move_uploaded_file($nombre,$nombre_imagen); //manda la imagen a la carpeta del proyecto


    /*$nombre_imagen = $_FILES['foto']['name'];
    $temporal = $_FILES['foto']['tmp_name'];
    
    $Prueba= 'imgvisitas/' . $nombre_imagen;
    move_uploaded_file($temporal, 'imgvisitas/' . $nombre_imagen);*/

    $con = "INSERT INTO 
     Formato_visitas(Fecha,Nombre_empleado,Ruta,Razon_social, Nombre_comercial, Telefono,Direccion,Cliente_nuevo,Observaciones,Prueba) VALUES('$Fecha','$Nombre_empleado','$Ruta','$Razon_social','$Nombre_comercial','$Telefono','$Direccion','$Antiguedad_cliente','$Observacion','$nombre_imagen')";


    $consulta2 = mysqli_query($conect, $con);


    if ($consulta2) {
        header("location:registros_visitas.php");
        echo "Visita guardada";
    } else {
        header("location:frmvisitas.php");
        echo 'Problemas en la consulta';
    }

} else {
    echo "<br>NOOO entró al if";
}




?>