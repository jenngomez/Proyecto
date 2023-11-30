<?php

if (isset($_POST['btn2']) && isset($_POST['idempleado'])) {

    $buscar4 = $_POST['user'];
    //$Buscar4 = "%$buscar4%";
    include('conexion.php');
    //Hacer la consulta, a donde me voy a conectar y que voy hacer
    $query = "SELECT Usuario FROM Empleados WHERE Usuario = '$buscar4'";
    $consult = mysqli_query($conect, $query);

    if (mysqli_num_rows($consult) != 0) {

        echo "<script>alert('El nombre de usuario que registró ya se encuentra creado.');
        window.location.href='frmempleados.php'; 
        </script>";

    } else {


        //require_once 'conexion.php';

        $id_empleados = $_POST['idempleado'];
        $Nombre = mb_strtoupper($_POST['nomempleado']);
        $Celular = $_POST['cel'];
        $Usuario = $_POST['user'];
        $Contrasena = $_POST['pass'];
        $Cargo = mb_strtoupper($_POST['cargo']);
        $Ruta = mb_strtoupper($_POST['ruta']);

        $con = "INSERT INTO 
            Empleados(id_Empleados,Nombre,Celular,Usuario,Contrasena,Cargo,Ruta) VALUES('$id_empleados','$Nombre','$Celular','$Usuario','$Contrasena','$Cargo','$Ruta')";


        $consulta = mysqli_query($conect, $con);


        if ($consulta) {
            echo "Guardado el empleado";

            header("location:registros_empleados.php");

        } else {
            echo 'Problemas en la consulta';

            header("location:frmempleados.php");

        }
    }
} else {
    echo "<br>NOOO entró al if";
}




?>