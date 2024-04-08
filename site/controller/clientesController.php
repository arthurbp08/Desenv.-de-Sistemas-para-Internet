<!DOCTYPE html>
    <?php
       if($_POST){

        $nome=$_POST['nome'];
        $email=$_POST['email'];
        $data=$_POST['data'];
        $senha=$_POST['senha'];
        $senha2=$_POST['senha2'];
        
        if($senha==$senha2){
            //cadastro o usuario
            echo ' As senhas conferem';
        }

        else{
            header('location:../cadastroclientes.php?cod=171');
        }
       }

       else{
          header('location:../cadastroclientes.php');
       }

    ?>
    
</body>
</html>