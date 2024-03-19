<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina2</title>
</head>
<body>
<?php
     if ($_SERVER["REQUEST_METHOD"]=="POST"){
        $nome = $_POST["nome"];
        echo ('Nome: ' . $email);
        
        $email = $_POST["email"];
        echo('<br>Email: ' . $telefone);

        $telefone = $_POST["telefone"]:
        echo('<br>Telefone: ' . $telefone):
    
        $atuacao = $_POST["atuacao"]:
        echo('<br><br>Atuacao: ' . '<textarea>' . Şatuacao .'</textarea>');
       
        $acesso - $_POST["acesso"];
        echo( <br><br>Acesso:' . $acesso);

        $estado - $_POST["estado"]:
        echo( <br><br>Estado:'. $estado);

        $cidade = $_POST["cidade"]:
        echo( '<br>Cidade: ' . $cidade):
        
    }
?>
</body>
</html>
