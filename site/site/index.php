<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Revisão HTML</title>
</head>

<body>
    <form method="post" action="controller/loginController.php">
        <?php
        //Só mostra o menu se o usuário estiver logado.
        @session_start();
        if(isset($_SESSION['login'])){
            echo '<!-- Menu -->
            <ul>
                <li><a href="#">Cadastro de produtos</a></li>
                <li><a href="#">Cadastro de clientes</a></li>
                <li><a href="#">Cadastro de propriedades</a></li>
                <li><a href="#">Relatórios</a></li>
                <li><a href="controller/logoutController.php">Logout</a></li>
            </ul>';
        }
        ?>
        <fieldset>
            <legend>Login</legend>
            <table>
                <tr>
                    <td><label>Email:</label></td>
                    <td><input type="email" name="email" required></td>
                </tr>
                <tr>
                    <td><label>Senha:</label></td>
                    <td><input type="password" name="senha" required></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Entrar no sistema"></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <?php
                            if(isset($_REQUEST) && @$_REQUEST['cod']=='171'){
                                echo '<div style="border: 2px solid red;">';
                                echo 'O email ou a senha não conferem';
                                echo '</div>';
                            }
                        ?>
                    </td>
                </tr>
            </table>
        </fieldset>
    </form>
</body>
</html>