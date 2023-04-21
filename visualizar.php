<?php
include_once "visualizarController.php"
?>
<!DOCTYPE html>
<html lang="br-pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="Style/style.css" media="screen" />
    <title>Funcionário</title>
</head>

<body>
    <a class="botao" href="index.php">Voltar</a>
    <div class="box">
        <form method="POST">
            <fieldset>
                <legend><b>Funcionário <?php echo $nome ?></b></legend>
                <br>
                <div class="inputBox">
                    <label for="title"><b>Nome:</b></label>
                    <input type="text" name="nome" id="nome" class="inputUser" value="<?php echo $nome ?>" disabled>
                </div>
                <br><br>
                <div class="inputBox">
                    <label for="title"><b>Sobrenome:</b></label>
                    <input type="text" name="sobrenome" id="sobrenome" class="inputUser" value="<?php echo $sobrenome ?>" disabled>
                </div>
                <br><br>
                <div class="inputBox">
                    <label for="title"><b>Cargo:</b></label>
                    <input type="tel" name="cargo" id="cargo" class="inputUser" value="<?php echo $cargo ?>" disabled>
                </div>
                <br><br>
                <label for="data_nascimento"><b>Data de Nascimento:</b></label>
                <input type="date" name="data_nascimento" id="data_nascimento" value="<?php echo $data_nasc ?>" disabled>
                <br><br><br>
                <div class="inputBox">
                    <label for="title"><b>salário:</b></label>
                    <input type="text" name="salario" id="salario" class="inputUser" value="<?php echo $salario ?>" disabled>
                </div>
                <br><br>
                <?php
                $aniversario_funcionario = $data_nasc;

                $mes_aniversario = date('m', strtotime($aniversario_funcionario));

                $mes_atual = date('m');
                if ($mes_aniversario == $mes_atual) {
                    echo "Parabens por mais um ano de vida, Tenhas um dia repleto de felicidades!";
                }
                ?>
                <br><br>
            </fieldset>
        </form>
    </div>
</body>

</html>