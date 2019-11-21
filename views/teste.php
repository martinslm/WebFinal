<!DOCTYPE html>
<html lang="pt-br">
    

<head>
    <meta charset="utf8">
            <title>Cadastro de Livro</title>
    <link href="../estilos/bootstrap.css" rel="stylesheet" />
    <link href="../estilos/signin.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container-cadastros">
        <form id="form-group col-md-4" name="form1" method="post" action="cadastro_livro.php">
            <br />
            <legend>
                <center>
                    <h2>Cadastro de Livro</h2>
                </center>
            </legend>
            <input type="text" name="Descricao" id="Descricao" class="form-control" placeholder="Descrição do livro" maxlength="20" required />
            <br />
            <!--Ver como trazer os dados-->
            <select type="select" class="form-control" name="autor" required>
                <option value="">Autor</option>
            </select>
            <br />
            <select class="form-control" name="autor" required>
                <option value="">Selecione:</option>
                <?php
                $sql="select * from autor"; 
                $query = mysqli_query($serv,$sql); 
                 
                while ($row = mysqli_fetch_array($query)) 
                { 
                ?>
                    <option value="<?php echo $row['idAutor']; ?>">
                <?php echo $row['NomeAutor']; ?></option>
                <?php }
                ?>
            </select>

            </select>
            <br />
            <select class="form-control" name="autor" required>
                <option value="">Filial</option>
            </select>
            <br />
            <select class="form-control" name="autor" required>
                <option value="">Livro</option>
            </select>
            <br />
            <center>
                <button class="btn btn-lg btn-danger btn block" type="submit" name="enviar">Cadastrar</button>
            </center>

        </form>
    </div>
    <div class="nav">
        <li><a href="../index.php"> Home</a> </li>
    </div>
</body>

</html>