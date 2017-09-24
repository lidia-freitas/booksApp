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
    <link rel="stylesheet" href="../bootstrap/css/sticky-footer.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Cloud - Projeto Final - Cadastro de Usuário</title>
</head>
<body>
<?php include $_SERVER["DOCUMENT_ROOT"] . '/booksApp/partials/menu.php' ?>

<div class="container">
    <div class="col-md-6 col-md-offset-3 text-center"><?php include $_SERVER["DOCUMENT_ROOT"] . '/booksApp/partials/feedbacks.php' ?></div>

    <div class="col-md-4 col-md-offset-4 page-header">
        <h1 class="text-info">Crie sua conta</h1>
    </div>

    <form class="col-md-4 col-md-offset-4" name="cadastrar_usuario" action="script_register.php" method="post">
        <fieldset class="form-group">
            <label for="usuario">Nome de Usuário:</label>
            <input type="text" name="name" id="usuario" class="form-control">
        </fieldset>

        <fieldset class="form-group">
            <label for="email">E-mail:</label>
            <input type="email" name="email" id="email" class="form-control">
        </fieldset>

        <fieldset class="form-group">
            <label for="senha">Senha:</label>
            <input type="password" name="password" id="senha" class="form-control">
        </fieldset>

        <fieldset class="form-group">
            <label for="role">Tipo de usuário</label>
            <select name="role" id="role" class="form-control">
                <option value="0">Administrador</option>
                <option value="1">Usuário</option>
            </select>
        </fieldset>

        <input type="submit" name="cadastrar" class="btn btn-success" value="Cadastrar">
    </form>
</div>

<footer class="footer">
    <div class="container">
        <span class="pull-left text-muted">Trabalho final da disciplina de Computação em Nuvem</span>
        <span class="pull-right">Lidia Freitas | Wellington Trojan</span>
    </div>
</footer>
</body>
