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
			    window.location = "listar_filial.php";  
				}  
			 else 
				window.location = "deletar_filial.php?CodFilial="+id; 
			 } 
		</script>
		
    </head>
<body>

  <table id="data"> 
	<caption><center>Listagem de Filiais</center></caption> 
		<tr>  
			<th>Descrição</th>  
		</tr> 

	<?php 
	include("../includes/conexao.php"); 
	$sql="select * from filial"; 
	$query = mysqli_query($serv,$sql); 
	 
	while ($linha = mysqli_fetch_array($query)) 
		 { 
		  echo "<tr>"; 
		  echo "<td>$linha[DescricaoFilial]      </td>"; 
		  echo "<td style='text-align:center'>"; 
		  
		  echo "<a href='javascript:confirmarExclusao(".$linha['idFilial'].");'>
		        <img src='../imagens/deletar.png' border='0' width='16' height='16' /></a>"; 
		  echo "</td>"; 

		  echo "<td style='text-align:center'>"; 
		  echo "<a href='editar_filial.php?CodFilial=".$linha['idFilial']."'>"; 
		  echo "<img src='../imagens/editar.png' border='0' width='16' height='16' /></a>"; 
		  echo "</td>"; 
		  echo "</tr>\n"; 
		 }   
	?> 
  </table> 
</body>
</html>  