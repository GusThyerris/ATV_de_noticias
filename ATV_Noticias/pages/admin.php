<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BelugaNews</title>
    <link rel="stylesheet" href="../css/style.css"/>
    <script src="js/script.js"></script>

    <header>
        <h1>Contas cadastradas</h1>
    </header>

    <?php 
    
        $con = mysqli_connect("localhost:3306", "root", "", "beluganews");

        $contas = mysqli_query($con, "SELECT id, nome, tipo, ativo FROM usuario WHERE tipo > 0");
        
        $escrever = mysqli_fetch_array($contas);

        if(isset($escrever))
        {
            echo "<div class='tabela'><table> <tr> <th>Id</th> <th>Nome</th> <th>Tipo</th> <th>Ativo</th></tr>";
            
            while($escrever = mysqli_fetch_array($contas))
            {
                if($escrever['ativo'] == true)
                {
                    echo "<tr><td>$escrever[0]</td><td>$escrever[1]</td><td>$escrever[2]</td><td><input type='checkbox' checked name='check".$escrever[0]."' class='check' value='1'></td></tr>";                
                }
                else{
                    echo "<tr><td>$escrever[0]</td><td>$escrever[1]</td><td>$escrever[2]</td><td><input type='checkbox' name='check".$escrever[0]."' class='check' value='1'></td></tr>";
                }
            }
            echo "</table></div>";
        }
        else{
            echo"<h2>Não há contas cadastradas";
        }
        

    ?>



