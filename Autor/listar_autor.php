<html lang="pt-br">
    <head>
        <meta charset="utf8">
        <title>Listagem</title>
        <link href="../estilos/main.css" rel="stylesheet" type="text/css" /> 

        <script type="text/javascript"> 
		function confirmarExclusao(id) 
		     {  
			 var resposta = confirm("Tem certeza que quer excluir o registro?");  
			 if (resposta == false) 
			    {   
			    window.location = "listar_autor.php";  
				}  
			 else 
				window.location = "deletar_autor.php?CodAutor="+id; 
			 } 
		</script>
		
    </head>
<body>

  <table id="data"> 
	<caption><center>Listagem de Autores</center></caption> 
		<tr>  
			<th>Descrição</th>  
		</tr> 

	<?php 
	include("../includes/conexao.php"); 
	$sql="select * from autor"; 
	$query = mysqli_query($serv,$sql); 
	 
	while ($linha = mysqli_fetch_array($query)) 
		 { 
		  echo "<tr>"; 
		  echo "<td>$linha[NomeAutor]      </td>"; 
		  echo "<td style='text-align:center'>"; 
		  
		  echo "<a href='javascript:confirmarExclusao(".$linha['idAutor'].");'>
		        <img src='../imagens/deletar.png' border='0' width='16' height='16' /></a>"; 
		  echo "</td>"; 

		  echo "<td style='text-align:center'>"; 
		  echo "<a href='editar_autor.php?CodAutor=".$linha['idAutor']."'>"; 
		  echo "<img src='../imagens/editar.png' border='0' width='16' height='16' /></a>"; 
		  echo "</td>"; 
		  echo "</tr>\n"; 
		 }   
	?> 
  </table> 
</body>
</html>  