<html lang="pt-br">
    <head>
        <meta charset="utf8">
        <title>alterar</title>
        <link href="estilos/main.css" rel="stylesheet" type="text/css" /> 
        <!--link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"-->     
    </head>
<body>

<?php 
	include("../includes/conexao.php"); 
	$sql="select * from usuario where idUsuario='$_GET[CodUsuario]'"; 
	$query = mysqli_query($serv,$sql); 
	$linha = mysqli_fetch_array($query); 
?>  
 
<h1><center>Alterar Usuário</center></h1> 
<form id="form1" name="form1" method="post" action="alterar_usuario.php"> 

<fieldset> 
	<legend>Dados Usuário</legend> 
    <input name="IdUsuario" id="IdUsuario" value="<?php echo $linha['idUsuario'];?>" type="hidden"/>

	<label for="Nome">Nome: </label> 
    <input type="text"  name="Nome" id="Nome" value="<?php echo $linha['nome'];?>" /><br /> 
	
    <label for="Login">Login:</label> 
    <input type="text"  name="Login" id="Login"  value="<?php echo $linha['login'];?>"/><br/> 
	<label for="Senha">     Senha:      </label> 
    <input type="password"  name="Senha" id="Senha" value="<?php echo $linha['senha'];?>"/><br /> 
	<input name="enviar" type="submit" class="btn btn-light" value="Alterar" /> 
</fieldset> 
</form>  



</body>
</html> 

