<?php

if (isset($_POST['btn2']) && isset($_POST['idempleado'])) {
  
  require_once 'conexion.php';

  $id_empleados = $_POST['idempleado'];
  $Nombre = mb_strtoupper($_POST['nomempleado']);
  $Celular = $_POST['cel'];
  $Usuario = $_POST['user'];
  $Contrasena = $_POST['pass'];
  $Cargo = mb_strtoupper($_POST['cargo']);
  $Ruta = mb_strtoupper($_POST['ruta']);
  
  $con = "UPDATE Empleados

    SET id_Empleados = '$id_empleados',
    Nombre = '$Nombre',
    Celular='$Celular',
    Usuario='$Usuario',
    Contrasena='$Contrasena',
    Cargo='$Cargo',
    Ruta='$Ruta'
     
    
    WHERE id_Empleados=$id_empleados";

  $consulta2 = mysqli_query($conect, $con);

  if ($consulta2) {
    header("location:registros_empleados.php");
    echo "Guardado el empleado";
  } else {
    header("location:frmempleados.php");
    echo 'Problemas en la consulta';
  }
}else{
  echo "<br>NOOO entró al if";
}

?>