<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Cadastrar</title>
    </head>
    <body>
        <h1>Cadastrar Usuário</h1>
        <?php 
        if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
        ?>
        <form method="POST" action="processa.php">
            <label> Nome: </label>
            <input type="text" name="nome" placeholder="Digite seu nome todo"><br><br>
            <form method="POST" action="processa.php">
            <label> E-mail: </label>
            <input type="text" name="email" placeholder="Coloque seu email"><br><br>
            <input type="submit" value="Cadastrar">
    </form>
    </body>
</html>