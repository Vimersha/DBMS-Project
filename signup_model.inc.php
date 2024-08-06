<?php

require_once 'dbh.inc.php';

function getUsername(object $pdo,string $username)
{
    $query = "SELECT username FROM users WHERE username = :username;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":username",$username);
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}

function setUser(object $pdo, string $username , string $password){
    $query = "INSERT INTO users(username,password) VALUES(:username,:password)";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":username",$username);
    $stmt->bindParam(":password",$password);
    $stmt->execute();
}
