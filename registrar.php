<?php

// ERROR: cannot-modify-header-information-headers-already-sent-by
// https://www.000webhost.com/forum/t/cannot-modify-header-information-headers-already-sent-by/78804
ob_start();

// conexion
include 'conexion.php';

//var_dump($_POST);

// insertar registros
// datos de cada registro
// obtenidos de un formulario
$nombre = $_POST['nombre'];
$pass = $_POST['pass'];
$email = $_POST['email'];
$celular = $_POST['celular'];
$origen = $_POST['origen'];
$efectivo = 0;
if ($_POST['efectivo']) {$efectivo = 1;}
$debito = 0;
if ($_POST['debito']) {$debito = 1;}
$credito = 0;
if ($_POST['credito']) {$credito = 1;}
$comentarios = $_POST['comentarios'];
// query de insercion
$query = "INSERT INTO registro (nombre,pass,email,celular,origen,efectivo,debito,credito,comentarios) VALUES('$nombre','$pass','$email','$celular','$origen','$efectivo','$debito','$credito','$comentarios')";

$insertar = mysqli_query($conexion,$query);

// CIERRO la conexion
mysqli_close($conexion);

if($insertar) {
    echo 'datos ingresados correctamente ...';
    header("location: f1.php");
    // ERROR: cannot-modify-header-information-headers-already-sent-by
    // https://www.000webhost.com/forum/t/cannot-modify-header-information-headers-already-sent-by/78804
    ob_end_flush();
}



?>