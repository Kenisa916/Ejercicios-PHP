<?php

$num=rand(1,10);
$multi=1;
for($i=1;$i<=$num;$i++){

    $multi=$multi*$i;
    
}

echo "El factorial de $num es $multi";

?>