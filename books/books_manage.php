<?php include '../lock.php';
/**
 * Created by PhpStorm.
 * User: Lidia Freitas
 * Date: 19/09/2017
 * Time: 20:24
 */
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../bootstrap/css/sticky-footer.css">
    <link rel="stylesheet" href="../assets/main.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Cloud - Books App - Gerenciar Livros</title>
</head>
<body>
<?php $active_page  = 'gerenciar-livros' ?>
<?php include '../partials/menu.php' ?>
<?php include 'script_books_manage.php' ?>

<div class="container">
    <div class="col-md-12 text-center"><?php include '../partials/feedbacks.php' ?></div>

    <div class="page-header">
        <h1 class="text text-info">Gerenciar livros </h1>
    </div>

    <br>
    <div class="col-md-12 table-responsive">
        <table class="table ">
            <thead>
            <tr>
                <th>Titulo</th>
                <th>Autor</th>
                <th>Lançamento</th>
                <th>Gênero</th>
                <th>Usuário</th>
                <th class="action">Ações</th>
            </tr>
            </thead>
            <tbody>
            <?php while ($result = mysqli_fetch_assoc($query)): ?>
                <tr>
                    <td><?php echo $result['title']; ?></td>
                    <td><?php echo $result['author']; ?></td>
                    <td><?php echo $result['releaseYear']; ?></td>
                    <td><?php echo $result['genre']; ?></td>
                    <td><?php echo $result['name']; ?></td>

                    <td class="action">
                        <a href="books_edit.php?id=<?php echo $result['book_id'] ?>"
                           class="btn btn-default btn-warning btn-xs action-button">
                            <i class="glyphicon glyphicon-pencil"></i> Editar
                        </a>
                        <a href="script_books_delete.php?id=<?php echo $result['book_id']; ?>&user_id=<?php echo $result['user_id']; ?>"
                           class="btn btn-default btn-danger btn-xs action-button"
                           data-toggle="confirmation"
                           data-title="Deseja Deletar?"
                           data-singleton="true"
                           data-popout="true">
                            <i class="glyphicon glyphicon-trash"></i> Deletar
                        </a>
                    </td>
                </tr>
            <?php endwhile ?>
            </tbody>
        </table>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <small class="pull-left text-muted">Trabalho final da disciplina de Computação em Nuvem</small>
        <small class="pull-right">Lidia Freitas | Wellington Trojan</small>
    </div>
</footer>

<script src="../bootstrap/js/jquery.min.js"></script>
<script src="../bootstrap/js/bootstrap.js"></script>
<script src="../bootstrap/js/bootstrap-confirmation.min.js"></script>
<script src="../bootstrap/js/bootstrap_confirmation.js"></script>

</body>
</html>