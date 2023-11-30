<?php

$servername = 'localhost';
$username = "root";
$password = "";
$dbname = "Mega_Alianza";


//Se crea la conexión
$conect = mysqli_connect($servername, $username, $password, $dbname);
if ($conect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
} else {
    //echo "Conexión establecida";
}



?>