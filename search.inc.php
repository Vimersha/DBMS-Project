<?php

    if($_SERVER["REQUEST_METHOD"] === "POST"){

        if(isset($_POST["sector"]))
            $sectorID = $_POST["sector"];
        if(isset($_POST["speciestype"]))
            $speciestype = $_POST["speciestype"];
        if(isset($_POST["animaltype"]))
            $animaltype = $_POST["animaltype"];
        if(isset($_POST["animalname"]))
            $animalname = ucfirst(strtolower($_POST["animalname"]));
            
        
        try{
            require_once 'dbh.inc.php';
            require_once 'search_view.inc.php';

            if($animalname!="")
            {
                $query = "SELECT species.sectorID,animalname,animals.speciesID,animalID,animaltype,speciestype,sector FROM animals,species,sector WHERE animalname = :animalname and animals.speciesID = species.speciesID AND sector.sectorID = species.sectorID";
                $stmt = $pdo->prepare($query);
                $stmt->bindParam(":animalname",$animalname);
                $stmt->execute();
                $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
                printPage($result);
            }
            else if(isset($_POST["sector"]) && !isset($_POST["speciestype"]) && !isset($_POST["animaltype"]))
            {
                header("Location: /ZooManagement/searchdisplaysector.php?sectorID=$sectorID");
                
            }    
            else if(isset($_POST["sector"]) && isset($_POST["speciestype"]) && !isset($_POST["animaltype"]))
            {
                header("Location: /ZooManagement/searchdisplaysectorspecies.php?sectorID=$sectorID&speciestype=$speciestype");
                
            }   
            else if(isset($_POST["sector"]) && isset($_POST["speciestype"]) && isset($_POST["animaltype"]))
            {

                header("Location: /ZooManagement/searchdisplaysectorspeciesanimal.php?sectorID=$sectorID&speciestype=$speciestype&animaltype=$animaltype");
            }    
            else
                header("Location: /ZooManagement/search.php?search=error");
        }
        catch(PDOException $e){
            die("Query failed: " .$e->getMessage());
        }
        
    }
    else{
        header("Location: /ZooManagement/search.php");
        die();
    }