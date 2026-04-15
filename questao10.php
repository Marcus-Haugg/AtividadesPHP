<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Pegando os dados do formulário
    $numero = $_POST['numero'];

    echo "A sua idade é: " . (2026 - $numero);

    if($numero < 18){
        echo "Você é menor de idade";
    }else{
        echo "Você é maior de idade";
    }


}
?>