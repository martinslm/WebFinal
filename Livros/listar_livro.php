<html lang="pt-br">
    <head>
        <meta charset="utf8">
        <title>Listagem</title>
        <link href="estilos/main.css" rel="stylesheet" type="text/css" /> 

        <script type="text/javascript"> 
		function confirmarExclusao(id) 
		     {  
			 var resposta = confirm("Tem certeza que quer excluir o registro?");  
			 if (resposta == false) 
			    {   
			    window.location = "listar_fornecedores.php";  
				}  
			 else 
				window.location = "deletar_fornecedor.php?CodFornecedor="+id; 
			 } 
		</script>
		
    </head>
<body>

  <table id="data"> 
	<caption><center>Listagem de Fornecedores</center></caption> 
		<tr>  
			<th>CodFornecedor</th>  
			<th>Razao</th>  
			<th>Fantasia</th>
			<th>Endereco</th>
			<th>Complemento</th>
			<th>Bairro</th> 
			<th>Cidade</th> 
			<th>CEP</th> 
			<th>UF</th> 
			<th>Fone</th> 
			<th>Fax</th> 
			<th>Email</th> 
			<th>www</th> 
			<th>cnpj</th> 
			<th>InscricaoEstadual</th> 
			<th>Excluir</th>  
			<th>Alterar</th> 
		</tr> 

	<?php 
	include("includes/conexao.php"); 
	$sql="select * from fornecedor"; 
	$query = mysqli_query($serv,$sql); 
	 
	while ($linha = mysqli_fetch_array($query)) 
		 { 
		  echo "<tr>"; 
		  echo "<td>$linha[CodFornecedor]      </td>"; 
		  echo "<td>$linha[Razao]              </td>"; 
		  echo "<td>$linha[Fantasia]           </td>"; 
		  echo "<td>$linha[Endereco]           </td>"; 
		  echo "<td>$linha[Complemento]        </td>"; 
		  echo "<td>$linha[Bairro]             </td>"; 
		  echo "<td>$linha[Cidade]             </td>"; 
		  echo "<td>$linha[CEP]                </td>"; 
		  echo "<td>$linha[UF]                 </td>"; 
		  echo "<td>$linha[Fone]               </td>"; 
		  echo "<td>$linha[Fax]                </td>"; 
		  echo "<td>$linha[Email]              </td>"; 
		  echo "<td>$linha[www]                </td>"; 
		  echo "<td>$linha[cnpj]               </td>"; 
		  echo "<td>$linha[InscricaoEstadual]  </td>"; 
		  # inclui uma imagem que se clicada executa o javascript confirmarExclusao 
		  echo "<td style='text-align:center'>"; 
		  echo "<a href='javascript:confirmarExclusao(".$linha['CodFornecedor'].");'>
		        <img src='imagens/deletar.png' border='0' width='16' height='16' /></a>"; 
		  echo "</td>"; 
		  # inclui uma imagem que se clicada executa a pagina editar_fornecedor.php
		  echo "<td style='text-align:center'>"; 
		  echo "<a href='editar_fornecedor.php?CodFornecedor=".$linha['CodFornecedor']."'>"; 
		  echo "<img src='imagens/editar.png' border='0' width='16' height='16' /></a>"; 
		  echo "</td>"; 
		  echo "</tr>\n"; 
		 }   
	?> 
  </table> 
</body>
</html>  