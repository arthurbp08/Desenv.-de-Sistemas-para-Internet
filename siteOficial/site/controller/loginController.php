<?php
if($_POST){
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    if($email=="a@a" && $senha =='123'){
        header('location:../');
    }
}