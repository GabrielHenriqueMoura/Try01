<?php
    if(isset($_POST['nomes']) && isset($_POST['ceps']) && isset($_POST['cidades']) && isset($_POST['anos_nasc'])){
        for($i=0; $i<count($_POST['nomes']); $i++) {
            $nome = $_POST['nomes'][$i];
            $cep = $_POST['ceps'][$i];
            $cidade = $_POST['cidades'][$i];
            $ano_nasc = $_POST['anos_nasc'][$i];
            echo "Nome: ".$nome."</br>";
            echo "CEP: ".$cep."</br>";
            echo "Cidade: ".$cidade."</br>";
            echo "Ano de Nascimento: ".$ano_nasc."</br>";
        }
    }
?>