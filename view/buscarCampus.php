<?php
session_start();

if (isset($_SESSION['dados'])) {
    $headers = array_keys($_SESSION['dados'][0]);
    $linhas = array();
    foreach ($_SESSION['dados'] as $linha) {
        $linhas[] = implode(',', $linha);
    }
    $dados_csv = implode("\n", array_merge(array($headers), $linhas));
    
    header('Content-Type: application/csv');
    header('Content-Disposition: attachment; filename="dados.csv"');
    echo $dados_csv;
    exit();
} else {
    echo 'Nenhum dado encontrado.';
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Buscar Campus</title>
</head>
<body>

	<h1>Todos os Dados Cadastrados:</h1>

	<?php
		// Verifica se a sessão foi iniciada
		if (session_status() == PHP_SESSION_NONE) {
		    session_start();
		}

		// Verifica se existem dados salvos na sessão
		if (isset($_SESSION['dados'])) {
			// Imprime os dados salvos na sessão
			foreach ($_SESSION['dados'] as $dado) {
				echo implode(", ", $dado) . "<br>";
			}
		} else {
			// Caso contrário, exibe uma mensagem informando que nenhum dado foi encontrado
			echo "Nenhum dado encontrado.";
		}
	?>

</body>
</html>