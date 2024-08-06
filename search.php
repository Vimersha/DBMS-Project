<?php
    require_once 'C:\xampp\htdocs\ZooManagement\Includes\search_view.inc.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Zoo Planet</title>

    <link rel="stylesheet" href="/ZooManagement/Styles/search-general.css">
    <link rel="stylesheet" href="/ZooManagement/Styles/search-body.css">

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
                <div class="title1" align="center">
                    <span class="decoration">Searching Made Easier</span>
                </div>
                <div class="left-body" align="center">Search Your Desired Animals Based On The Given Criteria</div>
            </div>
        <form action="/ZooManagement/Includes/search.inc.php" method="post" class="main-form2">
            <div class="main-right">
                <div class="login" align="center">HAPPY SEARCHING</div>
                <div class="input">          
                    <select name="sector" class="vehicle">
                        <option selected disabled hidden>Sector</option>
                        <option value="N">North</option>
                        <option value="S">South</option>
                        <option value="E">East</option>
                        <option value="W">West</option>
                        <option value="C">Center</option>
                    </select>
                    <select name="speciestype" class="vehicle">
                        <option selected disabled hidden>Species Type</option>
                        <option value="Aquatic">Aquatic</option>
                        <option value="Amphibians">Amphibians</option>
                        <option value="Arboreal">Arboreal</option>
                        <option value="Terrestrial">Terrestrial</option>
                        <option value="Aerial">Aerial</option>
                    </select>
                    <select name="animaltype" class="vehicle">
                        <option selected disabled hidden>Animal Type</option>
                        <option value="Carnivores">Carnivores</option>
                        <option value="Omnivores">Omnivores</option>
                        <option value="Herbivores">Herbivores</option>
                    </select>
                    
                    <input type="text" class="sector" placeholder="Search For A Specific Animal Here" name="animalname">

                    <button class="login-button">SEARCH</button>

                    <?php
                        
                        if(isset($_GET["search"]))
                            displayErrorSearch();
                    ?>
                </div>
            </div>
        </form>
    </div>

    <div class="trademark" style="margin-top:23vh">
        @2024 Zoo Planet 
    </div>

</body>

</html>