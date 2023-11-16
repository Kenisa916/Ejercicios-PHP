<!DOCTYPE html>
<html lang="es">
    <head>
        <meta http-equiv=”Content-Type” content=”text/html; charset="UTF-8"/>
        <title>Resultado</title>
    </head>
    <body style="text-align: center">
        <h1>Resultado de la operación</h1>
        <?php
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $operacion = $_POST['operacion'];
            
            switch (operacion){
                case +:
                    $resultado=$num1+$num2;
                    print ("$num1 + $num2 = $resultado");
            }

        ?>
    </body>
</html>