<?php
/**
 * Created by PhpStorm.
 * User: Lidia Freitas
 * Date: 20/09/2017
 * Time: 00:34
 */

include $_SERVER["DOCUMENT_ROOT"] . '/booksApp/lock.php';

if (empty($_POST['title']) || empty($_POST['author']) || empty($_POST['release-year']) || empty($_POST['genre'])) {
    header('location:books_add.php?msg=empty');
} else {
    include $_SERVER["DOCUMENT_ROOT"] . '/booksApp/conn.php';

    $title        = $_POST['title'];
    $author       = $_POST['author'];
    $release_year = $_POST['release-year'];
    $genre        = $_POST['genre'];

    $user_id = $_SESSION['user_id'];

    $sql = "INSERT INTO books (title, author, releaseYear, genre, user_id) 
            VALUES ('$title', '$author', $release_year, '$genre', $user_id)";

    mysqli_query($conn, $sql);

    $rows = mysqli_affected_rows($conn);

    if ($rows > 0) {
        header('location:books_manage.php?msg=success');
    } else {
        header('location:books_add.php?msg=error');
    }
}