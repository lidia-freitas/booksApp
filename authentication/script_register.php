<?php
/**
 * Created by PhpStorm.
 * User: Lidia Freitas
 * Date: 19/09/2017
 * Time: 19:59
 */


if (empty($_POST['name']) || empty($_POST['password']) || empty($_POST['email'])) {
    header('location:register.php?msg=empty');
} else {
    include '../conn.php';

    $name = $_POST['name'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $role = $_POST['role'];

    // criptografar senha:
    $security = crypt($password, '');

    $sql = "INSERT INTO users (name, email, password, role)
	VALUES ('$name', '$email', '$security', '$role')";

    mysqli_query($conn, $sql);

    $rows = mysqli_affected_rows($conn);
    if ($rows > 0) {
        header('location:login.php?msg=success');
    } else {
        header('location:register.php?msg=error');
    }
}