<html>
    <body>
        <form action="exerc1.php" method="POST">
            <label>Nome</label>
            <input type="text" name="nome" placeholder="Digite o nome do aluno" required/><br/><br/>
            <label>Nota 1</label>
            <input type="text" name="nota1"/><br/><br/>
            <label>Nota 2</label>
            <input type="text" name="nota2"/><br/><br/>
            <input type="submit" value="Verificar"/>
        </form>
        <hr/>
<?php
    if(isset($_POST['nome'])||isset($_POST['valor1'])){
    $nome = $_POST['nome'];
    $nota1 = $_POST['nota1'];
    $nota2 = $_POST['nota2'];
    $media = ($nota1 + $nota2)/2;
    if ($media >= 7){
        echo "Aluno: <b>".$nome."</b><br/>";
        echo "Você foi <b>Aprovado</b>, com média: ".$media;
        echo "<hr>";
    }
    else 
    {
        echo "Aluno: <b>".$nome."</b><br/>";
        echo "Você foi <b>Reprovado</b>, com média: ".$media;
        echo "<hr>";
    }
        }
    else {
        echo "";
    }
?>
    </body>
</html>