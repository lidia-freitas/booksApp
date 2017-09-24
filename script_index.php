<?php
/**
 * Created by PhpStorm.
 * User: Lidia Freitas
 * Date: 21/09/2017
 * Time: 22:11
 */

include $_SERVER["DOCUMENT_ROOT"] . '/booksApp/conn.php';

$getData = "SELECT books.book_id, books.title, books.author, books.releaseYear, books.genre, users.name
        FROM books
        INNER JOIN users
        WHERE books.user_id = users.user_id
        ORDER BY books.book_id DESC 
        LIMIT 10";

$query = $conn->query($getData);

$rows = mysqli_affected_rows($conn);