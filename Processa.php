<?php
session_start();
include_once("Conexao.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FIÇTER_SANITIZE_EMAIL);
//echo "nome: $nome <br>";
//echo "E-mail: $email <br>";

$result_usuario = "INSERT INTO usuarios (nome, email, created) VALUES ('$nome','$email', NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuario);

if(mysqli_insert_id($conn)){
    $_SESSION['msg'] = "<p style='color:green;'>Usuário cadastrado com sucesso</p>";
    header("Location: index.php");

}else{
    $_SESSION['msg'] = "<p style='color:green;'>Usuário não foi cadastrado com sucesso</p>";
    header("Location: index.php");
}
?>