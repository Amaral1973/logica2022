<?php
    $b = array('nome'=>'José','idade'=>22);
    $fp = fopen('teste.txt', 'w');
    fwrite($fp, print_r($b, true));
?>