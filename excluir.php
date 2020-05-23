<?php

  $nome_produto = $_GET['nome_produto'];
  $result = mysqli_query($mysqli, "DELETE FROM ESTOQUE WHERE NOME_PRODUTO=$nome_produto");

?>
