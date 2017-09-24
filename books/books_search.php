<?php include $_SERVER["DOCUMENT_ROOT"] . '/booksApp/authentication/verify_session.php';
/**
 * Created by PhpStorm.
 * User: Lidia Freitas
 * Date: 21/09/2017
 * Time: 01:26
 */
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../bootstrap/css/sticky-footer.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Cloud - Books App - Buscar livros</title>
</head>
<body>
<?php include $_SERVER["DOCUMENT_ROOT"] . '/booksApp/partials/menu.php' ?>
<?php include $_SERVER["DOCUMENT_ROOT"] . '/booksApp/books/script_books_search.php' ?>

<div class="container">
    <div class="col-md-12"><?php include $_SERVER["DOCUMENT_ROOT"] . '/booksApp/partials/feedbacks.php' ?></div>

    <div class="page-header">
        <h1 class="text text-info">Buscar livros </h1>
    </div>

    <br>
    <div class="col-md-12">
        <?php if ($rows > 0): ?>
            <table class="table ">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Titulo</th>
                    <th>Autor</th>
                    <th>Ano de Lançamento</th>
                    <th>Gênero</th>
                    <th>Usuário</th>
                </tr>
                </thead>
                <tbody>
                <?php while ($result = mysqli_fetch_assoc($query)) { ?>
                    <tr>
                        <?php foreach ($result as $value) { ?>
                            <td><?php echo $value ?></td>
                        <?php } ?>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        <?php endif; ?>
    </div>

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