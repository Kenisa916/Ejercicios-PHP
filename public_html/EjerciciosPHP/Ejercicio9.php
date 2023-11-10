<?php

$num = rand(1,7);

switch ($num){
    case 1:
        echo "El día $num es Lunes";
        break;

    case 2:
        echo "El día $num es Martes";
        break;
    case 3:
        echo "El día $num es Miércoles";
        break;

    case 4:
        echo "El día $num es Jueves";
        break;

    case 5:
        echo "El día $num es Viernes";
        break;

    case 6:
        echo "El día $num es Sábado";
        break;

    case 7:
        echo "El día $num es Domingo";
        break;
    
    //Me faltaba el default
    default:
        echo "El dia introducido es incorrecto";
}


?>