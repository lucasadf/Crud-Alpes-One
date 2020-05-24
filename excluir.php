<?php
  function banco() 
  {
    $mysqli = new mysqli("localhost", "root", "", "ESTOQUE");
    return $mysqli;
  } 
  banco();

  $nome_produto = $_GET['nome_produto'];
  $result = mysqli_query($mysqli, "DELETE FROM PRODUTO_ESTOQUE WHERE NOME_PRODUTO=$nome_produto");

  echo "Dados deletados com sucesso";
  header("Location: index.php");

?>
