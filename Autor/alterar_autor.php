<?php 
# Inclui o arquivo de conexão 
include("includes/conexao.php"); 
# comando SQL do banco 
$sql = "UPDATE fornecedor  
           SET Razao   ='$_POST[Razao]',  
           Fantasia='$_POST[Fantasia]'  
        where CodFornecedor='$_POST[CodFornecedor]'"; 
# Executa a consulta da variável 
$query = mysqli_query($serv,$sql); 
header("Location:listar_fornecedores.php"); 
?>  