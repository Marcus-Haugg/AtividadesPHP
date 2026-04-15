<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Pegando os dados do formulário
    $base = $_POST['base'];
    $altura = $_POST['altura'];

    echo "A área do retangulo é: " . ($base * $altura);


}   