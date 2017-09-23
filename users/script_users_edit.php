<?php
/**
 * Created by PhpStorm.
 * User: Lidia Freitas
 * Date: 23/09/2017
 * Time: 13:32
 */

include '../lock.php';

if ($_POST['user_id'] != $_SESSION['user_id']) {
    header('location:users_edit.php?msg=denied');
}
if (empty($_POST['name']) || empty($_POST['email'])) {
    header('location:users_edit.php?msg=empty');
} else {
    $user_id = $_POST['user_id'];
    $name = $_POST['name'];
    $email = $_POST['email'];

    include '../conn.php';

    $sql = "UPDATE users
                SET name = '$name', email = '$email'
                WHERE user_id = $user_id";

    mysqli_query($conn, $sql);

    $rows = mysqli_affected_rows($conn);

    if ($rows > 0) {
        session_start();
        $_SESSION['user'] = $name;
        header('location:users_edit.php?msg=success');
    } else {
        header('location:users_edit.php?msg=error');
    }
}