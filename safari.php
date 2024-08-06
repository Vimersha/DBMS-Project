<?php
    require_once 'C:\xampp\htdocs\ZooManagement\Includes\safari_view.inc.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Zoo Planet</title>

    <link rel="stylesheet" href="/ZooManagement/Styles/safari-general.css">
    <link rel="stylesheet" href="/ZooManagement/Styles/safari-body.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@700&display=swap" rel="stylesheet">


    <style>
        body{
            background-image: url('./Images/booking.gif');
            background-repeat: no-repeat;
            background-size: cover;
            background-position:center;
        }

        .main{
            position: relative;
            background-color: rgba(255,255,255,0.5);
        }

    </style>
</head>

<body>

    <div class="main">
            <div class="main-left">
                
                <?php
                    if(isset($_GET["price"]) &&isset($_GET["safariid"]))
                        displaySuccessBooking($_GET["price"],$_GET["safariid"]);
                    else 
                        echo '<div class="main-title">Welcome!</div>
                                <div class="title1" align="center">
                                    Safari At Your Fingertips
                                </div>
                                <div class="left-body" align="center">Book Your Safari For The Cheapest Prices</div>';
                ?>
                
            </div>
        <form action="/ZooManagement/Includes/safari.inc.php" method="post" class="main-form2">
            <div class="main-right">
                <div class="login" align="center">BOOK YOUR SAFARI NOW</div>
                <div class="input">          
                    <input required type="text" class="username" placeholder="Username" name="username" value='<?php echo $_GET["username"] ?>'>
                    <input required type="number" min="1" class="safariid" placeholder="SafariID" name="safariid">
                    <select name="sector" class="vehicle">
                        <option selected disabled hidden>Sector</option>
                        <option value="N">North</option>
                        <option value="S">South</option>
                        <option value="E">East</option>
                        <option value="W">West</option>
                        <option value="Center">Center</option>
                    </select>
                    <select name="vehicle" class="vehicle">
                        <option selected disabled hidden>Vehicle Type</option>
                        <option value="jeep">Jeep</option>
                        <option value="bus">Bus</option>
                    </select>
                    <button class="login-button">BOOK</button>
                </div>
                <?php 
                    if(isset($_GET["login"]))
                        displayErrorBooking();
                ?>
            </div>
            
        </form>
    </div>

    <div class="trademark" style="margin-top:23vh">
        @2024 Zoo Planet 
    </div>

</body>

</html>