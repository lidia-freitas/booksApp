<?php include '../lock.php';
/**
 * Created by PhpStorm.
 * User: Lidia Freitas
 * Date: 23/09/2017
 * Time: 13:32
 */
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../bootstrap/css/sticky-footer.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Cloud - Books App - Gerenciar perfil</title>
</head>
<body>
<?php include '../partials/menu.php' ?>
<?php include 'script_users_get_one.php' ?>

<div class="container">
    <div class="col-md-12"><?php include '../partials/feedbacks.php' ?></div>

    <div class="page-header">
        <h1 class="text text-info">Gerenciar perfil</h1>
    </div>

    <form class="col-lg-5" action="script_users_edit.php" method="post">
        <fieldset class="form-group">
            <label for="usuario">Nome de Usuário:</label>
            <input type="text" name="name" id="usuario" class="form-control"
                   value="<?php echo $row['name']; ?>">
        </fieldset>

        <fieldset class="form-group">
            <label for="email">E-mail:</label>
            <input type="email" name="email" id="email" class="form-control"
                   value="<?php echo $row['email']; ?>">
        </fieldset>

        <fieldset class="form-group">
            <input type="hidden" name="user_id" value="<?php echo $row['user_id']; ?>">
            <input type="submit" class="btn btn-primary btn-warning" value="Salvar">
        </fieldset>
    </form>

</div>

<footer class="footer">
    <div class="container">
        <small class="pull-left text-muted">Trabalho final da disciplina de Computação em Nuvem</small>
        <small class="pull-right">Lidia Freitas | Wellington Trojan</small>
    </div>
</footer>

<script src="../bootstrap/js/jquery.min.js"></script>
<script src="../bootstrap/js/bootstrap.js"></script>
</body>
</html>
