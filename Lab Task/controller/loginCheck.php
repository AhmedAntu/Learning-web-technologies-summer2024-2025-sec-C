<?php
    session_start();
    require_once('../model/userModel.php');

    $userid   = trim($_REQUEST['userid']);
    $password = trim($_REQUEST['password']);

    if ($userid == "" || $password == "") {
        echo "Please type User Id and Password first!";
    } else {
        $user = ['id' => $userid, 'password' => $password];
        $status = login($user);

        if ($status) {
            setcookie('status', true, time() + 3000, '/');
            $_SESSION['userid'] = $userid;
            header('location: ../view/home.php');
        } else {
            header('location: ../view/login.php?error=invalid_user');
        }
    }
?>
