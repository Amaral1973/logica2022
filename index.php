<html>
    <head>
        <title>Soma de dois valores</title>
        <meta name="description" content="Meu primeiro HTML5!"/>
    </head>
    <body>
        <center>Somação</center>
        <hr/>
        <form action="index.php" method="POST">
            <label>Valor 1</label><br/> 
            <input type="text" name="valor1"/><br/>
            <label>Valor 2</label><br/> 
            <input type="text" name="valor2"/><br/><br/>
            <input type="submit" value="Resultado"/>
        </form>
<?php
    if(isset($_POST['valor1'])){
        $a = $_POST['valor1'];
        $b = $_POST['valor2'];
        $resultado = $a + $b;
        echo "<hr/>";
        echo "O resultado foi:".$resultado;
    } else {
        echo "";
    }
?>
</body>
</html>