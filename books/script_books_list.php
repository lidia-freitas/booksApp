<?php
/**
 * Created by PhpStorm.
 * User: Lidia Freitas
 * Date: 20/09/2017
 * Time: 19:00
 */

include '../conn.php';

$getData = "SELECT book_id, title, author, genre, releaseYear, name
            FROM books
            INNER JOIN users
            ON books.user_id = users.user_id";

$query = $conn->query($getData);

$rows = mysqli_affected_rows($conn);
