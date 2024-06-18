<?php
if($_POST){

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    //Validação do usuário
    if($email=='a@a' && $senha =='123'){
        
        //Crio a sessão
        session_start();
        $_SESSION['login'] = $email;

        if(isset($_POST['lembrarEmail']) && $_POST['lembrarEmail']=='1'){
            //Criar o cookie para armazenar o e-mail do usuário
            setcookie('email', $email, time() + (86400 * 30), '/'); // 86400 = 1 day
        }else{
            if(isset($_COOKIE['email'])){
                //Destruir o cookie
                setcookie('email', '', time() - 3600, '/');
            }
        }
        
        header('location:../home.php');
    }else{
        header('location:../index.php?cod=171');
    }

}