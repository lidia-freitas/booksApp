<?php
/**
 * Created by PhpStorm.
 * User: Lidia Freitas
 * Date: 24/09/2017
 * Time: 17:34
 */

if (empty($_POST['book_id'])) {
    header('location:index.php?msg=error-vote');
} else {
    include 'conn.php';

    $book_id = $_POST['book_id'];

    $sql = "UPDATE books 
            SET votes = votes + 1 
            WHERE book_id = $book_id ";

    mysqli_query($conn, $sql);

    $rows = mysqli_affected_rows($conn);

    if ($rows > 0) {
        header('location:index.php?msg=success-vote');
    } else {
        header('location:index.php?msg=error-vote');
    }

}