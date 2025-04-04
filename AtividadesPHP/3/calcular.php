<?php
$palavra = $_POST['palavra'] ?? '';
$quantidade = $_POST['quantidade'] ?? 0;

echo "<h2>Resultado:</h2>";

    for ($i = 1; $i <= 10; $i++) {
        echo "$i <br>";
    }
?>