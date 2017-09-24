<?php
/**
 * Created by PhpStorm.
 * User: Lidia Freitas
 * Date: 20/09/2017
 * Time: 19:00
 */

include $_SERVER["DOCUMENT_ROOT"] . '/booksApp/conn.php';

$user_id = $_SESSION['user_id'];
$role = $_SESSION['role'];

//admin == 0 | user == 1
if ($role == 0) {
    $getData = "SELECT book_id, title, author, releaseYear, genre, books.user_id, name
                FROM books
                INNER JOIN users
                ON books.user_id = users.user_id";

} else {
    $getData = "SELECT book_id, title, author, releaseYear, genre, books.user_id, name
                FROM books
                INNER JOIN users
                ON books.user_id = users.user_id
                WHERE users.user_id = $user_id";
}

$query = $conn->query($getData);

$rows = mysqli_affected_rows($conn);
