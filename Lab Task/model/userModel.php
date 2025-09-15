<?php 
    require_once('db.php');

    function login($user){
        $con = getConnection();
        $sql = "select * from users where id='{$user['id']}' and password='{$user['password']}'";
        $result = mysqli_query($con, $sql);
        $count = mysqli_num_rows($result);
        if($count == 1){
            return true;
        }else{
            return false;
        }
    }

    function addUser($user){
        $con = getConnection();
        $sql = "insert into users (id, password, name, type) values('{$user['id']}', '{$user['password']}', '{$user['name']}', '{$user['type']}')";
        if(mysqli_query($con, $sql)){
            return true;
        }else{
            return false;
        }
    }

    function getAlluser(){
        $con = getConnection();
        $sql = "select * from users";
        $result = mysqli_query($con, $sql);
        $users = [];

        while($row = mysqli_fetch_assoc($result)){
            //print_r($row);
            array_push($users, $row);
        }

        return $users;
    }

    function getUserById($id){
        $con = getConnection();
        $sql = "select * from users where id='{$id}'";
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_assoc($result);
        return $row;
    }

    function updateUser($user){
        $con = getConnection();
        $sql = "update users set password='{$user['password']}', name='{$user['name']}', type='{$user['type']}' where id='{$user['id']}'";
        if(mysqli_query($con, $sql)){
            return true;
        }else{
            return false;
        }
    }

    function deleteUser($id){
        $con = getConnection();
        $sql = "delete from users where id='{$id}'";
        if(mysqli_query($con, $sql)){
            return true;
        }else{
            return false;
        }
    }
?>
