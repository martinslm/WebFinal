<?php 
# Inclui o arquivo de conexão 
include("includes/conexao.php"); 
# comando SQL do banco 
$sql = "UPDATE livro  
           SET Descricao   ='$_POST[Descricao]',  
        where idLivro='$_POST[idLivro]'"; 
# Executa a consulta da variável 
$query = mysqli_query($serv,$sql); 
header("Location:listar_livro.php"); 
?>  