<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de clientes</title>
    <link href="css/cadastroStyle.css" rel="stylesheet" type="text/css">
</head>

<body>
    <form method="post" action="controller/clientesController.php">

        <div class="form">

            <h1>Cadastro Clientes</h1>

            <label>Nome:</label>
            <input type="text" required placeholder="Insira seu nome aqui." name="nome">

            <label>E-mail:</label>
            <input type="email" required placeholder="Insira seu e-mail aqui." name="email">

            <label>CPF:</label>
            <input type="number" name="CPF" required placeholder="Insira seu CPF aqui.">

            <label>Senha:</label>
            <input type="text" required name="senha" placeholder="Insira a nova senha aqui.">

            <label>Repita sua senha aqui:</label>
            <input type="text" required name="senha2" placeholder="Repita sua senha aqui.">

            <input type="reset" value="Limpar campos">
            <input type="submit" value="Cadastrar cliente">
            <?php

if ($_REQUEST) {
    $msg = $_REQUEST['cod'];

    if ($msg == '171') {
       
        echo 'As senhas informadas não conferem!';
        
    } else if ($msg == '173') {
       
        echo 'O e-mail informado não é válido!';
        
    } else if ($msg == '7') {
       
        echo 'Cadastro do cliente efetuado com sucesso!';
       
    }
}
?>
        </div>
    </form>
</body>

</html>