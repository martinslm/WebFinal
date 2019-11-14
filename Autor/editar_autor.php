<html lang="pt-br">
    <head>
        <meta charset="utf8">
        <title>alterar</title>
        <link href="estilos/main.css" rel="stylesheet" type="text/css" /> 
    </head>
<body>



<?php 
	include("../includes/conexao.php"); 
	$sql="select * from autor where idAutor='$_GET[CodAutor]'"; 
	$query = mysqli_query($serv,$sql); 
	$linha = mysqli_fetch_array($query);
?>  
 
<h1><center>Alterar Autor</center></h1> 
<form id="form1" name="form1" method="post" action="alterar_autor.php"> 

<fieldset> 
    <legend>Dados Autor</legend> 
    <input name="IdAutor" id="IdAutor" value="<?php echo $linha['idAutor'];?>" type="hidden"/>
    <label for="Descricao">Descrição Autor: </label> 
    <input type="text"  name="Descricao" id="Descricao" value="<?php echo $linha['NomeAutor'];?>" /><br /> 
    <input name="enviar" type="submit" class="btn btn-light" value="Alterar" /> 
</form>  
</fieldset>
</body>
</html> 

