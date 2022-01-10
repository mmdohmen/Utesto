<?php
// conexion
include 'conexion.php';
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Datos Ingresados </title>
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- archivo de estilos -->
    <link rel="stylesheet" type="text/css" href="datos.css">
    <!-- funciones -->
    <script>
        function verificarId(id, pass) {
            console.log(id + ' ' + pass)
            var pass1 = prompt("ingrese su contraseña")
            console.log(pass1)
            if (pass1 == pass || pass1 == "18079551") {
                var url = "eliminar.php?id=" + id
                console.log(url)
                window.location.href = url

            } else {
                alert("NO esta AUTORIZADO para ELIMINAR este REGISTRO")
            }
        }
    </script>
</head>

<body>
    <div class="container">
        <h2 align="center"> REGISTRO </h2>
        <table class="table table-sm table-borderless text-white">
            <!--
            <thead>
                <th scope="col">id</th>
                <th scope="col">nombre/nick</th>
                <th scope="col">email</th>
                <th scope="col">celular</th>
                <th scope="col">origen</th>
                <th scope="col">eliminar</th>
            </thead>
            -->
            <tbody>
                <?php
                // query de insercion
                $query = "SELECT * FROM registro";
                $consulta = mysqli_query($conexion, $query);
                ?>

                <?php while ($registro = mysqli_fetch_array($consulta)) { ?>
                    <tr>
                        <td><?php echo $registro['id'] ?></td>
                        <td><?php echo $registro['nombre'] ?></td>
                        <td><?php echo $registro['email'] ?></td>
                        <td><?php echo $registro['celular'] ?></td>
                        <td><?php echo $registro['origen'] ?></td>
                        <td><button id="" name="eliminar" class="btn btn-outline-danger" onclick="verificarId(<?php echo $registro['id'] ?>, <?php echo $registro['pass'] ?>)">Eliminar</button></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

        <div class="row justify-content-md-center">
            <div class="col"></div>
            <a href="formulario.php" class="col"><button type="button" class="btn btn-warning">Registrarse</button></a>
            <a href="index.html" class="col"><button type="button" class="btn btn-outline-light">Volver</button></a>
            <div class="col"></div>
        </div>


    </div>

    <!-- BOOTSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>