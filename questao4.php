<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
     $n1 = $_POST['n1'];
     $n2 = 4.98;
     $resultado = ($n1 / $n2);
     echo "Resultado: $resultado";
}
?>