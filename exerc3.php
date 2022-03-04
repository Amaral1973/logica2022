<html>
    <body>
        <h2>Exercício 01</h2>
        <form action="exerc3.php" method="POST">
            <label>Nome</label><br/>
            <input type="text" name="nome" placeholder="Digite o seu nome" required/><br/><br/>
            <label>Períodos</label><br/>
            <select name="periodo">
                <option value="matutino" selected>Matutino</option>
                <option value="vespertino">Vespertino</option>
                <option value="noturno">Noturno</option>
            </select><br/><br/>
            <input type="submit" value="Manda ver...."/>
        </form>
        <hr/>
        <?php
            if(isset($_POST['nome']))
            {
                $nome = $_POST['nome'];
                $periodo = $_POST['periodo'];
                echo "Nome do aluno: <b>".$nome."</b><br/>";
                switch($periodo){
                    case 'matutino':
                        echo "<h3>Bom dia!</h3>";
                        break;
                    case 'vespertino':
                        echo "<h3>Boa tarde!</h3>";
                        break;
                    case 'noturno':
                        echo "<h3>Boa noite!</h3>";
                        break;
                }
            }
            else 
            {
                echo "";
            }  
        ?>
        <hr/>
        <h2>Exercício 02</h2>
        
    </body>
</html>