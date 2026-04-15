<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Pegando os dados do formulário
    $numero = $_POST['numero'];

  echo "O tirplo de do número '" . $numero . "' é '" . $numero * $numero * $numero . "'";


}

?>