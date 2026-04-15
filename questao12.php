<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
     $n1 = $_POST['n1'];
     $n2 = $_POST['n2'];
     echo "Boas-vindas: $n1 $n2";
}
?>