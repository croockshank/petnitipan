<?php
    session_start();

    unset($_SESSION['id-administrator']);
    unset($_SESSION['nama']);
    unset($_SESSION['id-shelter']);
    unset($_SESSION['login-first']);

    session_destroy();

    header('location: login.php');
?>