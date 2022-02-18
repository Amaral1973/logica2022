<html>
    <head>
        <title>Maioridade</title>
        <meta name="description" content="Exercício 1"/>
    </head>
    <body>
        <center>Maioridade</center>
        <hr/>
        <form action="exerc1.php" method="POST">
            <label>Digite o seu nome</label><br/> 
            <input type="text" name="nome" placeholder="Digite o seu nome" required/><br/>
            <label>Digite a sua idade</label><br/> 
            <input type="text" name="idade" placeholder="Digite a sua idade" required/><br/><br/>
            <input type="submit" value="Resultado"/>
        </form>
<?php
    if(isset($_POST['nome'])){
        $nome = $_POST['nome'];
        $idade = $_POST['idade'];
        echo "<hr/>";
        echo "Seu nome é: <b>".$nome."</b><br/>";
        if($idade >= 18){
            echo "É maior.<br/>";
        }else {
            echo "Não é de maior.<br/>";
        }
        echo "Sua idade é: <b>".$idade."</b>";
    } else {
        echo "";
    }
?>
</body>
</html>