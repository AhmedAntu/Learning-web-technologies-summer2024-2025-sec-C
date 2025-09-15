<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
</head>
<body>
    <form method="post" action="../controller/signupCheck.php" enctype="multipart/form-data">
        <fieldset>
            <legend>Signup</legend>

            Id: <input type="text" name="id" value=""/> <br>
            Password: <input type="password" name="password" value=""/> <br>
            Confirm Password: <input type="password" name="confirm_password" value=""/> <br>
            Name: <input type="text" name="name" value=""/> <br>
            User Type: <br>
            <input type="radio" name="user_type" value="User"> User
            <input type="radio" name="user_type" value="Admin"> Admin
            <br><br>
            
            <input type="submit" name="submit" value="Submit"/>
            <a href='login.php'>login</a>
        </fieldset>
    </form>

    <p><?php if(isset($err1)){echo $err1;} ?> </p>
    <p><?php if(isset($err2)){echo $err2;} ?> </p>
</body>
</html>
