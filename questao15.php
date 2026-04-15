<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Pegando os dados do formulário
    $numero = $_POST['numero'];

    if($numero > 0){
        echo "O número é positivo";
    }else if($numero < 0){
        echo "O número é negativo";
    }else{
        echo "O número é zero";
    }


}
?>