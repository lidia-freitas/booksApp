<?php include 'authentication/verify_session.php';
/**
 * Created by PhpStorm.
 * User: Lidia Freitas
 * Date: 19/09/2017
 * Time: 19:40
 */
$is_logged = isset($_SESSION['user']) && isset($_SESSION['password']);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/css/sticky-footer.css">
    <link rel="stylesheet" href="assets/main.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Cloud - Projeto Final - Últimos Livros</title>
</head>
<body>
<?php include 'script_index.php' ?>

<nav class="navbar navbar-default navbar-static-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="index.php"><i class="fa fa-book" aria-hidden="true"></i> Books App</a>
        </div>

        <ul class="nav navbar-nav">
            <?php if ($is_logged): ?>
                <li><a href="books/books_list.php">Exibir livros</a></li>
                <li><a href="books/books_add.php">Cadastrar livros</a></li>
                <li><a href="books/books_manage.php">Gerenciar livros</a></li>
            <?php endif; ?>
        </ul>

        <ul class="nav navbar-nav navbar-right">
            <?php if ($is_logged): ?>
                <li role="presentation" class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                       aria-expanded="false">
                        <?php echo $_SESSION['user'] ?> <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu">
                        <li><a href="users/users_edit.php"><i class="fa fa-cog" aria-hidden="true"></i> Gerenciar perfil</a>
                        </li>
                        <li><a href="users/users_change_password.php"><i class="fa fa-key" aria-hidden="true"></i>
                                Alterar Senha</a></li>
                        <li><a href="authentication/logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a>
                        </li>
                    </ul>
                </li>
            <?php else: ?>
                <li><a href="authentication/login.php"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</a></li>
            <?php endif; ?>
        </ul>
    </div>
</nav>


<div class="container">
    <div class="jumbotron text-center">
        <h1>
            <i class="fa fa-book" aria-hidden="true"></i>
            Books App</h1>
        <p>Trabalho final da disciplina de Computação em Nuvem</p>
        <span><b>Professor:</b> Carlos Henrique Kuretzki</span>
        <br>
        <br>
        <p><a class="btn btn-primary btn-lg" href="https://github.com/lidia-freitas/booksApp" role="button"
              target="_blank">
                <i class="fa fa-github" aria-hidden="true"></i> Github</a></p>
    </div>

    <div class="col-md-12"><?php include 'partials/feedbacks.php' ?></div>

    <div class="page-header">
        <h1 class="text text-info">Últimos livros</h1>
    </div>

    <br>
    <div>
        <?php while ($result = mysqli_fetch_assoc($query)) : ?>
            <form class="col-md-4 books-list" action="script_vote.php" method="post">
                <input type="hidden" name="book_id" value="<?php echo $result['book_id'] ?>">
                <div class="cover">
                    <h1 class="text-muted thumbnail">
                        <i class="fa fa-book" aria-hidden="true"></i>
                    </h1>
                </div>
                <div class="content">
                    <p class="text text-info title"><?php echo $result['title']; ?></p>
                    <ul>
                        <li><strong>Autor: </strong><?php echo $result['author']; ?></li>
                        <li><strong>Ano de Lançamento: </strong><?php echo $result['releaseYear']; ?></li>
                        <li><strong>Gênero: </strong><?php echo $result['genre']; ?></li>
                        <li><strong>Cadastrado por: </strong><?php echo $result['name']; ?></li>
                    </ul>
                    <p>
                        <button class="btn btn-sm btn-danger vote"><i
                                    class="fa fa-heart"></i> <?php echo $result['votes']; ?> votos
                        </button>
                    </p>
                </div>
            </form>
        <?php endwhile; ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <span class="pull-left text-muted">Trabalho final da disciplina de Computação em Nuvem</span>
        <span class="pull-right">Lidia Freitas | Wellington Trojan</span>
    </div>
</footer>

<script src="bootstrap/js/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.js"></script>
</body>
</html>