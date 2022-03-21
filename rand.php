<?php
    $array = [];
    for($i=0;$i<=10;$i++){
        $numero = rand(1,10);
        echo $numero."<br/>";
        array_unshift($array, $numero);
    }
    print_r($array);
?>