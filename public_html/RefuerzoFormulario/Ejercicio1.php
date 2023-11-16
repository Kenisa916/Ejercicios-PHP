<!DOCTYPE html>
<html lang="es">
    <head>
        <meta http-equiv=”Content-Type” content=”text/html; charset="UTF-8"/>
        <title>Formulario Correcto</title>
    </head>
    <body>
        <h1>Formulario enviado correctamente</h1>
        <?php
            $nombre = $_POST['nombre'];
            $apellidos = $_POST['apellidos'];
            $correo = $_POST['correo'];
            $ciudad = $_POST['ciudad'];
            $estudios = $_POST['estudios'];
            $hobbies = $_POST['hobbies'];

            //Impresion de los datos recogidos
            print ("<p>Formulario enviado correctamente</p>\n");
            print ("<p>Gracias por rellenar el formulario, $nombre, tu correo es $correo</p>\n");
            print ("Datos introducidos:");
            print ("<ul>\n")
            print ("<li> Nombre: $nombre");
            print ("<li> Apellidos: $apellidos");
            print ("<li> Ciudad: $ciudad");
            print ("<li> Correo: $correo");
            print ("<li> Estudios: $estudios");
            print ("<li> Hobbies: $hobbies");
            print ("</ul>\n");


        ?>
    </body>
</html>