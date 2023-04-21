<?php

    if(isset($_POST['submit'])){

        include_once('config.php');

        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        $cargo = $_POST['cargo'];
        $data_nasc = $_POST['data_nascimento'];
        $salario = $_POST['salario'];

        $result = mysqli_query($conexao, "INSERT INTO funcionarios(nome, sobrenome, cargo, data_nasc, salario) VALUES ('$nome', '$sobrenome', '$cargo', '$data_nasc','$salario')");

        header('Location: index.php');
    }

?>