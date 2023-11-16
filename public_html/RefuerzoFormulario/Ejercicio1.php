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
            print ("<p>Formulario enviado correctamente\n");
            print ("Gracias por rellenar el formulario, $nombre, tu correo es $correo\n");
            print ("Datos introducidos:\n");
            print ("Nombre: $nombre");
            print ("Apellidos: $apellidos");
            print ("Ciudad: $ciudad");
            print ("Correo: $correo");
            print ("Estudios: $estudios");
            print ("Hobbies: $hobbies"</p>);

        ?>
    </body>
</html>