<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BelugaNews</title>
    <link rel="stylesheet" href="../css/style.css"/>
    <script src="js/script.js"></script>

    <header>
        <h1>Beluga News</h1>
    </header>

    <?php
        $host = "localhost:3306"; $user = "root"; $pas = ""; $base = "beluganews"; $con = mysqli_connect($host, $user, $pas, $base);

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $consenha = $_POST['consenha'];
        $tipo = intval($_POST['tipo']);

        $verif = mysqli_query($con, "SELECT email FROM login WHERE email = '$email'");

        if(isset($verif))
        {
            echo"<h2>Email já cadastrado</h2>";
        }
        else if($senha != $consenha)
        {
            echo "<h2></h2>";
        }
        else{
            $res = mysqli_query($con, "INSERT INTO usuario (nome, tipo) VALUES ('$nome', $tipo)");

            $res2 = mysqli_query($con, "SELECT id FROM usuario where nome = '$nome'");
            $id = mysqli_fetch_array($res2);

            $res3 = mysqli_query($con, "INSERT INTO login VALUES ('$id[id]', '$email', $senha)");
        }


        

    ?>