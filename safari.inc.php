<?php

if($_SERVER["REQUEST_METHOD"] === "POST"){

    $username = $_POST["username"];
    $sector = $_POST["sector"];
    $vehicle = $_POST["vehicle"];
    $safariID = $_POST["safariid"];

    if($vehicle === "bus")
        $price=200;
    else    
        $price=400;

    try {
        require_once 'dbh.inc.php';

        
        $query = "INSERT INTO safari (safariID, username , sectorID , vehicletype , ticketprice) VALUES (:safariID , :username , :sectorID ,:vehicle , :price);";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(":safariID",$safariID);
        $stmt->bindParam(":username",$username);
        $stmt->bindParam(":sectorID",$sector);
        $stmt->bindParam(":vehicle",$vehicle);
        $stmt->bindParam(":price",$price);
        $stmt->execute();
        
        header("Location: /ZooManagement/safari.php?username=$username&price=$price&safariid=$safariID");
        


    }catch(PDOException $e){
        header("Location: /ZooManagement/safari.php?username=$username&login=failed");
        die();
    }
}else 
{
    header("Location: /ZooManagement/safari.php");
    die();
}