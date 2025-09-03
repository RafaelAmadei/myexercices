<?php
if(isset($_POST["numero"])) {
 $numero = intval(isset($_POST["numero"]));

  echo "<h1>Ver a tabuada do $numero</h1";

  for ($i = 1; $i <= 10; $i++) {
    $resultado = $numero * $i;
    echo "$numero x $i = $resultado<br>";
  }
 } else {
    echo "Nenhum número foi enviado";
  }
  ?>