<?php
session_start();

if (isset($_POST['adicionar'])) {
    if (isset($_POST['nome']) && isset($_POST['cep']) && isset($_POST['cidade']) && isset($_POST['ano'])) {
        $novo = array(
            'nome' => $_POST['nome'],
            'cep' => $_POST['cep'],
            'cidade' => $_POST['cidade'],
            'ano' => $_POST['ano']
        );
        
        if (isset($_SESSION['dados'])) {
            $_SESSION['dados'][] = $novo;
        } else {
            $_SESSION['dados'] = array($novo);
        }
    }
}

if (isset($_POST['salvar'])) {
    if (isset($_SESSION['dados'])) {
        $dados_csv = implode(',', array_keys($_SESSION['dados'][0])) . "\n";
        foreach ($_SESSION['dados'] as $linha) {
            $dados_csv .= implode(',', $linha) . "\n";
        }
        
        file_put_contents('dados.csv', $dados_csv);
        
        header('Location: buscarCampus.php');
        exit();
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Resgate de Conteúdo</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        .container {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .container input {
            margin-right: 10px;
        }
    </style>
    <script>
        $(document).ready(function() {
            var i = 1;
            $('#add_nome').click(function() {
                i++;
                var div = $('<div class="container"></div>');
                div.append('<input type="text" name="nomes[]" placeholder="Nome ' + i + '">');
                div.append('<input type="text" name="cep[]" placeholder="CEP ' + i + '">');
                div.append('<input type="text" name="cidade[]" placeholder="Cidade ' + i + '">');
                div.append('<input type="text" name="ano_nascimento[]" placeholder="Ano de Nascimento ' + i + '">');
                $('#nomes').append(div);
            });
            $('#remove_nome').click(function() {
                if(i > 1) {
                    $('#nomes div:last-child').remove();
                    i--;
                }
            });
        });
         function salvarDados() {
            $('form').attr('action', 'buscarCampus.php');
            $('form').submit();
        }
    </script>
</head>

<body>
    <form method="POST" action="cadastro.php">
        <div id="nomes">
            <div class="container">
                <input type="text" name="nomes[]" placeholder="Nome 1" required>
                <input type="text" name="cep[]" placeholder="CEP 1" required>
                <input type="text" name="cidade[]" placeholder="Cidade 1" required>
                <input type="text" name="ano_nascimento[]" placeholder="Ano de Nascimento 1" required>
            </div>
        </div>
        <button type="button" id="add_nome">Adicionar nome</button>
        <button type="button" id="remove_nome">Remover nome</button>
        <button type="button" onclick="salvarDados()">Salvar Dados</button>
        <br>
        <br>
        <div>
            <label for="opcoes">Opções:</label>
            <select name="opcoes" id="opcoes">
                <option value="opcao1">Opção 1</option>
                <option value="opcao2">Opção 2</option>
                <option value="opcao3">Opção 3</option>
                <option value="opcao4">Opção 4</option>
            </select>
        </div>
       
    </form>

    <form method="post">
    <button type="submit" name="salvar">Salvar</button>
</form>
    <br>
 
</body>
</html>