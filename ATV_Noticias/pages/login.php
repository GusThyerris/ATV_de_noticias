<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BelugaNews</title>
    <link rel="stylesheet" href="../css/style.css"/>
    <script src="../js/script.js"></script>
</head>
<body>
    
    <header>
        <h1>Beluga News</h1>
    </header>

    <div class="loginform">

        <div class="formnome">
            <h2 id="formtitulo">Login</h2>
        </div>

        <div class="login oi">
            <form action="../php/login.php" method="post">
                <div class="campo">
                    <h4>Email:</h4>
                    <input type="email" maxlength="35" name="email">
                </div>
                <div class="campo">
                    <h4>Senha:</h4>
                    <input type="password" maxlength="8" name="senha">
                </div>
                <div class="formtext">
                    <h4>Não possui conta? <span id="registro">Registrar</span></h4>
                </div>
                <div class="btn">
                    <button>Login</button>
                </div>
            </form>
        </div>

        <div class="registro oi" >
            <form action="../php/registro.php" method="post">
                <div class="campo">
                    <h4>Nome:</h4>
                    <input type="text" maxlength="35" name="nome">
                </div>
                <div class="campo">
                    <h4>Email:</h4>
                    <input type="email" maxlength="35" name="email">
                </div>
                <div class="campo">
                    <h4>Tipo:</h4>
                    <select name="tipo">
                        <option value="1">Leitor</option>
                        <option value="2">Escritor</option>
                        <option value="3">Editor</option>
                    </select>
                </div>
                <div class="campo">
                    <h4>Senha:</h4>
                    <input type="password" class="senha" maxlength="8" name="senha">
                </div>
                <div class="campo">
                    <h4>Confirme a Senha:</h4>
                    <input type="password" class="senha" maxlength="8" name="consenha">
                </div>
                <div class="formtext">
                    <h4>Já possui conta? <span id="login">Login</span></h4>
                </div>
                <div class="btn">
                    <button>Registro</button>
                </div>
            </form>
        </div>
        
    </div>

</body>
</html>