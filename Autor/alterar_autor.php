<?php 

include("../includes/conexao.php"); 

$descricao = $_POST['Descricao'];
$idAutor = $_POST['IdAutor'];

$sqlValid = "SELECT * FROM autor WHERE NomeAutor = '$descricao' AND idAutor != $idAutor LIMIT 1";

$queryValid = mysqli_query($serv,$sqlValid); 

if (mysqli_num_rows($queryValid) > 0)
{
	echo"<script language='javascript' type='text/javascript'>
        alert('Já existe um autor cadastrado com este nome.');window.location
        .href='listar_autor.php';</script>";
        die(); 
}
else
{	
	$sql = "UPDATE autor  
	           SET NomeAutor   ='$descricao' 
	        where idAutor=$idAutor"; 

	$query = mysqli_query($serv,$sql); 
	header("Location:listar_autor.php"); 
}
?>  