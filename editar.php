<?php
function banco() 
{
  $mysqli = new mysqli("localhost", "root", "", "ESTOQUE");
  return $mysqli;
}
  
banco();

$nome_aux = $_GET['nome_produto'];
$nome_produto = $_POST['produto'];
$qt_produto   = $_POST['quantidade'];
  
if(empty($nome_produto) || empty($qt_produto)) 
{
  echo "Favor prencheer todos os campos";
  header("Location: index.php");
}

else 
{    
  $result = mysqli_query($mysqli, "UPDATE ESTOQUE SET nome_produto='$nome_produto',qt_produto='$qt_produto' WHERE nome_produto=$nome_aux");
  header("Location: index.php");
}

?>

<html>
<head>    

</head>
 
<body>
  <form action="editar.php" method="post" name="Editar estoque">
    <table>
      <tr> 
        <td>Produto</td>
        <td><input type="text" name="Produto"></td>
      </tr>
      <tr> 
        <td>Quantidade</td>
        <td><input type="text" name="Quantidade"></td>
      </tr>
      <tr> 
        <td></td>
        <td><input type="submit" name="Editar" value="Editar"></td>
      </tr>
        </table>
  </form>
</body>
</html>









