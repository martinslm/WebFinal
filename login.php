<?php
include("includes/conexao.php");
$login = $_POST['Usuario'];
$senha = md5($_POST['Senha']);

$sql  = "SELECT * FROM usuario WHERE login = '$login' AND senha = '$senha'";

$query = mysqli_query($serv, $sql);

if (mysqli_num_rows($query) > 0) {

   setcookie("login", $login, time() + 3600);
   header("Location: index.php");
} else {
   echo "<script language='javascript' type='text/javascript'>
        alert('Login e/ou senha incorretos');window.location
        .href='login.html';</script>";
   die();
}