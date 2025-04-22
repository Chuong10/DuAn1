<?php

if (isset($_POST['frmUsername'])) {
    if (
        $_POST['frmUsername'] == 'user' and
        $_POST['frmPass'] == '123'
    ) {
        session_start();
        $_SESSION["UserLogin"] = "user";
        header('location:Users/home.php');
        exit();
    } else {
        echo "Wrong Username or Password";
    }
}