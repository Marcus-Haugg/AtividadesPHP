<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
     $n1 = $_POST['n1'];
     $n2 = $_POST['n2'];
     $resultado = $n1 / $n2;
     echo "cada um ira pagar: $resultado";
}
?>