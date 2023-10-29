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
        
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $res = mysqli_query($con, "SELECT tipo, email, senha FROM usuario u INNER JOIN login l WHERE u.id = l.id AND email = '$email'");
        $login = mysqli_fetch_array($res);

        if(isset($login[1]) == false)
        {
            echo "<h2>Email não existe</h2>";
        }
        else if($senha != $login[2])
        {
            echo "<h2>Senha incorreta</h2>";
        }
        else if($senha == $login[2])
        {   
            if($login[0] == 0)
            {
                header('Location: ../pages/admin.php');
            }
            else
            {
                header('Location: ..index.php');
            }
        }
        

    ?>