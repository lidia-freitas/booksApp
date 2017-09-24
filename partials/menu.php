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
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="../index.php"><i class="fa fa-book" aria-hidden="true"></i> Books App</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <?php if ($is_logged): ?>
                    <li <?php if (isset($active_page) && $active_page == 'listar-livros') {
                        echo ' class="active" ';
                    } ?> ><a href="../books/books_list.php">Exibir livros</a></li>
                    <li <?php if (isset($active_page) && $active_page == 'cadastrar-livros') {
                        echo ' class="active" ';
                    } ?> ><a href="../books/books_add.php">Cadastrar livros</a></li>
                    <li <?php if (isset($active_page) && $active_page == 'gerenciar-livros') {
                        echo ' class="active" ';
                    } ?> ><a href="../books/books_manage.php">Gerenciar livros</a></li>
                <?php endif; ?>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <?php if ($is_logged): ?>
                    <li role="presentation" class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                           aria-expanded="false"> <i class="glyphicon glyphicon-user"></i>
                            <?php echo $_SESSION['user'] ?> <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="../users/users_edit.php"><i class="fa fa-cog" aria-hidden="true"></i> Gerenciar
                                    perfil</a></li>
                            <li><a href="../users/users_change_password.php"><i class="fa fa-key"
                                                                                aria-hidden="true"></i> Alterar
                                    Senha</a></li>
                            <li><a href="../authentication/logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i>
                                    Logout</a></li>
                        </ul>
                    </li>
                <?php else: ?>
                    <li><a href="../authentication/login.php"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</a>
                    </li>
                <?php endif; ?>
            </ul>

            <?php if ($is_logged): ?>
                <form class="navbar-form navbar-right" action="../books/books_search.php" method="get">
                    <div class="form-group">
                        <input type="text" class="form-control" name="title" placeholder="Pesquisar filmes">
                    </div>
                    <button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i></button>
                </form>
            <?php endif; ?>

        </div>
    </div>
</nav>