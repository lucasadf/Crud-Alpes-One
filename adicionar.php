<?php
  $nome_produto = $_GET['nome_produto'];
  $qt_produto   = $_GET['qt_produto'];
  $result = mysqli_query($mysqli, "INSERT INTO ESTOQUE(nome_produto,qt_produto) VALUES('$nome_produto','$qt_produto',)");
?>

<html>
<head>

</head>
<body>
  <table>
    <tbody>
      <tr>
        <td>Produto: </td>
        <td><input type="text" nome_produto="nome_produto" value=""></td>
      </tr>
      <tr>
        <td>Quantidade: </td>
        <td><input type="text" qt_produto="qt_produto" value=""></td>
      </tr>
    </tbody>
  </table> 
</body>
</html>
