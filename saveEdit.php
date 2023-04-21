<?php 

    include_once('config.php');

    if(isset($_POST['update'])){

        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        $cargo = $_POST['cargo'];
        $data_nasc = $_POST['data_nascimento'];
        $salario = $_POST['salario'];

        $sqlUpdate = "UPDATE funcionarios SET nome='$nome', sobrenome ='$sobrenome', cargo ='$cargo', data_nasc ='$data_nasc', salario ='$salario' WHERE id='$id'";

        $result = $conexao->query($sqlUpdate);

    }

    header('Location: index.php')

?>