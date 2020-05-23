<?php
$result = mysqli_query($mysqli, "SELECT * FROM ESTOQUE ORDER BY PRODUTO");
?>
 
<html lang="pt">
<head>    
    <title>Estoque</title>
</head>
 
<body>
    <a href="add.html">Adicionar produtos</a><br/><br/>
 
    <table width='80%' border=0>
        <tr>
            <td>Produto</td>
            <td>Quantidade</td>
            <td>Ação</td>
        </tr>
        <?php 
        while($res = mysqli_fetch_array($result)) {         
            echo "<tr>";
            echo "<td>".$res['nome_produto']."</td>";
            echo "<td>".$res['qt_produto']."</td>";   
            echo "<td><a href=\"edit.php?id=$res[id]\">Editar</a> | <a href=\"delete.php?id=$res[nome_produto]\" onClick=\"return confirm('Deseja deletar?')\">Deletar</a></td>";        
        }
        ?>
    </table>
</body>
</html>
