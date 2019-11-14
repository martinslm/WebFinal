<html lang="pt-br">
    <head>
        <meta charset="utf8">
        <title>alterar</title>
        <link href="../estilos/main.css" rel="stylesheet" type="text/css" /> 
    </head>
<body>



<?php 
	include("../includes/conexao.php"); 
	$sql="select * from categoria where idCategoria='$_GET[CodCategoria]'"; 
	$query = mysqli_query($serv,$sql); 
	$linha = mysqli_fetch_array($query); 
?>  
 
<h1><center>Alterar Categoria</center></h1> 
<form id="form1" name="form1" method="post" action="alterar_categoria.php"> 

<fieldset> 
	<legend>Dados Categoria</legend> 
	<input name="IdCategoria" id="IdCategoria" value="<?php echo $linha['idCategoria'];?>" type="hidden"/>
    <label for="Descricao">Descrição Categoria: </label> 
    <input type="text"  name="Descricao" id="Descricao" value="<?php echo $linha['DescricaoCategoria'];?>" /><br /> 
    <input name="enviar" type="submit" class="btn btn-light" value="Alterar" /></fieldset> 
</form>  



</body>
</html> 

