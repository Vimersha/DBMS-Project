<?php 

    function displayErrorSearch(){
        echo "<br>";     
        echo "<div class='form-error' style='color:red;'>Select A Field</div>";  
    }
   
    function printPage($result)
    {
        if($result)
        {
             echo '<!DOCTYPE html>
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
                background-image: url("/ZooManagement/Images/skies.gif");
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
                <div class="result" align="center">'.$result[0]["animalname"].' are '.$result[0]["speciestype"].' animals found in '.$result[0]["sector"].' sector and are '.$result[0]["animaltype"].'</div>
                    <button class="login-button">BACK</button>
                </div>
            </div>
        </form>
    </div>

    <div class="trademark" style="margin-top:23vh">
        @2024 Zoo Planet 
    </div>

</body>

</html>';
        }
        else
        {
            echo '<!DOCTYPE html>
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
                background-image: url("/ZooManagement/Images/skies.gif");
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
                <div class="result-fail" align="center">No Entries Found</div>
                    <button class="login-button">BACK</button>
                </div>
            </div>
        </form>
    </div>

    <div class="trademark" style="margin-top:23vh">
        @2024 Zoo Planet 
    </div>

</body>

</html>';
        }
}