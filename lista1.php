<html>
    <body>
        <h1>Exercício 01</h1>
        <hr/>
        <form action="lista1.php" method="POST">
            <label>Distancia percorrida</label><br/>
            <input type="number" name="distancia" required/><br/><br/>
            <label>Litros consumidos</label><br/>
            <input type="number" name="litros" required/><br/><br/>
            <input type="submit" value="Verificar"/>
        </form>
        <?php
            if (isset($_POST['distancia'])) {
                $km = $_POST['distancia'];
                $litros = $_POST['litros'];
                $cm = $km / $litros;
                echo "O consumo médio foi: ".number_format($cm,2);
            }
            else {
                echo "";
            }
        ?>
        <hr/>
        <h1>Exercício 02</h1>
        <hr/>
        <form action="lista1.php" method="POST">
            <label>Digite a temperatura em Farenheit</label><br/>
            <input type="number" name="fare" required/><br/><br/>
            <input type="submit" value="Converter"/>
        </form>
        <?php
            if(isset($_POST['fare'])){
                $f = $_POST['fare'];
                $c = 5*($f-32)/9;
                echo "Temperatura em Celsius é: ".number_format($c,2);
            }else {
                echo "";
            } 
        ?>
        <hr/>
        <h1>Exercício 03</h1>
        <hr/>
        <form action="lista1.php" method="POST">
            <label>Digite um número</label><br/>
            <input type="number" name="numero" required/><br/><br/>
            <input type="submit" value="Verificar"/>
        </form>
        <?php
            if(isset($_POST['numero'])){
                $numero = $_POST['numero'];
                if($numero % 2 == 0){
                    echo "É par";
                } else {
                    echo "É impar";
                }
            } else {
                echo "";
            }
        ?>
        <hr/>
        <h1>Exercício 04</h1>
        <hr/>
        <form action="lista1.php" method="POST">
            <label>Informe o seu salário</label><br/>
            <input type="number" name="salario" required/><br/><br/>
            <input type="submit" value="Calcular"/>
        </form>
        <?php
            if(isset($_POST['salario'])){
                $salario = $_POST['salario'];
                if($salario <= 280){
                    $reajuste = 20;
                    $aumento = $salario / 100 * $reajuste;
                    $novosalario = $salario + $aumento;
                    echo "<hr/>";
                    echo "Salário anterior: R$".number_format($salario,2)."<br/>";
                    echo "Reajuste: <b>".$reajuste."%</b><br/>";
                    echo "Valor do aumento: R$".number_format($aumento,2)."<br/>";
                    echo "Novo salário R$".number_format($novosalario, 2)."<br/>";
                }
                elseif($salario >= 280 && $salario <= 700){
                    $reajuste = 15;
                    $aumento = $salario / 100 * $reajuste;
                    $novosalario = $salario + $aumento;
                    echo "<hr/>";
                    echo "Salário anterior: R$".number_format($salario,2)."<br/>";
                    echo "Reajuste: <b>".$reajuste."%</b><br/>";
                    echo "Valor do aumento: R$".number_format($aumento,2)."<br/>";
                    echo "Novo salário R$".number_format($novosalario, 2)."<br/>";
                } elseif($salario >= 700 && $salario <= 1500){
                    $reajuste = 10;
                    $aumento = $salario / 100 * $reajuste;
                    $novosalario = $salario + $aumento;
                    echo "<hr/>";
                    echo "Salário anterior: R$".number_format($salario,2)."<br/>";
                    echo "Reajuste: <b>".$reajuste."%</b><br/>";
                    echo "Valor do aumento: R$".number_format($aumento,2)."<br/>";
                    echo "Novo salário R$".number_format($novosalario, 2)."<br/>";
                } else {
                    $reajuste = 5;
                    $aumento = $salario / 100 * $reajuste;
                    $novosalario = $salario + $aumento;
                    echo "<hr/>";
                    echo "Salário anterior: R$".number_format($salario,2)."<br/>";
                    echo "Reajuste: <b>".$reajuste."%</b><br/>";
                    echo "Valor do aumento: R$".number_format($aumento,2)."<br/>";
                    echo "Novo salário R$".number_format($novosalario, 2)."<br/>";
                }
            } else {
                echo "";
            }
        ?>
        <hr/>
        <h1>Exercício 05</h1>
        <hr/>
        <form action="lista1.php" method="POST">
            <label>Nota 1</label><br/>
            <input type="number" name="n1" required/><br/><br/>
            <label>Nota 2</label><br/>
            <input type="number" name="n2" required/><br/><br/>
            <input type="submit" value="Verificar" name="btverifica"/> 
        </form>
        <?php
            if(isset($_POST['btverifica'])){
                $n1 = $_POST['n1'];
                $n2 = $_POST['n2'];
                $media = ($n1+$n2)/2;
                switch($media){
                    case($media >= 0 && $media <= 4.0):
                        $conceito = "E";
                        echo "Nota 1: ".$n1."<br/>";
                        echo "Nota 2: ".$n2."<br/>";
                        echo "Média: ".$media."<br/>";
                        echo "Conceito: ".$conceito."<br/>";
                        echo "Situação: Reprovado<br/>";
                        break;
                    case($media >= 4.0 && $media <= 6.0):
                        $conceito = "D";
                        echo "Nota 1: ".$n1."<br/>";
                        echo "Nota 2: ".$n2."<br/>";
                        echo "Média: ".$media."<br/>";
                        echo "Conceito: ".$conceito."<br/>";
                        echo "Situação: Reprovado<br/>";
                        break;
                    case($media >= 6.0 && $media <= 7.5):
                        $conceito = "C";
                        echo "Nota 1: ".$n1."<br/>";
                        echo "Nota 2: ".$n2."<br/>";
                        echo "Média: ".$media."<br/>";
                        echo "Conceito: ".$conceito."<br/>";
                        echo "Situação: Aprovado<br/>";
                        break;
                    case($media >= 7.5 && $media <= 9.0):
                        $conceito = "B";
                        echo "Nota 1: ".$n1."<br/>";
                        echo "Nota 2: ".$n2."<br/>";
                        echo "Média: ".$media."<br/>";
                        echo "Conceito: ".$conceito."<br/>";
                        echo "Situação: Aprovado<br/>";
                        break;
                    case($media >= 9.0 && $media <= 10.0):
                        $conceito = "A";
                        echo "Nota 1: ".$n1."<br/>";
                        echo "Nota 2: ".$n2."<br/>";
                        echo "Média: ".$media."<br/>";
                        echo "Conceito: ".$conceito."<br/>";
                        echo "Situação: Aprovado<br/>";
                        break;   
                }
            } else {
                echo "";
            }
        ?>
    </body>
</html>