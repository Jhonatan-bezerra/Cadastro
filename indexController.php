<?php

    session_start();
    include_once('config.php');

    $sql = "SELECT * FROM funcionarios ORDER BY id DESC";

    $result = $conexao->query($sql);

?>