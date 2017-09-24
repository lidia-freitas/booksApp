<?php include '../lock.php';
/**
 * Created by PhpStorm.
 * User: Lidia Freitas
 * Date: 23/09/2017
 * Time: 15:43
 */

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../bootstrap/css/sticky-footer.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Cloud - Books App - Alterar senha</title>
</head>
<body>
<?php include '../partials/menu.php' ?>
<?php include 'script_users_get_one.php' ?>

<div class="container">
    <div class="col-md-12"><?php include '../partials/feedbacks.php' ?></div>

    <div class="page-header">
        <h1 class="text text-info">Alterar senha</h1>
    </div>

    <form class="col-lg-5" action="script_users_change_password.php" method="post">
        <fieldset class="form-group">
            <label for="senha-atual">Senha Atual:</label>
            <input type="password" name="old_password" id="senha-atual" class="form-control">
        </fieldset>

        <fieldset class="form-group">
            <label for="nove-senha">Nova Senha:</label>
            <input type="password" name="new_password" id="nove-senha" class="form-control">
        </fieldset>

        <fieldset class="form-group">
            <input type="hidden" name="user_id" value="<?php echo $row['user_id']; ?>">
            <input type="submit" class="btn btn-primary btn-warning" value="Salvar">
        </fieldset>
    </form>

</div>

<footer class="footer">
    <div class="container">
        <span class="pull-left text-muted">Trabalho final da disciplina de Computação em Nuvem</span>
        <span class="pull-right">Lidia Freitas | Wellington Trojan</span>
    </div>
</footer>

<script src="../bootstrap/js/jquery.min.js"></script>
<script src="../bootstrap/js/bootstrap.js"></script>
</body>
</html>
