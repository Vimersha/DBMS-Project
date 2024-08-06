<?php

    function displayErrorBooking(){
        echo "<br>";     
        echo "<div class='form-error' style='color:red;'>Invalid SafariID/Sector</div>";  
    }

    function displaySuccessBooking(int $price, int $id){    
        echo "
        <img src='/ZooManagement/Images/qr.jpeg' class='qr'>
        <div class='ticket' align='center'>Scan To Pay</div>
        <div class='form-success' align='center'>
                <div class='ticket1'>Thank You ! </div> 
                <div class='ticket2'>Your Ticket ID is ".$id.".</div>
                <div class='ticket3'>And Price Is Rs ".$price.".</div>
                <div class='ticket4'>Embrace The New Adventure!</div>
                
            </div>";  
    }