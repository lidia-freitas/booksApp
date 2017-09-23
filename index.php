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
    <title>Cloud - Projeto Final - Últimos Livros</title>
</head>
<body>
<?php include 'script_index.php' ?>

<nav class="navbar navbar-default navbar-static-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="index.php">Books App</a>
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
                    <?php echo $_SESSION['user'] ?>  <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="authentication/logout.php">Logout</a></li>
                </ul>
            </li>
            <?php else: ?>
            <li><a href="authentication/login.php">Login</a></li>
            <?php endif; ?>
        </ul>
    </div>
</nav>


<div class="container">
    <div class="jumbotron">
        <h1>
            <i class="glyphicon glyphicon-book"></i>
            Books App</h1>
        <p>Trabalho final da disciplina de Computação em Nuvem</p>
        <span><b>Professor:</b> Carlos Henrique Kuretzki</span>
        <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
    </div>

    <div class="col-md-10"><?php include 'partials/feedbacks.php' ?></div>

    <h1 class="col-md-12 text text-info">Últimos livros</h1>

    <br>
    <div class="col-md-12">
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
    </div>

    <script src="bootstrap/js/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
</div>
</body>
</html>