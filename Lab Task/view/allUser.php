<?php
    session_start();
    require_once('../model/userModel.php');
    if(!isset($_COOKIE['status'])){
        header('location: login.php?error=badrequest');
    }
    $users = getAllUser();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of Users</title>
</head>
<body>
    <a href='home.php'>Back</a> | 
    <a href='../controller/logout.php'>Logout</a>

    <table border="1">
        <tr>
            <td>ID</td>
            <td>NAME</td>
            <td>PASSWORD</td>
            <td>TYPE</td>
            <td>ACTION</td>
        </tr>

        <?php foreach($users as $u){ ?>
        <tr>
            <td><?= $u['id']; ?></td>
            <td><?= $u['name']; ?></td>
            <td><?= $u['password']; ?></td>
            <td><?= $u['type']; ?></td>
            <td>
                <a href='editUser.php?id=<?= $u['id'] ?>'>EDIT</a> |
                <a href='detailsUser.php?id=<?= $u['id'] ?>'>DETAILS</a> |
                <a href='deleteUser.php?id=<?= $u['id'] ?>'>DELETE</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>
