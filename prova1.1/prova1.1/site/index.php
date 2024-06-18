<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Revisão HTML</title>
    <link href="css/LoginStyle.css" rel="stylesheet" type="text/css">
</head>

<body>
    <form method="post" action="controller/loginController.php">

        <main>
            <form class="form" method="post" action="controller/loginController.php">
                <div class="Login">
              <br>
                    <?php
                    if (isset($_COOKIE['email'])) {
                        echo '<label for="email">Email</label>';
                        echo '<input type="email" name="email" id="email" placeholder="Insira seu email" value="' . $_COOKIE['email'] . '" required>';
                    } else {
                        echo '<label for="email">Email</label>';
                        echo '<input type="email" name="email" id="email" placeholder="Insira seu email" required>';
                    }
                    ?>
                  
                    <br>
                    <br>
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" id="senha" placeholder="Insira sua senha" required>
                   
                    <br>
                    <br>

                    <label for="email-checkbox">
                    <input type="checkbox" name="save-email" id="email-checkbox"> Salvar email

                    </label>
                    <br>
                    <br>
                    
                    <input type="submit" value="Entrar">
                </div>
            </form>
        </main>
    </form>
</body>

</html>