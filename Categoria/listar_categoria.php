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
			    window.location = "listar_cateogoria.php";  
				}  
			 else 
				window.location = "deletar_categoria.php?CodCategoria="+id; 
			 } 
		</script>
    </head>
<body>

  <table id="data"> 
	<caption><center>Listagem de Categorias</center></caption> 
		<tr>  
			<th>Descrição</th>  
		</tr> 

	<?php 
	include("../includes/conexao.php"); 
	$sql="select * from categoria"; 
	$query = mysqli_query($serv,$sql); 
	 
	while ($linha = mysqli_fetch_array($query)) 
		 { 
		  echo "<tr>"; 
		  echo "<td>$linha[DescricaoCategoria]      </td>"; 
		  echo "<td style='text-align:center'>"; 
		  echo "<a href='javascript:confirmarExclusao(".$linha['idCategoria'].");'>
		        <img src='../imagens/deletar.png' border='0' width='16' height='16' /></a>"; 
		  echo "</td>"; 
		  echo "<td style='text-align:center'>"; 
		  echo "<a href='editar_categoria.php?CodCategoria=".$linha['idCategoria']."'>"; 
		  echo "<img src='../imagens/editar.png' border='0' width='16' height='16' /></a>"; 
		  echo "</td>"; 
		  echo "</tr>\n"; 
		 }   
	?> 
  </table> 
</body>
</html>  