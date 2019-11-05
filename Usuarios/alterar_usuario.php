<?php 

include("../includes/conexao.php"); 

$login = $_POST['Login'];
$idUsuario = $_POST['IdUsuario'];

$sqlValid = "SELECT * FROM usuario WHERE login = '$login' AND idUsuario != $idUsuario  LIMIT 1";

$queryValid = mysqli_query($serv,$sqlValid); 

if (mysqli_num_rows($queryValid) > 0)
{
	echo"<script language='javascript' type='text/javascript'>
        alert('Já existe um usuário cadastrado com esse login.');window.location
        .href='listar_usuario.php';</script>";
        die(); 
}
else
{	


	
	$sql = "UPDATE usuario  
	           SET login   ='$login',  
	           senha = '$_POST[Senha]',
	           nome = '$_POST[Nome]'  
	        where idUsuario=$idUsuario"; 

	$query = mysqli_query($serv,$sql); 
	header("Location:listar_usuario.php"); 
}
?>  