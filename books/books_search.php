<?php include '../authentication/verify_session.php';
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
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../bootstrap/css/sticky-footer.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Cloud - Books App - Buscar livros</title>
</head>
<body>
<?php include '../partials/menu.php' ?>
<?php include 'script_books_search.php' ?>

<div class="container">
    <div class="col-md-12"><?php include '../partials/feedbacks.php' ?></div>

    <div class="page-header">
        <h1 class="text text-info">Buscar livros </h1>
    </div>

    <br>
    <div class="col-md-12 table-responsive">
        <?php if ($rows > 0): ?>
            <table class="table ">
                <thead>
                <tr>
                    <th>Titulo</th>
                    <th>Autor</th>
                    <th>Lançamento</th>
                    <th>Gênero</th>
                    <th>Usuário</th>
                </tr>
                </thead>
                <tbody>
                <?php while ($result = mysqli_fetch_assoc($query)): ?>
                    <tr>
                        <td title="<?php echo $result['book_id']; ?>">
                            <?php echo $result['title']; ?>
                        </td>
                        <td><?php echo $result['author']; ?></td>
                        <td><?php echo $result['releaseYear']; ?></td>
                        <td><?php echo $result['genre']; ?></td>
                        <td><?php echo $result['name']; ?></td>
                    </tr>
                <?php endwhile; ?>
                </tbody>
            </table>
        <?php endif; ?>
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
</body>
</html>