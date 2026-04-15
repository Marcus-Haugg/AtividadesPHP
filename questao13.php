<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Pegando os dados do formulário
    $metros = $_POST['metros'];

    echo "Metros em centimetros: " . ($metros * 100);


}  