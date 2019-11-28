<?php 

include("../includes/conexao.php"); 

$descricao = $_POST['Descricao'];
$idLivro = $_POST['idLivro'];

$sqlValid = "SELECT * FROM livro WHERE Descricao = '$descricao' AND idLivro != $idLivro LIMIT 1";

$queryValid = mysqli_query($serv,$sqlValid); 

if (mysqli_num_rows($queryValid) > 0)
{
	echo"<script language='javascript' type='text/javascript'>
        alert('Já existe uma filial cadastrada com este nome.');window.location
        .href='listar_livro.php';</script>";
        die(); 
}
else
{	
	$sql = "UPDATE livro  
	           SET Descricao ='$_POST[Descricao]',
	        where idLivro='$_POST[idLivro]'";

	$query = mysqli_query($serv,$sql); 
	header("Location:listar_livro.php"); 
}
?>  