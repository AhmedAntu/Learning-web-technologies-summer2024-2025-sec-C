<?php
    session_start();
    require_once('../model/userModel.php');
    if(!isset($_COOKIE['status'])){
        header('location: login.php?error=badrequest');
    }

    $id = $_GET['id'];
    $user = getUserById($id);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
</head>
<body>

    <h1>Edit User</h1>
    <a href='allUser.php'>Back </a> | 
    <a href='../controller/logout.php'>Logout</a>

    <form method="post" action="../controller/updateUser.php" enctype="multipart/form-data">
        <fieldset>
            <legend>Edit User</legend>

            User ID: <input type="text" name="id" value="<?=$user['id']?>" readonly /> <br> 
            Password: <input type="password" name="password" value="<?=$user['password']?>" /> <br>
            Name: <input type="text" name="name" value="<?=$user['name']?>" /> <br>

            User Type: 
            <input type="radio" name="type" value="User" <?= ($user['type'] == 'User') ? 'checked' : '' ?>> User
            <input type="radio" name="type" value="Admin" <?= ($user['type'] == 'Admin') ? 'checked' : '' ?>> Admin
            <br><br>

            <input type="submit" name="submit" value="Update"/>
        </fieldset>
    </form>
</body>
</html>
