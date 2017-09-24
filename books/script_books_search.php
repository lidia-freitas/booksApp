<?php
/**
 * Created by PhpStorm.
 * User: Lidia Freitas
 * Date: 21/09/2017
 * Time: 01:28
 */

$rows = -1;

if (isset($_GET['title'])) {

    $title = $_GET['title'];
    $user_id = $_SESSION['user_id'];

    include $_SERVER["DOCUMENT_ROOT"] . '/booksApp/conn.php';

    $getData = "SELECT book_id, title, author, releaseYear, genre, name
                FROM books
                INNER JOIN users
                ON books.user_id = users.user_id
                WHERE title LIKE '%$title%'";

    $query = $conn->query($getData);

    $rows = mysqli_affected_rows($conn);

    if ($rows == 0) {
        header('location:books_search.php?msg=not-found');
    }

}