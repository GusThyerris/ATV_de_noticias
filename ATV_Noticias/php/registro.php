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

        $verif = mysqli_query($con, "SELECT email FROM usuario WHERE email = '$email'");
        $verif = mysqli_fetch_array($verif);

        if(isset($verif))
        {
            echo"<h2>Email já cadastrado</h2>";
        }
        else if($senha != $consenha)
        {
            echo "<h2>Senhas não coincidem</h2>";
        }
        else if(strlen($senha) < 4)
        {
            echo "<h2>Senha muito curta</h2>";
        }
        else{
            
            $res = mysqli_query($con, "INSERT INTO usuario (nome, tipo, email, senha) VALUES ('$nome', $tipo, '$email', $senha)");

            echo "<h2>Cadastro realizado com êxito</h2>";
            echo "<h2>Aguarde confirmação do admin</h2>";
        }


        

    ?>