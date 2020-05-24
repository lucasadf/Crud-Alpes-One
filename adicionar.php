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
    echo <a href="index.php">Home</a>;
  }
  
 else
  {  
    $result = mysqli_query($mysqli, "INSERT INTO ESTOQUE(nome_produto,qt_produto) VALUES('$nome_produto','$qt_produto',)");
  } 
?>  

</body>
</html>
