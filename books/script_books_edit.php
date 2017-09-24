<?php
/**
 * Created by PhpStorm.
 * User: Lidia Freitas
 * Date: 20/09/2017
 * Time: 00:34
 */

include '../lock.php';

if($_POST['user_id'] != $_SESSION['user_id'] && $_SESSION['role'] != 0){
    header('location:books_edit.php?id=' . $_POST['book_id'] . '&msg=denied');
} elseif (empty($_POST['book_id']) || empty($_POST['title']) || empty($_POST['author']) || empty($_POST['release-year']) || empty($_POST['genre'])) {
    header('location:movies_edit.php?id=' . $_POST['book_id'] . '&msg=empty');
} else {
    include '../conn.php';

    $book_id      = $_POST['book_id'];
    $title        = $_POST['title'];
    $author       = $_POST['author'];
    $release_year = $_POST['release-year'];
    $genre        = $_POST['genre'];

    $sql = "UPDATE books
                SET title = '$title', author = '$author', releaseYear = $release_year, genre = '$genre'   
                WHERE book_id = $book_id";

    mysqli_query($conn, $sql);

    $rows = mysqli_affected_rows($conn);

    if ($rows > 0) {
        header('location:books_manage.php?msg=success');
    } else {
        header('location:books_edit.php?msg=error');
    }
}