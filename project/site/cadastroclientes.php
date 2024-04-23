<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de clientes</title>
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="js/script.js">
</head>

<body>
    <h2>Cadastro de clientes</h2>
    <?php
        //Se existirem query strings captura.s
        if($_REQUEST){
            $msg = $_REQUEST['cod'];
            //Senha errada - Cod= 171
            if($msg=='171'){
                echo '<div style="border:1px solid red; background-color:#f5c6cb;">';
                echo 'As senhas informadas não conferem!';
                echo '</div>';
            }
            else if($msg=='173'){
                echo '<div style="border:1px solid red; background-color:#f5c6cb;">';
                echo 'O e-mail informado não é válido!';
                echo '</div>';
            }
            else if($msg=='7'){
                echo '<div style="border:1px solid green; background-color:#d4edda;">';
                echo 'Cadastro do cliente efetuado com sucesso!';
                echo '</div>';
            }
        }
    ?>
    <form method="post" action="controller/clientesController.php">
        <table>
            <tr>
                <td><label>Nome:</label></td>
                <td><input type="text" required placeholder="Insira seu nome aqui." name="nome"></td>
            </tr>
            <tr>
                <td><label>E-mail:</label></td>
                <td><input type="email" required placeholder="Insira seu e-mail aqui." name="email"></td>
            </tr>
            <tr>
                <td><label>Data de nascimento:</label></td>
                <td><input type="date" name="dataNascimento"></td>
            </tr>
            <tr>
                <td><label>Senha:</label></td>
                <td><input type="text" required name="senha" placeholder="Insira a nova senha aqui."></td>
            </tr>
            <tr>
                <td><label>Repita sua senha aqui:</label></td>
                <td><input type="text" required name="senha2" placeholder="Repita sua senha aqui."></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="reset" value="Limpar campos">
                    <input type="submit" value="Cadastrar cliente">
                </td>
            </tr>
        </table>
    </form>
</body>

</html>