<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Revisão HTML</title>
    <link rel="stylesheet" href="css/indexStyle.css">
    
</head>

<body>
    <!-- Menu -->
    <?php
    @session_start();
    if (isset($_SESSION['login'])) {
        echo '
            <header>
                <ul class="header">
                    <li><a href="#">Cadastro de produtos</a></li>
                    <li><a href="#">Cadastro de clientes</a></li>
                    <li><a href="#">Cadastro de propriedades</a></li>
                    <li><a href="#">Relatórios</a></li>
                    <li><a href="controller/logoutController.php">Logout</a></li>
                </ul>
            </header>
            ';
    }
    ?>
    <main>
        <form class="form" method="post" action="controller/loginController.php">
            <div class="Login">
                <h2>Entrar</h2>
                <?php
                if (isset($_COOKIE['email'])) {
                    echo '<label for="email">Email</label>';
                    echo '<input type="email" name="email" id="email" placeholder="Insira seu email" value="' . $_COOKIE['email'] . '" required>';
                } else {
                    echo '<label for="email">Email</label>';
                    echo '<input type="email" name="email" id="email" placeholder="Insira seu email" required>';
                }
                ?>
                <label for="senha">Senha</label>
                <input type="password" name="senha" id="senha" placeholder="Insira sua senha" required>
                <label for="email-checkbox">
                    <input type="checkbox" name="save-email" id="email-checkbox"> Salvar email
                </label>
                <input type="submit" value="Entrar">
            </div>
        </form>
    </main>
</body>

</html>
