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
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../bootstrap/css/sticky-footer.css">
    <title>Cloud - Projeto Final - Login</title>
</head>
<body>
<?php include '../partials/menu.php' ?>

<div class="container">
    <div class="col-md-6 col-md-offset-3 text-center"><?php include '../partials/feedbacks.php' ?></div>

    <div class="col-md-4 col-md-offset-4 page-header">
        <h1 class="text-info">Login</h1>
    </div>

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

<footer class="footer">
    <div class="container">
        <small class="pull-left text-muted">Trabalho final da disciplina de Computação em Nuvem</small>
        <small class="pull-right">Lidia Freitas | Wellington Trojan</small>
    </div>
</footer>

</body>
