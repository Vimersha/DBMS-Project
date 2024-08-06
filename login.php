<?php 
    require_once 'C:\xampp\htdocs\ZooManagement\Includes\login_view.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Zoo Planet</title>

    <link rel="stylesheet" href="/ZooManagement/Styles/index-general.css">
    <link rel="stylesheet" href="/ZooManagement/Styles/index-body.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@700&display=swap" rel="stylesheet">

    <style>

        body{
            background-image: url('./Images/suni.gif');
            background-repeat: no-repeat;
            background-size: cover;
            background-position:center;
        }

        .main{
            background-image: url('./Images/lion.jpeg');
            background-repeat: no-repeat;
            background-size: 1000px 600px;
            background-position:center;
        }
    </style>

</head>
<body>
    
    <div class="main">
        <form action="/ZooManagement/signup.php" method="post" class="main-form1">
            <div class="main-left">
            <div class="main-title">Welcome!</div>
            <div class="title1">
                <span class="decoration">Zoo Planet</span> Awaits You!
            </div>
            <div class="left-body">Create Your Account For Free!</div>
                <button class="sign-up">SIGN-UP</button>
        </div>
        </form> 
        <form action="/ZooManagement/Includes/login.inc.php" method="post" class="main-form2">
            <div class="main-right">
                <div class="login">LOGIN</div>
                <div class="input">
                    <input required type="text" class="username" placeholder="Username" name="username">
                    <input required type="password" class="password" placeholder="Password" name="password">
                        <button class="login-button">LOGIN</button>
                </div>
                <?php
                    if(isset($_GET["login"]))
                        displayError();
                    if(isset($_GET["signup"]))
                        displaySuccess();
                ?>

            </div>
        </form>
    </div>

    <div class="trademark">
        @2024 Zoo Planet
    </div>

</body>
</html>