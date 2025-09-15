<?php
    if(isset($_GET['error'])){
        $error = $_GET['error'];
        if($error == "invalid_user"){
            $err1= "please type valid userid/password!";
        }elseif($error == "badrequest"){
            $err2= "please login first!";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form method="post" action="../controller/loginCheck.php" enctype="multipart/form-data">
        <fieldset>
            <legend>Login</legend>

            User Id: <input type="text" name="userid" value=""/> <br>
            Password: <input type="password" name="password" value=""/> <br>

            <input type="submit" name="submit" value="Login"/>
            <a href='signup.php'>Register</a>
        </fieldset>
    </form>

    <p><?php if(isset($err1)){echo $err1;} ?> </p>
    <p><?php if(isset($err2)){echo $err2;} ?> </p>
</body>
</html>
