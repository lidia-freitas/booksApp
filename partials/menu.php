<?php
/**
 * Created by PhpStorm.
 * User: Lidia Freitas
 * Date: 19/09/2017
 * Time: 20:53
 */

$is_logged = isset($_SESSION['user']) && isset($_SESSION['password']);
?>
<nav class="navbar navbar-default navbar-static-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="../index.php">Books App</a>
        </div>

        <ul class="nav navbar-nav">
            <?php if ($is_logged): ?>
                <li><a href="../books/books_list.php">Exibir livros</a></li>
                <li><a href="../books/books_add.php">Cadastrar livros</a></li>
                <li><a href="../books/books_manage.php">Gerenciar livros</a></li>
            <?php endif; ?>
        </ul>

        <ul class="nav navbar-nav navbar-right">
            <?php if ($is_logged): ?>
            <li role="presentation" class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                   aria-expanded="false">
                    <?php echo $_SESSION['user'] ?>  <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="../authentication/logout.php">Logout</a></li>
                </ul>
            </li>
            <?php else: ?>
            <li><a href="../authentication/login.php">Login</a></li>
            <?php endif; ?>
        </ul>

        <?php if ($is_logged): ?>
            <form class="navbar-form navbar-right" action="../books/books_search.php" method="get">
                <div class="form-group">
                    <input type="text" class="form-control" name="title" placeholder="Pesquisar filmes">
                </div>
                <button type="submit" class="btn btn-default">Buscar</button>
            </form>
        <?php endif; ?>
    </div>
</nav>