<?php
//THIS PHP IS TO CHECK FOR ERRORS IN INPUT VALUES

function isInputEmpty(string $username , string $password) {
    if(empty($username) || empty($password)){
        return true;
    }
    else
        return false;
}

function isUsernameTaken(object $pdo,string $username){

    if(getUsername($pdo,$username))
        return true;
    else    
        return false;
}

function createUser(object $pdo, string $username , string $password){
    setUser($pdo,$username,$password);
}