<?php
$quantidade = $_POST['quantidade'] ?? 0;
$u = 0;

echo "<h2>Resultado:</h2>";

    for ($i = 2; $i <= 10; $i++) {
		$u = $i * $quantidade; 
        echo "$i x $quantidade + $u <br>";
    }
?>