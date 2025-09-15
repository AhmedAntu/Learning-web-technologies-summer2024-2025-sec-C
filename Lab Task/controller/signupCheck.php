<?php
    session_start();
    require_once('../model/userModel.php');

    $id       = trim($_REQUEST['id']);
    $password = trim($_REQUEST['password']);
    $confirm  = trim($_REQUEST['confirm_password']);
    $name     = trim($_REQUEST['name']);
    $userType = isset($_REQUEST['user_type']) ? $_REQUEST['user_type'] : '';

    if ($id == "" || $password == "" || $confirm == "" || $name == "" || $userType == "") {
        header('location: ../view/signup.php?error=empty');
        exit();
    }

    if ($password !== $confirm) {
        header('location: ../view/signup.php?error=nomatch');
        exit();
    }

    $user = [
        'id'       => $id,
        'password' => $password,
        'name'     => $name,
        'type'     => $userType
    ];

    $status = addUser($user);

    if ($status) {
        header('location: ../view/login.php');
    } else {
        header('location: ../view/signup.php?error=regerror');
    }
?>
