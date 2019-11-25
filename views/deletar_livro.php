<?php 
# Inclui o arquivo de conexão 
include("includes/conexao.php"); 
# comando SQL do banco 
$sql = "delete from livro where idLivro='$_GET[idLivro]' limit 1"; 
# Executa a consulta da variável $sql 
$query = mysqli_query($serv,$sql); header("Location:listar_livro.php");
 ?>   