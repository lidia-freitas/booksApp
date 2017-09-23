<?php
/**
 * Created by PhpStorm.
 * User: Lidia Freitas
 * Date: 21/09/2017
 * Time: 00:48
 */

include '../conn.php';

$book_id = $_GET['id'];

$getData = "SELECT book_id, title, author, releaseYear, genre, books.user_id, name
            FROM books
            INNER JOIN users
            ON books.user_id = users.user_id
            WHERE book_id = $book_id";

$query = $conn->query($getData);

$row = $query->fetch_assoc();
