<?php
/**
 * Created by PhpStorm.
 * User: Lidia Freitas
 * Date: 23/09/2017
 * Time: 13:33
 */

include '../conn.php';

$user_id = $_SESSION['user_id'];

$getData = "SELECT user_id, name, email, password
            FROM users
            WHERE user_id = $user_id";

$query = $conn->query($getData);

$row = $query->fetch_assoc();
