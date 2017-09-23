<?php session_start();
if(empty($_SESSION['user']) || empty($_SESSION['password'])){
    header('location:../authentication/login.php?msg=errorLogin');
}

/**
 * Created by PhpStorm.
 * User: Lidia Freitas
 * Date: 20/09/2017
 * Time: 00:36
 */