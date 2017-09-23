<?php
/**
 * Created by PhpStorm.
 * User: Lidia Freitas
 * Date: 23/09/2017
 * Time: 15:46
 */

include '../lock.php';

if ($_POST['user_id'] != $_SESSION['user_id']) {
    header('location:users_edit.php?msg=denied');
}
if (empty($_POST['old_password']) || empty($_POST['new_password'])) {
    header('location:users_change_password.php?msg=empty');
} else {
    $user_id = $_POST['user_id'];
    $old_password = $_POST['old_password'];
    $new_password = $_POST['new_password'];

    if (crypt($old_password, $_SESSION['password']) != $_SESSION['password']) {
        header('location:users_change_password.php?msg=wrong-pass');
    } else {
        include '../conn.php';
        $security = crypt($new_password, '');

        $sql = "UPDATE users
                SET password = '$security'
                WHERE user_id = $user_id";

        mysqli_query($conn, $sql);

        $rows = mysqli_affected_rows($conn);

        if ($rows > 0) {
            session_start();
            $_SESSION['password'] = $security;
            header('location:users_change_password.php?msg=success');
        } else {
            header('location:users_change_password.php?msg=error');
        }
    }
}