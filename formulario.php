<?php

?>

<!DOCTYPE HTML>
<html>

<head>
    <meta http="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> U-testo CONTACTO </title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <!-- archivo de estilos -->
    <link rel="stylesheet" type="text/css" href="contacto.css">
</head>

<script>
    function comenzar() {
        var nombre = document.getElementById("nombre");
        var email = document.getElementById("email");
        var origen = document.getElementById("origen");
        document.getElementById("Enviar").addEventListener("click", enviar, false);
    }

    function enviar() {
        if (nombre.value != "" && email.value != "" && origen.value != "") {
            alert("gracias !!! ... \nnos comunicaremos a la brevedad ...");
        }
    }

    window.addEventListener("load", comenzar, false);
</script>

<body class="container">

    <h1> <cite>si queres ser parte de nuestras historias ...</cite> </h1>
    <h3> (ingresa los datos solicitados ..., y nos comunicaremos a la brevedad ...) </h3>
    <br>

    <section>
        <form name="Formulario" id="miformulario" action="registrar.php" method="POST" autocomplete="off">
            <table>
                <tr>
                    <td><em>nombre/nick:</em></td>
                    <td><input type="text" name="nombre" id="nombre" placeholder="campo obligatorio" required autofocus></td>
                </tr>
                <tr>
                    <td><em>contraseña:</em></td>
                    <td><input type="password" name="pass" id="pass" placeholder="campo obligatorio" required autofocus></td>
                </tr>
                <tr>
                    <td><em>email:</em></td>
                    <td><input type="Email" name="email" id="email" placeholder="xxxxxxxxx@xxxxxx.xxx" required></td>
                </tr>
                <tr>
                    <td><em>whatsapp:</em></td>
                    <td><input name="celular" id="celular" placeholder="inc cod.area/SIN 15"></td>
                </tr>
                <tr>
                    <td><em>origen:</em></td>
                    <td><input type="text" name="origen" id="origen" placeholder="ciudad & provincia" required></td>
                </tr>
                <tr>
                    <td><em>puedo pagar con:</em></td>
                    <td>
                        <em>
                            efectivo <input type="checkbox" name="efectivo" /> &nbsp; &nbsp;
                            debito <input type="checkbox" name="debito" /> &nbsp; &nbsp;
                            credito <input type="checkbox" name="credito" /> &nbsp; &nbsp;
                        </em>
                    </td>
                </tr>
                <tr>
                    <td><em>preguntas:</em></td>
                    <td><textarea name="comentarios" cols="30" rows="7"> </textarea></td>
                </tr>
            </table>

            <!-- comentario: BOTON Intro -->
            <input type="submit" id="Enviar" value="Enviar" class="btn btn-warning">
            <a href="index.html" class="btn btn-secondary">Volver</a>
            <br><br>

        </form>
    </section>

    <!-- BOOTSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>