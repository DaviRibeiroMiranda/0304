<?php
$intervalo = $_POST['intervalo'] ?? 0;
$quantidade = $_POST['quantidade'] ?? 0;

echo "<h2>Resultado:</h2>";

if (is_numeric($quantidade) && $quantidade > 0 && $intervalo > 0) {
    for ($i = 1; $i <= $quantidade; $i++) {
        echo "$i <br>";
		$i += $intervalo - 1;
    }
	echo "$quantidade";
} else {
    echo "Quantidade inválida.";
}
?>