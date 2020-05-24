<html>
  
<head>

</head>
  
<body>
  
<?php
  function banco() 
  {
    $mysqli = new mysqli("localhost", "root", "", "ESTOQUE");
    return $mysqli;
  }
  
  banco();
  
  $nome_produto = $_POST['produto'];
  $qt_produto   = $_POST['quantidade'];
  
  if(empty($nome_produto) || empty($qt_produto)) 
  {
    echo "Favor prencheer todos os campos";
    echo <a href="index.php">Estoque</a>;
  }
  
 else
  {  
    $result = mysqli_query($mysqli, "INSERT INTO ESTOQUE(nome_produto,qt_produto) VALUES('$nome_produto','$qt_produto',)");
    echo "Dados inseridos com sucesso";
    echo <a href="index.php">Estoque</a>;
  } 
?>  

</body>
</html>
