<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Pegando os dados do formulário
    $numero = $_POST['numero'];

    for($i = 1; $i <= 10; $i++){
        echo $numero . " x " . $i . " = " . $numero * $i . "<br>";
    }   


}
?>