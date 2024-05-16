<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de clientes</title>
    <link href="css/cadastroStyle.css" rel="stylesheet" type="text/css">
</head>

<body>


    <?php
    //Se existirem query strings captura.
    if ($_REQUEST) {
        $msg = $_REQUEST['cod'];
        //Senha errada - Cod= 171
        if ($msg == '171') {
            echo '<div style="border:1px solid red; background-color:#f5c6cb;">';
            echo 'As senhas informadas não conferem!';
            echo '</div>';
        } else if ($msg == '173') {
            echo '<div style="border:1px solid red; background-color:#f5c6cb;">';
            echo 'O e-mail informado não é válido!';
            echo '</div>';
        } else if ($msg == '7') {
            echo '<div style="border:1px solid green; background-color:#d4edda;">';
            echo 'Cadastro do cliente efetuado com sucesso!';
            echo '</div>';
        }
    }
    ?>

    <form method="post" action="controller/clientesController.php">

        <div class="form">

            <h1>Cadastro Clientes</h1>
            
            <label>Nome:</label>
            <input type="text" required placeholder="Insira seu nome aqui." name="nome">

            <label>E-mail:</label>
            <input type="email" required placeholder="Insira seu e-mail aqui." name="email">

            <label>Data de nascimento:</label>
            <input type="date" name="dataNascimento">

            <label>Senha:</label>
            <input type="text" required name="senha" placeholder="Insira a nova senha aqui.">

            <label>Repita sua senha aqui:</label>
            <input type="text" required name="senha2" placeholder="Repita sua senha aqui.">

            <input type="reset" value="Limpar campos">
            <input type="submit" value="Cadastrar cliente">
        </div>
    </form>

</body>

</html>