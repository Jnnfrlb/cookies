<?php

    session_start();
    session_destroy();
    unset($_COOKIE);
    unset($_SESSION['cart']);
    unset($_SESSION['loginname']);
    /*setcookie('peanuts', '', time() - 3600, '/');
    setcookie('choco', '', time() - 3600, '/');
    setcookie('chips', '', time() - 3600, '/');
    setcookie('mms', '', time() - 3600, '/');*/
    header('Location:login.php');
