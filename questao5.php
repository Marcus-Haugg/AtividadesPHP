<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Pegando os dados do formulário
    $numero = $_POST['numero'];

  echo 'numero' . $numero . 'em Fahrenheit é' . ($numero * 1.8) + 32;


}
?>