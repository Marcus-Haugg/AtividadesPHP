<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
     $n1 = $_POST['n1'];
     $n2 = $_POST['n2'];
      echo "O nome do produto é:$n1<br>";
      echo "Preço:$n2";
}
?>