<?php

    if(!empty($_GET['id'])){

        include_once('config.php');

        $id = $_GET['id'];

        $sqlselect = "SELECT * FROM funcionarios WHERE id=$id";

        $result = $conexao->query($sqlselect);

        if($result->num_rows > 0){

            while($user_data = mysqli_fetch_assoc($result)){

                $nome = $user_data['nome'];
                $sobrenome = $user_data['sobrenome'];
                $cargo = $user_data['cargo'];
                $data_nasc = $user_data['data_nasc'];
                $salario = $user_data['salario'];
            }

        }else{
            header('Location: index.php');
        }
       
    }
    else{
        header('Location: index.php');
    }

?>