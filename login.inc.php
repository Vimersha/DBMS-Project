<?php

if($_SERVER["REQUEST_METHOD"] === "POST"){

    $username = $_POST["username"];
    $password = $_POST["password"];

    try {
        require_once 'dbh.inc.php';

        $query = "SELECT password FROM users WHERE username = :username;";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(":username",$username);
        $stmt->execute();

        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        
        if($result)
        {
            
            if($result["password"] === $password)
                header("Location: /ZooManagement/home.php?username=$username");
            else 
            {
                header("Location: /ZooManagement/login.php?login=failed");
            }
                
        }
        else 
        {
            header("Location: /ZooManagement/login.php?login=failed");
        }
             
    } catch(PDOException $e){
        die("Query failed: " .$e->getMessage());
    }
}
else 
{
    header("Location: /ZooManagement/login.php");
    die();
}