<?php include '../lock.php';
/**
 * Created by PhpStorm.
 * User: Lidia Freitas
 * Date: 21/09/2017
 * Time: 00:09
 */
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
    <title>Cloud - Projeto Final - Editar livro</title>
</head>
<body>
<?php include '../partials/menu.php' ?>
<?php include '../books/script_books_get_one.php' ?>

<div class="container">
    <div class="col-md-10"><?php include '../partials/feedbacks.php' ?></div>

    <h1 class="col-md-12 text text-info">Editar livro</h1>

    <form class="col-lg-5" action="script_books_edit.php" method="post">
        <fieldset class="form-group">
            <label for="title">Título</label>
            <input type="text" class="form-control" name="title" value="<?php echo $row['title']; ?>" id="title">
        </fieldset>

        <fieldset class="form-group">
            <label for="author">Autor</label>
            <input type="text" class="form-control" name="author" value="<?php echo $row['author']; ?>" id="author">
        </fieldset>

        <fieldset class="form-group">
            <label for="release-year">Ano de lançamento</label>
            <input type="number" class="form-control" name="release-year" value="<?php echo $row['releaseYear']; ?>" id="release-year">
        </fieldset>

        <fieldset class="form-group">
            <label for="genre">Gênero</label>
            <input type="text" class="form-control" name="genre" value="<?php echo $row['genre']; ?>" id="genre">
        </fieldset>

        <fieldset class="form-group">
            <input type="hidden" name="user_id" value="<?php echo $row['user_id'];?>">
            <input type="hidden" name="book_id" value="<?php echo $row['book_id'];?>">
            <input type="submit" class="btn btn-primary" value="Salvar">
        </fieldset>
    </form>

    <script src="../bootstrap/js/jquery.min.js"></script>
    <script src="../bootstrap/js/bootstrap.js"></script>
</div>
</body>
</html>
