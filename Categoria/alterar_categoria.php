<?php 

include("../includes/conexao.php"); 

$descricao = $_POST['Descricao'];
$idCategoria = $_POST['IdCategoria'];

$sqlValid = "SELECT * FROM categoria WHERE DescricaoCategoria = '$descricao' AND idCategoria != $idCategoria LIMIT 1";

$queryValid = mysqli_query($serv,$sqlValid); 

if (mysqli_num_rows($queryValid) > 0)
{
	echo"<script language='javascript' type='text/javascript'>
        alert('Já existe uma categoria cadastrado com este nome.');window.location
        .href='listar_categoria.php';</script>";
        die(); 
}
else
{	
	$sql = "UPDATE categoria  
	           SET DescricaoCategoria ='$descricao' 
	        where idCategoria= $idCategoria"; 

	$query = mysqli_query($serv,$sql); 
	header("Location:listar_categoria.php"); 
}
?>  