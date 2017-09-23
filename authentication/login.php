<?php
/**
 * Created by PhpStorm.
 * User: Lidia Freitas
 * Date: 19/09/2017
 * Time: 19:47
 */
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
    <title>Cloud - Projeto Final - Login</title>
</head>
<body>
<?php include '../partials/menu.php' ?>

<div class="container">
    <div class="col-md-4 col-md-offset-4"><?php include '../partials/feedbacks.php' ?></div>

    <h1 class="col-md-4 col-md-offset-4 text text-info">Login</h1>

    <form class="col-md-4 col-md-offset-4" name="login" action="script_login.php" method="post">
        <fieldset class="form-group">
            <label for="usuario">Nome de Usuário:</label>
            <input type="text" name="name" id="usuario"  class="form-control">
        </fieldset>

        <fieldset class="form-group">
            <label for="senha">Senha:</label>
            <input type="password" name="password" id="senha"  class="form-control">
        </fieldset>

        <input type="submit" name="acessar" class="btn btn-success" value="Acessar">
        <a href="register.php" class="btn btn-link">Cadastrar-se</a>
    </form>
</div>
</body>
