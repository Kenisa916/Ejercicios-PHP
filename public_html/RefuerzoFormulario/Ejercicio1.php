<!DOCTYPE html>
<html lang="es">
    <head>
        <meta http-equiv=”Content-Type” content=”text/html; charset="UTF-8"/>
        <title>Campeones de League of Legends</title>
    </head>
    <body>
        <h1>Resultado de la encuesta sobre nuestro campeon</h1>
        <?php
            print("<h1>El formulario de PHP. Resultados del formulario</h1>");
            $nombre = $_POST['nombre'];
            $apellidos = $_POST['apellidos'];
            $correo = $_POST['correo'];
            $ciudad = $_POST['ciudad'];
            $estudios = $_POST['estudios'];
            $hobbies = $_POST['hobbies'];

            //Impresion de los datos recogidos
            print ("<p>Formulario enviado correctamente</p>\n");
            print ("Gracias por rellenar el formulario, $nombre, tu correo es $correo\n");
        ?>
    </body>
</html>