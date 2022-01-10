<?php

// ERROR: cannot-modify-header-information-headers-already-sent-by
// https://www.000webhost.com/forum/t/cannot-modify-header-information-headers-already-sent-by/78804
ob_start();

// conexion
include 'conexion.php';

echo "<pre>";
var_dump($_GET);
echo "</pre>";

echo 'se eliminara el id recibido ... ' . '<br>';
echo $_GET['id'] . '<br>';
$id = $_GET['id'];

$query = "DELETE FROM registro WHERE id = $id";
$delete = mysqli_query($conexion,$query);

echo 'registro ELIMINADO ...';

header("location: f1.php");
// ERROR: cannot-modify-header-information-headers-already-sent-by
// https://www.000webhost.com/forum/t/cannot-modify-header-information-headers-already-sent-by/78804
ob_end_flush();

?>