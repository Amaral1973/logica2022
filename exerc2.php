<html>
    <body>
        <form action="exerc2.php" method="POST">
            <label>Valor 1</label><br/>
            <input type="number" name="valor1" required/><br/><br/>
            <label>Valor 2</label><br/>
            <input type="number" name="valor2" required/><br/><br/>
            <input type="submit" value="Manda ver...."/>
        </form>
        <hr/>
        <?php
            if(isset($_POST['valor1']))
            {
                $valor1 = $_POST['valor1'];
                $valor2 = $_POST['valor2'];
                $valor3 = 0;
                echo "O valor1 é: ".$valor1."<br/>";
                echo "O valor2 é: ".$valor2."<br/>";
                echo "<hr/>";
                echo "Valores da Variáveis trocadas<br/><br/>";
                $valor3 = $valor2;
                $valor2 = $valor1;
                $valor1 = $valor3;
                echo "O valor1 é: ".$valor1."<br/>";
                echo "O valor2 é: ".$valor2."<br/>";
            }
            else 
            {
                echo "";
            }  
        ?>
    </body>
</html>