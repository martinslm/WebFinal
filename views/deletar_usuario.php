<?php 
# Inclui o arquivo de conexão 
include("../includes/conexao.php"); 
 
$sql = "delete from usuario where idUsuario='$_GET[CodUsuario]' limit 1"; 

$query = mysqli_query($serv,$sql); 

$login_cookie = $_COOKIE['login'];

$sqlValid  = "SELECT * FROM usuario WHERE login = '$login_cookie' LIMIT 1";

$queryValid = mysqli_query($serv,$sqlValid); 

if (mysqli_num_rows($queryValid) > 0)
{
	header("Location: listar_usuario.php"); 
}
else
{
	header("Location: ../login.html"); 
}

?>   
