<html lang="pt-br">
    <head>
        <meta charset="utf8">
        <title>Listagem</title>
        <link href="../estilos/main.css" rel="stylesheet" type="text/css" /> 

        <script type="text/javascript"> 
		function confirmarExclusao(id) 
		     {  
			 var resposta = confirm("Tem certeza que quer excluir o registro? Se o usuário a ser excluído estiver logado, a conexão será derrubada.");  
			 if (resposta == false) 
			    {   
			    window.location = "listar_usuario.php";  
				}  
			 else 
				window.location = "deletar_usuario.php?CodUsuario="+id; 
			 } 
		</script>
		
    </head>
<body>

  <table id="data"> 
	<caption><center>Listagem de Usuarios</center></caption> 
		<tr>  
			<th>Nome</th>  
			<th>Login</th>  
		</tr> 

	<?php 
	include("../includes/conexao.php"); 
	$sql="select * from usuario"; 
	$query = mysqli_query($serv,$sql); 
	 
	while ($linha = mysqli_fetch_array($query)) 
		 { 
		  echo "<tr>"; 
		  echo "<td>$linha[nome]      </td>"; 
		  echo "<td>$linha[login]              </td>";
		  echo "<td style='text-align:center'>"; 
		  
		  echo "<a href='javascript:confirmarExclusao(".$linha['idUsuario'].");'>
		        <img src='../imagens/deletar.png' border='0' width='16' height='16' /></a>"; 
		  echo "</td>"; 

		  echo "<td style='text-align:center'>"; 
		  echo "<a href='editar_usuario.php?CodUsuario=".$linha['idUsuario']."'>"; 
		  echo "<img src='../imagens/editar.png' border='0' width='16' height='16' /></a>"; 
		  echo "</td>"; 
		  echo "</tr>\n"; 
		 }   
	?> 
  </table> 
</body>
</html>  