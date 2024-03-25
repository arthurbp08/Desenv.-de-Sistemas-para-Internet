<?php
   
    if ($_GET){
       
        $nome = $_GET['nome'];
        $precoCusto = $_GET['precoCusto'];
        
        echo'O produto '.$nome.' foi cadastrado com sucesso. <br>';
        echo 'O preço informado foi de '.$precoCusto.' reais';
    }

    else{
        echo 'Você não pode acessar diretamente essa página!';
        //se não vier de get redireciona para a pagina cadastro produtos
        header('location:../cadastroprodutos.html');
    }

?>