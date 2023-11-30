<?php
echo "por aqui";
if (isset($_POST['btn']) && isset($_POST['idcliente'])) {
  
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

  $conn = "INSERT INTO
    Clientes (id_Clientes, Razon_social, Nombre_comercial, Telefono,Ciudad, Direccion, Correo, Persona_contacto, Telefono_p_contacto,Estado) VALUES('$id_clientes','$Razon_social','$Nombre_comercial','$Telefono','$Ciudad','$Direccion','$Correo','$Persona_contacto','$Telefono_p_contacto','Activo')";

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