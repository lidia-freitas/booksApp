<?php
/**
 * Created by PhpStorm.
 * User: Lidia Freitas
 * Date: 19/09/2017
 * Time: 19:47
 */

session_start();
unset($_SESSION['user']);
unset($_SESSION['password']);
session_destroy();
header('location:login.php');