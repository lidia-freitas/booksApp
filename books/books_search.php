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
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
    <title>Cloud - Projeto Final - Buscar livros</title>
</head>
<body>
<?php include '../partials/menu.php' ?>
<?php include 'script_books_search.php' ?>

<div class="container">
    <div class="col-md-10"><?php include '../partials/feedbacks.php' ?></div>

    <h1 class="col-md-12 text text-info">Buscar Livros</h1>

    <br>
    <div class="col-md-12">
        <?php if($rows > 0): ?>
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
        <?php endif;?>
    </div>

    <script src="../bootstrap/js/jquery.min.js"></script>
    <script src="../bootstrap/js/bootstrap.js"></script>
</div>
</body>
</html>