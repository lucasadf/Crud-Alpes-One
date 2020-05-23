<?php

  $produto = $_GET['produto'];
  $result = mysqli_query($mysqli, "DELETE FROM ESTOQUE WHERE NOME_PRODUTO=$produto");

?>
