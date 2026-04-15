<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
     $n1 = $_POST['n1'];
     $resultado =$n1 * $n1;
     echo "Resultado: $resultado";
}
?>