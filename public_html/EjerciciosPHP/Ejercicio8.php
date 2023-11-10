<?php

$num = rand(-1000, 1000);

if($num<0){
    echo "El numero $num es negativo";
}

elseif($num>0){
    echo "El numero $num es positivo";
}

else{
    echo "$num es cero";
}

?>