<?php
// CONEXION a BASE DE DATOS
// metodo:       mysqli_connect(parametros)
// parametros:   $hostname => donde esta alojada la BD
//               $username => usuario: 'root'
//               $password => pass:    ''       (por defecto)
//               $database => db:      'alumnos2021'
//               $port     =>
//               $socket   =>  
//$conexion = mysqli_connect("localhost", 'root', "root", 'testos');
// en el SERVIDOR https://ar.000webhost.com/members/website/mmdohmen/dashboard
$conexion = mysqli_connect("localhost", 'id18225605_testo', "Zeta-18079551", 'id18225605_utesto');

if(mysqli_connect_errno()) {
    echo "fallo la conexion - error: " . mysqli_connect_errno();
} else {
    echo "🤙 CONEXION ESTABLECIDA mediante archivo externo";
}
echo "<br><br>";

?>