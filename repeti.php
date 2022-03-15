<html>
    <body>
<?php
    for($i=1;$i<=10;$i++){
        echo $i.'<br/>';
    }
    echo '<hr/>';
    for($i=1;$i<5;$i++){
        echo 'Nome '.$i.':<input type="text" name="'.$i.'"/><br/>';
    }
    echo '<hr/>';
    echo '<h1>Exemplo 1 - FOR</h1>';
    echo '<table border="1">';
    echo '<thead>';
    echo '<tr>';
    echo '<th>Incremento</th>';
    echo '<th>Decremento</th>';
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';
    echo '<tr>';
    echo '<td>';
    for ($i=1;$i<=20;$i++){
        echo $i.'<br/>';
    }
    echo '</td>';
    echo '<td>';
    for ($i=20;$i>=1;$i--){
        echo $i.'<br/>';
    }
    echo '</td>';
    echo '</tr>';
    echo '</tbody>';
    echo '</table>';
    echo '<hr/>';
    echo '<h1>Exemplo 2 - While</h1>';
    echo '<hr/>';
    $contador = 0;
    while($contador < 10){
        echo $contador.'<br/>';
        $contador++;
    }
    ?>
    <hr/>
    <h1>Exemplo 2</h1>
    <hr/>
    <form action="repeti.php" method="POST">
        <label>Valor 1</label><br/>
        <input type="number" name="valor1" required/><br/><br/>
        <label>Valor 2</label><br/>
        <input type="number" name="valor2" required/><br/><br/>
        <input type="submit" value="Vai!" name="btvai"/>
    </form>
    <?php
        if(isset($_POST['btvai'])){
            $v1 = $_POST['valor1'];
            $v2 = $_POST['valor2'];
            if($v1 < $v2){
                while($v1 <= $v2){
                    echo $v1.' / ';
                    $v1++;
                }
            } else {
                while($v2 <= $v1){
                    echo $v2.' / ';
                    $v2++;
                }
            }
        } else {
            echo "";
        }
    ?>
    </body>
</html>