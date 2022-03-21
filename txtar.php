<?php
    $a = array('nome'=>'José','idade'=>22);
    $fp = fopen('array.txt','w');
    fwrite($fp, print_r($a, true));
?>