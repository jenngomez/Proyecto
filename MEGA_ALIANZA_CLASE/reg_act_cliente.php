<?php

if (isset($_POST['btn']) && isset($_POST['idcliente'])) {
  echo "entró al if";
  require_once 'conexion.php';
  
  $id_clientes = $_POST['idcliente'];
  $Razon_social = mb_strtoupper($_POST['razon']);
  $Nombre_comercial = mb_strtoupper($_POST['nombre']);
  $Telefono = $_POST['tel'];
  $Ciudad = mb_strtoupper($_POST['ciudad']);
  $Direccion = mb_strtoupper($_POST['dir']);
  $Correo = mb_strtoupper($_POST['email']);
  $Persona_contacto = mb_strtoupper($_POST['percontact']);
  $Telefono_p_contacto = $_POST['telcontact'];

  $conn = "UPDATE Clientes

    SET id_Clientes = '$id_clientes',
    Razon_social = '$Razon_social',
    Nombre_comercial='$Nombre_comercial',
    Telefono='$Telefono',
    Ciudad='$Ciudad',
    Direccion='$Direccion',
    Correo='$Correo',
    Persona_contacto='$Persona_contacto',
    Telefono_p_contacto='$Telefono_p_contacto',
    Estado='Activo' 
    
    WHERE id_Clientes=$id_clientes";

  $consulta = mysqli_query($conect, $conn);

  if ($consulta) {
    header("location:registros_clientes.php");
    echo "Guardado el cliente";
  } else {
    header("location:frmcliente.php");
    echo 'Problemas en la consulta';
  }
}else{
  echo "<br>NOOO entró al if";
}

?>