<?php
$numero = 1;
echo "<h1>Números pares de 1 a 20</h1>";
for ($i = 1; $i <= 20; $i++) {
  if ($i % 2 == 0) {
    echo $numero. "<br>";
  }
  $numero++;
}