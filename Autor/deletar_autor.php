<?php 
# Inclui o arquivo de conexão 
include("includes/conexao.php"); 
# comando SQL do banco 
$sql = "delete from fornecedor where CodFornecedor='$_GET[CodFornecedor]' limit 1"; 
# Executa a consulta da variável $sql 
$query = mysqli_query($serv,$sql); header("Location:listar_fornecedores.php");
 ?>   