<?php

$num=rand(1,1000);
$cont=0;
for($i=1;$i<=$num;$i++){
    if($num%$i==0){
        $cont++;
    }
}

if($cont>2){
    echo "$num no es primo";
}
else{
    echo "$num es primo";
}

?>