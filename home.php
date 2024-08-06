<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zoo Planet</title>

    <link rel="stylesheet" href="/ZooManagement/Styles/home-header.css">
    <link rel="stylesheet" href="/ZooManagement/Styles/home-body.css">
    <link rel="stylesheet" href="/ZooManagement/Styles/home-general.css">
    <link rel="stylesheet" href="/ZooManagement/Styles/home-footer.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@700&display=swap" rel="stylesheet">

    <style>
        .body {
        background-image: url('./Images/bg-varsha2.gif');
        background-repeat: no-repeat;
        background-size: cover;
        background-position:top;
        }
        .animals {
            background-image: url('./Images/animals2.jpeg');
            background-repeat: no-repeat;
            background-size: 1000px 800px;
            background-position:center left 80%;
            background-color:black;
        }
        .safari-b{
            background-image: url('./Images/rhino.jpg');
            background-repeat: no-repeat;
            background-size:contain;
            background-position:center right 80% left 0%;
            background-color:black; 
        }
        .account-img{
            background-image: url(./Images/profile.png);
            background-size:cover;
        }
    </style>
</head>

<body>

    <div class="header">
        <div class="title">
            <img src="./Images/logo2.png" alt="" class="logo">      
            <div class="titlename">Zoo Planet</div>
        </div>
        <div class="header-info">
            <div class="menu-bar">
                <div class="header-home">
                    <a href="/ZooManagement/login.php">LOGIN/SIGNUP</a>
                </div>
                <a href="#timings" class="about"><div class="header-contact">TIMINGS</div></a>
                <a href="#footer" class="about"><div class="header-contact">CONTACT</div></a>
                <?php
                    if(isset($_GET["username"]))
                    {
                        echo '<a href="#animals" class="about"><div class="header-contact">OUR ANIMALS</div></a>
                            <a href="#adventure" class="about"><div class="header-contact">BOOK YOUR ADVENTURE</div></a>';
                    }            
                ?>
            </div>
            <div class="account">
                <div class="account-img">

                </div>
                <?php
                    if(isset($_GET["username"]))
                    {
                        $username = $_GET["username"];
                        echo "<div class='profile'>HELLO <a href='/ZooManagement/home.php'              class='login'>".$username."</a>
                                <div class='logout'>Click To Sign Out</div>
                                </div>"; 
                    }      
                    else
                        echo "<div class='profile'>HELLO User</div>";        
                ?>
            </div>
            

        </div>       
    </div>

    <div class="body">
        <div class="body-head" align="center">
            <div class="body-head2" style="background-color: rgba(255,255,255,0.25);color:black;padding:10px; border-radius:20px;font-weight: 1000;">Journey Through A World Of Wildlife</div>
        </div>
        <div class="body-info" align="center" style="background-color: rgba(255,255,255,0.25);color:black;padding:10px; border-radius:20px; line-height: 1.5;">
            Step into a world of wonder at our zoo, where the beauty of nature meets the excitement of discovery. Our carefully
            curated exhibits bring you up close to fascinating wildlife from around the globe, while our commitment to conservation
            and education fosters a deep connection to the natural world. Join us for a memorable journey that blends entertainment
            with enlightenment, creating a space for families, friends, and individuals to explore, learn, and appreciate the
            incredible diversity of life on Earth.
        </div>
    </div>
                 
    <div class="timings" id="timings">Timings:</div>
    <div class="nav">
        <div class="line"></div>
        <div class="day monday">
            <img src="./Images/clock.jpeg" class="clock">
            <div class="dayn">
                Monday
                <div class="time">9:30 A.M - 5:00 P.M</div>
            </div>
        <div class="line"></div>
        </div>
        <div class="day tuesday">
            <img src="./Images/clock.jpeg" class="clock">
            <div class="dayn">
                Tuesday
                <div class="time">9:30 A.M - 5:00 P.M</div>
            </div>
            
        </div>
        <div class="line"></div>
        <div class="day wednesday">
            <img src="./Images/clock.jpeg" class="clock">
            <div class="dayn">
                Wednesday
                <div class="time">9:30 A.M - 5:00 P.M</div>    
            </div>
            
        </div>
        <div class="line"></div>
        <div class="day thursday">
            <img src="./Images/clock.jpeg" class="clock">
            <div class="dayn">
                Thursday
                <div class="time">9:30 A.M - 5:00 P.M</div>    
            </div>
        </div>
        <div class="line"></div>
        <div class="day friday">
            <img src="./Images/clock.jpeg" class="clock">
            <div class="dayn">
                Friday
                <div class="time">9:30 A.M - 5:00 P.M</div>
            </div>
        </div>
        <div class="line"></div>
        <div class="day saturday">
            <img src="./Images/clock.jpeg" class="clock">
            <div class="dayn">
                Saturday
                <div class="time">10:00 A.M - 6:30 P.M</div>
            </div>
            
        </div>
        <div class="line"></div>
        <div class="day sunday">
            <img src="./Images/clock.jpeg" class="clock">
            <div class="dayn">
                Sunday
                <div class="time">10:00 A.M - 6:30 P.M</div>
            </div>
            
        </div>
        <div class="line"></div>
    </div>
    
            <?php
                if(isset($_GET["username"]))
                {
                    echo "
                    <div class='animals' id='animals'>
                    <form action='/ZooManagement/search.php?username=".$_GET["username"]."' method='post' class='search'>
                            <div class='search-safari' align='center'>
                                Don't miss this chance to witness the regal Lion and explore the wonders of the animal kingdom at our zoo! Plan your visit today. 

                            </div>
                            <div class='search-safari' align='center' style=' margin-top:50px;'>
                                Welcome to our colourful ZOO. 

                                    <button class='search-zoo'>Explore Zoo-Planet!</button>
                            </div>
                        </form>
                    </div>
                    ";
                }
            ?>
    
        
            <?php
                if(isset($_GET["username"]))
                {
                    echo "
                    <div class='safari-b' id='adventure'>
                    <form action='/ZooManagement/safari.php?username=".$_GET["username"]."' method='post' class='safari'>
                            <div class='body-safari' align='center'>
                                <div class='safari-info'>
                                    <div class='safari-t1'>Welcome To The Wildlife!</div> 
                                    <div class='safari-t2'>Get Close And Personl With Our Wildlife</div>
                                    <div class='safari-t3'>Embark on the Adventure of a Lifetime with Our Safari Experience!</div>
                                </div>
                                <button class='book-safari'>Book Your Safari Now!</button>
                            </div>
                        </form>
                        </div>
                    ";
                }   
            ?>    
        

    <div class="footer" id="footer">
        <div class="footer-contact">
            <div class="contact-title">Contact</div>
            <div class="footer-email">E-Mail: ZooPlantet@gmail.com</div>
            <div class="footer-phone">Phone: 111111111</div>
            <div class="footer-address">Western Express Highway, Opp Gokul Anand Hotel, Grand Road , Bangalore-560096</div>
            
        </div>
        <div class="footer-socials">
            <div class="socials-title">Socials</div>
            <div class="footer-facebook">FaceBook: ZooPlanetFB</div>
            <div class="footer-instagram">Instagram: ZooPlanetIG</div>
            <div class="footer-twitter">Twitter: ZooPlanetTwT</div>
        </div>
    </div>
    
    <div class="trademark">
        @2024 Zoo Planet
    </div>

</body>

</html>