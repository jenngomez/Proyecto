<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php

if (isset($_POST['ingresar']) && isset($_POST['Usuario']) && isset($_POST['Contrasena'])) {
    include('conexion.php');


    $usuario = $_POST['Usuario'];
    $contrasena = $_POST['Contrasena'];

    $query = "SELECT * FROM Empleados WHERE Usuario='$usuario' and Contrasena='$contrasena'";
    $consulta = mysqli_query($conect, $query);
    $vecs = mysqli_fetch_array($consulta);

    if (mysqli_num_rows($consulta) == 1) {
        session_start();
        $_SESSION['id_Empleados'] = $vecs[0];
        $_SESSION['Nombre'] = $vecs[1];
        $_SESSION['Celular'] = $vecs[2];
        $_SESSION['Usuario'] = $vecs[3];
        $_SESSION['Contrasena'] = $vecs[4];
        $_SESSION['Cargo'] = $vecs[5];
        if ($vecs[5] == 'ADMINISTRADOR') { ?>
            <script>
                alert("Bienvenido administrador")
                window.location.href = 'iniciosoftware.php';
                /*Swal.fire({
                    title: 'Hola Administrador',
                    text: "Software Mega Alianza inicia tu Sesión!",
                    icon: 'success',
                    confirmButtonColor: '#0D9F4D',
                    confirmButtonText: 'ok'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = 'iniciosoftware.php';
                    }
                })*/
            </script>
            <?php
        } elseif ($vecs[5] == 'VENDEDOR') { ?>
            <script>
                alert("Bienvenido vendedor")
                window.location.href = 'iniciosoftware.php';
                
                </script>
            <?php
        } elseif ($vecs[5] == 'LOGISTICA') { ?>
            <script>
                alert("Bienvenido auxiliar de logística")
                window.location.href = 'iniciosoftware.php';
                
            </script>
            <?php
        }
    } else {
        echo "<script>alert('Error de usuario o contraseña.');
        window.location.href='loguin.php';
        </script>";
    }
}
?>