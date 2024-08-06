<?php

    try{
            require_once 'C:\xampp\htdocs\ZooManagement\Includes\dbh.inc.php';

            $sectorID = $_GET["sectorID"];
            $speciestype = $_GET["speciestype"];
            $animaltype = $_GET["animaltype"];

            $query = "SELECT species.sectorID,species.speciesID,speciestype,animals.animalname,animaltype,sector FROM species,animals,sector WHERE species.sectorID = :sectorID AND speciestype = :speciestype AND animaltype = :animaltype AND species.speciesID = animals.speciesID AND species.sectorID = sector.sectorID;";
            $stmt = $pdo->prepare($query);
            $stmt->bindParam(":sectorID",$sectorID);
            $stmt->bindParam(":speciestype",$speciestype);
            $stmt->bindParam(":animaltype",$animaltype);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    }
    catch(PDOException $e){
            die("Query failed: " .$e->getMessage());
        }
?>

<!DOCTYPE html>
    <html lang="en">
    <head>
    <title>Zoo Planet</title>

        <link rel="stylesheet" href="/ZooManagement/Styles/safari-general.css">
        <link rel="stylesheet" href="/ZooManagement/Styles/search_view-body.css">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@700&display=swap" rel="stylesheet">

        <style>
            body{
                background-image: url('./Images/skies.gif');
                background-repeat: no-repeat;
                background-size: cover;
                background-position:center;
            }
        </style>
</head>

<body>

    <div class="main">
            <div class="main-left">
                <div class="main-title">Welcome!</div>
                <div class="title1">
                    <span class="decoration">Searching Made Easier</span>
                </div>
                <div class="left-body" align="center">Thank You For Searching</div>
            </div>
        <form action="/ZooManagement/search.php" method="post" class="main-form2">
            <div class="main-right">
                <div class="login" align="center">Here Are The Results</div>
                <div class="input">
                <?php
                if($result)
                {
                    $count = count($result);
                    echo '<div class="result-sectorID" align="center">Animals Which Are Present In '.$result[0]["sector"].' Sector And Which Are '.$result[0]["speciestype"].' And '.$result[0]["animaltype"].'</div>';
                        for($row = 0;$row<$count;$row++)
                        {
                            $index = $row+1;
                            echo '<div class="result-sectorID" align="center">'.$index.'. '.$result[$row]["animalname"].'</div>';
                        }
                }
                else
                        echo '<div class="result-fail" align="center">No Entries Found</div>';
                ?>
                    <button class="login-button">BACK</button>
                </div>
            </div>
        </form>
    </div>

    <div class="trademark" style="margin-top:23vh">
        @2024 Zoo Planet 
    </div>

</body>

</html>