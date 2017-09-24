<?php
/**
 * Created by PhpStorm.
 * User: Lidia Freitas
 * Date: 19/09/2017
 * Time: 20:19
 */

if (empty($_POST['name']) || empty($_POST['password'])) {
    header('location:login.php?msg=empty');
} else {

    include $_SERVER["DOCUMENT_ROOT"] . '/booksApp/conn.php';

    $user = $_POST['name'];
    $password = $_POST['password'];

    $sql = "SELECT user_id, name, password, role FROM users WHERE name LIKE '$user'";

    $result = mysqli_query($conn, $sql);

    $rows = mysqli_affected_rows($conn);

    if ($rows > 0) {
        $registro = mysqli_fetch_assoc($result);

        if (crypt($password, $registro['password']) == $registro['password']) {
            session_start();
            $_SESSION['user_id'] = $registro['user_id'];
            $_SESSION['user'] = $registro['name'];
            $_SESSION['password'] = $registro['password'];
            $_SESSION['role'] = $registro['role'];
            header('location:../books/books_list.php');
        } else {
            header('location:login.php?msg=invalid');
        }
    } else {
        header('location:login.php?msg=invalid');
    }
}
