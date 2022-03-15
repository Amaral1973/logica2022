<!DOCTYPE html>
<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>
        <h1>Tabuada</h1>
        <hr/>
        <form action="tabuada.php" method="POST">
            <label>Digite um valor</label><br/>
            <input type="number" name="valor" class="form-control" required/><br/><br/>
            <input type="submit" value="Tabuada" class="btn btn-outline-success" name="bt_tabuada"/>
        </form>
        <?php
            if(isset($_POST['bt_tabuada'])){
                $valor = $_POST['valor'];
                echo '<br/>';
                echo '<b>Tabuada de: </b>'.$valor.'<br/>';
                echo '<hr/>';
                for($i=1;$i<=10;$i++){
                    echo "$valor X $i= ".$valor * $i."<br/>";
                }
            } else {
                echo "";
            }
        ?>
        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-bag-heart" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M10.5 3.5a2.5 2.5 0 0 0-5 0V4h5v-.5Zm1 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0ZM14 14V5H2v9a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1ZM8 7.993c1.664-1.711 5.825 1.283 0 5.132-5.825-3.85-1.664-6.843 0-5.132Z"/>
</svg>
    </body>
</html>