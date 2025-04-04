<?php
$quantidade = $_POST['quantidade'] ?? 0;

echo "<h2>Resultado:</h2>";

for ($i = $quantidade; $i >= 0; $i -= 1) {
	$i -= 1;
    echo "$i <br>";
}
?>
