<?php
/**
 * Created by PhpStorm.
 * User: Lidia Freitas
 * Date: 21/09/2017
 * Time: 02:01
 */

include $_SERVER["DOCUMENT_ROOT"] . '/booksApp/lock.php';
include $_SERVER["DOCUMENT_ROOT"] . '/booksApp/conn.php';

$itemId = $_GET['id'];

if ($_GET['user_id'] != $_SESSION['user_id'] && $_SESSION['role'] != 0) {
    header('location:books_edit.php?id=' . $_GET['id'] . '&msg=denied');
} else {
    $sql = "DELETE FROM books WHERE book_id = $itemId";

    mysqli_query($conn, $sql);

    $rows = mysqli_affected_rows($conn);

    if ($rows > 0) {
        header('location:books_manage.php?msg=success');
    } else {
        header('location:books_manage.php?msg=error');
    }
}