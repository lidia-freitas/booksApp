<?php include '../lock.php';
/**
 * Created by PhpStorm.
 * User: Lidia Freitas
 * Date: 20/09/2017
 * Time: 00:25
 */

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../bootstrap/css/sticky-footer.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Cloud - Books App - Cadastrar novo livro</title>
</head>
<body>
<?php $active_page  = 'cadastrar-livros' ?>
<?php include '../partials/menu.php' ?>

<div class="container">
    <div class="col-md-12 text-center"><?php include '../partials/feedbacks.php' ?></div>

    <div class="page-header">
        <h1 class="text text-info">Cadastrar novo livro</h1>
    </div>

    <form class="col-lg-5" action="script_books_add.php" method="post">
        <fieldset class="form-group">
            <label for="title">Título</label>
            <input type="text" class="form-control" name="title" id="title">
        </fieldset>

        <fieldset class="form-group">
            <label for="author">Autor</label>
            <input type="text" class="form-control" name="author" id="author">
        </fieldset>

        <fieldset class="form-group">
            <label for="release-year">Ano de lançamento</label>
            <input type="number" class="form-control" name="release-year" id="release-year">
        </fieldset>

        <fieldset class="form-group">
            <label for="genre">Gênero</label>
            <input type="text" class="form-control" name="genre" id="genre">
        </fieldset>

        <fieldset class="form-group">
            <input type="submit" class="btn btn-primary btn-success" value="Cadastrar">
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
