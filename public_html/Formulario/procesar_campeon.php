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
            $favposi = $_POST['favposi'];
            $campeon = $_POST['campeon'];
            $otrocampeon = $_POST['otrocampeon'];

            //Impresion de los datos recogidos
            print ("<p>Los datos que se han introducido son:</p>\n");
            print ("<ul>\n");
            print ("<li> Nombre del usuario: $nombre \n");
            print ("<li> Apellidos del usuario: $apellidos \n");
            print ("<li> Correo del usuario: $correo \n");
            print ("<li> Ciudad del usuario: $ciudad \n");
            print ("<li> Posición favorita: $favposi \n");
            print ("<li> Campeón favorito: $campeon \n");
            print ("<li> Otro campeón: $otrocampeon \n");

            print ("</ul>\n");
        ?>
    </body>
</html>