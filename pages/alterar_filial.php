<?php 

include("../includes/conexao.php"); 

$descricao = $_POST['Descricao'];
$idFilial = $_POST['IdFilial'];

$sqlValid = "SELECT * FROM filial WHERE DescricaoFilial = '$descricao' AND idFiliall != $idFilial LIMIT 1";

$queryValid = mysqli_query($serv,$sqlValid); 

if (mysqli_num_rows($queryValid) > 0)
{
	echo"<script language='javascript' type='text/javascript'>
        alert('Já existe uma filial cadastrada com este nome.');window.location
        .href='listar_filial.php';</script>";
        die(); 
}
else
{	
	$sql = "UPDATE filial  
	           SET DescricaoFilial ='$descricao' 
	        where idFilial= $idFilial"; 

	$query = mysqli_query($serv,$sql); 
	header("Location:listar_filial.php"); 
}
?>  