<?php
    require_once 'C:\xampp\htdocs\ZooManagement\Includes\config_session.inc.php';
    require_once 'C:\xampp\htdocs\ZooManagement\Includes\signup_view.inc.php';
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
            background-image: url('./Images/sunet.gif');
            background-repeat: no-repeat;
            background-size: cover;
            background-position:center;
        }

        .main{
            background-image: url('./Images/deer.jpeg');
            background-repeat: no-repeat;
            background-size: 1000px 600px;
            background-position:center;
        }
    </style>
</head>

<body>

    <div class="main">
            <div class="main-left main2" style="color:black;">
                <div class="main-title">Welcome!</div>
                <div class="title1">
                    <span class="decoration">Zoo Planet</span> Awaits You!
                </div>
                <div class="left-body">Create Your Account For Free!</div>
            </div>
        <form action="/ZooManagement/Includes/signup.inc.php" method="post" class="main-form2  main2">
            <div class="main-right">
                <div class="login" style="color:white;">SIGN-UP</div>
                <div class="input">
                    <input required type="text" class="username" placeholder="Username" name="username">
                    <input required type="password" class="password" placeholder="Password" name="password">
                        <button class="login-button">SIGN-UP</button>
                </div>
                <?php 
                    if(isset($_GET["signup"]))
                        checkSignUpErrors();
                ?>
            </div>
        </form>
    </div>

    <div class="trademark" style="margin-top:23vh">
        @2024 Zoo Planet 
    </div>

</body>

</html>