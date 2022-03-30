<?php
    $alunos = array(
        array('nome'=>'Marcio','nota1'=>'7','nota2'=>'8'),
        array('nome'=>'Ana','nota1'=>'8','nota2'=>'8'),
        array('nome'=>'Edson','nota1'=>'6','nota2'=>'5'),
        array('nome'=>'Elieth','nota1'=>'9','nota2'=>'7')
    );
    $aprovados = array();
    foreach ($alunos as $aluno){
        $media = ($aluno['nota1']+2*$aluno['nota2'])/3;
        if($media>=7){
            array_push($aprovados,$aluno['nome'],$media);
        }
    }
    $conta = count($aprovados)-1;
    for($i=0;$i<=$conta;$i++){
        echo "Nome:".$aprovados[$i]."<br/>";
        $a = $i+1;
        echo "Média:".$aprovados[$a]."<br/>";
        $i++;
    }
?>