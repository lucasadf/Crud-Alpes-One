<html lang="pt">
<head>    

</head>
 
<body>
    <a href="add.html">Adicionar produtos</a><br/><br/>
 
    <table>
        <tr>
            <td>Produto</td>
            <td>Quantidade</td>
            <td>Ação</td>
        </tr>
        <?php 
          function banco() 
          {
            $mysqli = new mysqli("localhost", "root", "", "ESTOQUE");
            return $mysqli;
          }
          banco()
          $result = mysqli_query($mysqli, "SELECT * FROM ESTOQUE ORDER BY NOME_PRODUTO");
          while($res = mysqli_fetch_array($result)) 
              {         
            echo "<tr>";
            echo "<td>".$res['nome_produto']."</td>";
            echo "<td>".$res['qt_produto']."</td>";   
            echo "<td><a href=\"edit.php?id=$res[id]\">Editar</a> | <a href=\"delete.php?nome_produto=$res[nome_produto]\" onClick=\"return confirm('Deseja deletar?')\">Deletar</a></td>";        
              }
        ?>
    </table>
</body>
</html>
