<html>
  
<head>

</head>
  
<body>
  
<?php
  $nome_produto = $_POST['produto'];
  $qt_produto   = $_POST['quantidade'];
  $result = mysqli_query($mysqli, "INSERT INTO ESTOQUE(nome_produto,qt_produto) VALUES('$nome_produto','$qt_produto',)");
?>  

</body>
</html>
