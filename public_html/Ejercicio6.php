<?php

$num = rand(1, 100);

if ( $num < 10){

    echo "$num tiene 1 dígito";

}
elseif( $num < 100){

    echo "$num tiene 2 dígitos";
}

else{
    echo "$num tiene 3 dígitos";
}


?>