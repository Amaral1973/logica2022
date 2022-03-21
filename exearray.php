<html>
<?php
    echo "<h4>Exercício 01</h4>";
    echo "<hr/>";
    $carros = ["Opala","Fiat 147","Delrey","Corsa","Ka"];
    print_r($carros);
    echo "<br/>";
    echo "Número de registros: ".count($carros)."<br/>";
    echo "Carro da terceira posição: ".$carros[3];
    echo "<br/><br/>";
    $carros[] = "Pampa";
    $carros[] = "Celta";
    $carros[] = "Onix";
    $carros[] = "Corcel";
    $carros[] = "Santana";
    print_r($carros);
    echo "<br/>";
    echo "Número de registros: ".count($carros)."<br/>";
    echo "Carro da oitava posição: ".$carros[8];
?>
<hr/>
<form action="exearray.php" method="POST">
    <label>Digite uma palavra</label><br/>
    <input type="text" name="palavra" required/><br/><br/>
    <input type="submit" value="Vai!" name="bt_vai"/>
</form>
<?php
    if(isset($_POST['bt_vai'])){
        $palavra = $_POST['palavra'];
        $array = array();
        $array[] = $palavra;
        print_r($array);
        echo "<br/>";
        echo "Número de palavras: ".count($array);
        echo "<br/>";
        echo "A palavra digitada foi: ".$array[0];
    } else {
        echo "";
    }
?>
</html>