<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Cadastro de clientes</title>
</head>

<body>
   
    
    <h2>Cadastro de clientes</h2>
    <form method="POST" action="controller/clientesController.php">
        <table>
            <tr>
                <td><label>Nome:</label></td>
                <td><input type="text" name="nome" placeholder="Insira seu nome"></td>
            </tr>

            <tr>
                <td><label>Email:</label></td>
                <td><input type="text" name="email" placeholder="Insira seu email"></td>
            </tr>

            <tr>
                <td><label>Data de nascimento:</label></td>
                <td><input type="date" name="data"></td>
            </tr>

            <tr>
                <td><label>Senha:</label></td>
                <td><input type="text" name="senha" placeholder="Insira sua senha"></td>
            </tr>

            <tr>
                <td><label>Senha:</label></td>
                <td><input type="text" name="senha2" placeholder="Repita a senha"></td>
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
    
    <?php
    //Se existirem query strings captura
    if ($_REQUEST) {
        $cod = $_REQUEST['cod'];
        //Senha errada - Cod = 171
        if ($msg = '171'){
           
            echo '<div style="border:1px solid red; background-color:#f5c6cb;">';
            echo 'As senhas informadas não conferem!';
            echo '</div>';
        }
    }
    ?>

</body>

</html>