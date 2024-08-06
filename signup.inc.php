<?php

if($_SERVER["REQUEST_METHOD"] === "POST"){

    $username = $_POST["username"];
    $password = $_POST["password"];

    try{

        require_once 'dbh.inc.php';
        require_once 'signup_model.inc.php';
        require_once 'signup_contr.inc.php';

        // ERROR HANDLERS TO CHECK FOR ALL INPUTS

        $errors = [];

        if(isInputEmpty($username , $password))
            $errors["empty_input"]="Fill in all the fields";
        if(isUsernameTaken($pdo, $username))
            $errors["username_taken"]="Username already taken";

        require_once 'config_session.inc.php';

        if ($errors) {
            header("Location: /ZooManagement/signup.php?signup=fail");
        }

        createUser($pdo,$username,$password);
        header("Location: /ZooManagement/login.php?signup=success");
        die();

        $pdo = null;
        $stmt = null;

    }
    catch(PDOException $e){
        die("Query failed: " .$e->getMessage());
    }
}
else 
{
    header("Location: /ZooManagement/login.php");
    die();
}