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
    <title>Cloud - Projeto Final - Cadastro de Usuário</title>
</head>
<body>
<?php include '../partials/menu.php' ?>

<div class="container">
    <div class="col-md-10"><?php include '../partials/feedbacks.php' ?></div>

    <h1 class="col-md-4 col-md-offset-4 text text-info">Crie sua conta</h1>

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
                <option value="0">Admin</option>
                <option value="1">Usuário</option>
            </select>
        </fieldset>

        <input type="submit" name="cadastrar" class="btn btn-success" value="Cadastrar">
    </form>
</div>
</body>
