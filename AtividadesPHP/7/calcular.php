<?php
$quantidade = $_POST['quantidade'] ?? 0;

echo "<h2>Resultado:</h2>";

    for ($i = 2; $i <= $quantidade; $i++) {
        echo "$i <br>";
		$i = $i + 1;
    }
?>