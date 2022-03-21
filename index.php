<html>
    <body>
        <form action="index.php" method="POST">
            <label>Valor 1</label>
            <input type="number" name="valor1"/><br/><br/>
            <label>Valor 2</label>
            <input type="number" name="valor2"/><br/><br/>
            <label>Valor 3</label>
            <input type="number" name="valor3"/><br/><br/>
            <input type="submit" value="Média"/>
        </form>
        <hr/>
<?php
    if(isset($_POST['valor1'])){
    $a = $_POST['valor1'];
    $b = $_POST['valor2'];
    $c = $_POST['valor3'];
    $media = ($a + $b + $c)/3;
    echo "A média foi: ".$media;
    echo "<hr>";}
    else {
        echo "";
    }
?>
    </body>
</html>