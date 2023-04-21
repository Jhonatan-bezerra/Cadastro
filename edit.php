<?php
include_once "editController.php"
?>
<!DOCTYPE html>
<html lang="br-pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="Style/style.css" media="screen" />
    <title>Editar Funcionário</title>
</head>

<body>
    <a href="index.php">Voltar</a>
    <div class="box">
        <form action="saveEdit.php" method="POST">
            <fieldset>
                <legend><b>Editar Funcionário</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" value="<?php echo $nome ?>" required>
                    <label for="nome" class="labelInput">Nome</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="sobrenome" id="sobrenome" class="inputUser" value="<?php echo $sobrenome ?>" required>
                    <label for="sobrenome" class="labelInput">Sobrenome</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="tel" name="cargo" id="cargo" class="inputUser" value="<?php echo $cargo ?>" required>
                    <label for="cargo" class="labelInput">Cargo</label>
                </div>
                <br><br>
                <label for="data_nascimento"><b>Data de Nascimento:</b></label>
                <input type="date" name="data_nascimento" id="data_nascimento" value="<?php echo $data_nasc ?>" required>
                <br><br><br>
                <div class="inputBox">
                    <input type="text" onKeyUp="mascaraMoeda(this, event)" name="salario" id="salario" class="inputUser" value="<?php echo $salario ?>" required>
                    <label for="salario" class="labelInput">Salário</label>
                </div>
                <br><br>
                <input type="hidden" name="id" value="<?php echo $id ?>">
                <input type="submit" name="update" id="update">

            </fieldset>
        </form>
    </div>
</body>
<script>
    String.prototype.reverse = function() {
        return this.split('').reverse().join('');
    };

    function mascaraMoeda(campo, evento) {
        var tecla = (!evento) ? window.event.keyCode : evento.which;
        var valor = campo.value.replace(/[^\d]+/gi, '').reverse();
        var resultado = "";
        var mascara = "##.###.###,##".reverse();
        for (var x = 0, y = 0; x < mascara.length && y < valor.length;) {
            if (mascara.charAt(x) != '#') {
                resultado += mascara.charAt(x);
                x++;
            } else {
                resultado += valor.charAt(y);
                y++;
                x++;
            }
        }
        campo.value = resultado.reverse();
    }
</script>

</html>