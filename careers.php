<?php
    include 'admin/db/mysql.php';
?>
<!DOCTYPE html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/common.css">
        <link rel="stylesheet" type="text/css" href="css/header.css">
        <link rel="stylesheet" type="text/css" href="css/footer.css">
        <link rel="stylesheet" type="text/css" href="css/product-list.css">
    </head>
    <body>
        <?php
            include 'header.php';
        ?>
        <div class="cd-page" style="text-align: left;">
            <span style="font-size: 20px;">
                HOME /
            </span><br>
            <span style="font-size: 40px;font-weight: bold;">
                CAREERS
            </span>
            <br>
            <br>
            <Br>
        
            <div class="cd-info-box">
                <span class="cd-info-title">
                    Work With Us
                </span>
                <p class="cd-info-cont">
                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed<br>
                    diam nonumy eirmod tempor invidunt ut labore et<br>
                    dolore magna aliquyam erat, sed diam voluptua.<br>
                </p>
                <img class="cd-info-img" src="med/img/undraw_career_progress_ivdb.png" style="top: 40px;width: 40%;">
                <div class="cd-info-bg-accent"></div>
            </div>

            <div class="cd-tender-box" style="margin-top: 100px;">
                <span style="font-size: 30px;font-weight: bold;">
                    FILL UP YOUR DETAILS
                </span>
                <br>
                <br>
                <center>
                    <form method="POST" action="admin/fn/submitapp.php">
                    <img src="med/img/Group 156.png" style="width: 160px;">
                    <br>
                    <Br>
                    <input name="afname" placeholder="First Name" style="height: 40px;"> &nbsp; &nbsp;  &nbsp; &nbsp;  &nbsp; &nbsp;  &nbsp; &nbsp;  &nbsp; &nbsp;  &nbsp; &nbsp;  &nbsp; &nbsp;  &nbsp; &nbsp;  &nbsp; &nbsp; <input name="alname" placeholder="Last Name" style="height: 40px;">
                    <br>
                    <br>
                    <input name="ano" placeholder="Number" style="height: 40px;"> &nbsp; &nbsp;  &nbsp; &nbsp;  &nbsp; &nbsp;  &nbsp; &nbsp;  &nbsp; &nbsp;  &nbsp; &nbsp;  &nbsp; &nbsp;  &nbsp; &nbsp;  &nbsp; &nbsp; <input name="amail" placeholder="Email" style="height: 40px;">
                    <br>
                    <br>
                    <input name="agender" placeholder="Gender" style="height: 40px;"> &nbsp; &nbsp;  &nbsp; &nbsp;  &nbsp; &nbsp;  &nbsp; &nbsp;  &nbsp; &nbsp;  &nbsp; &nbsp;  &nbsp; &nbsp;  &nbsp; &nbsp;  &nbsp; &nbsp; <input name="aDOB" placeholder="Date of Birth" style="height: 40px;">
                    <br>
                    <br>
                    <input name="aqualification" placeholder="Qualification" style="height: 40px;"> &nbsp; &nbsp;  &nbsp; &nbsp;  &nbsp; &nbsp;  &nbsp; &nbsp;  &nbsp; &nbsp;  &nbsp; &nbsp;  &nbsp; &nbsp;  &nbsp; &nbsp;  &nbsp; &nbsp; <input name="ainterest" placeholder="Interest" style="height: 40px;">
                    <br>
                    <br>
                    <img src="med/img/Group 161.png" style="width: 100%;">
                    <br>
                    <br>
                    
                    <table>
                        <tr>
                            <td>
                                <img src="med/img/Group 162.png" style="width: 30px;">
                            </td>
                            <td style="font-weight: bold;padding-left: 20px;">
                                I agree to the given terms and conditions
                            </td>
                        </tr>
                    </table>
                    <br>
                    <br>
                    <br>
                    <button>
                    <img src="med/img/Submit.png" style="width: 200px;">
                    </button>
                    </form>
                </center>
            </div>
        </div>


        <footer>
            <table>
                <tr>
                    <td>
                        <div class="cd-newsletter-title" style="color: yellow;font-size: 25px;font-weight: bold;display: inline-block;">
                            NEWSLETTER &nbsp; &nbsp;
                        </div>
                    </td>
                    <td>
                        <input type="text" placeholder="Enter e-mail address" style="font-size: 25px;padding: 20px;border: 0px;background: white;width: 450px;">
                    </td>
                    <td>
                        <img src="med/img/Subscribe Button.png" style="margin-top: 20px;height: 90px;">
                    </td>
                </tr>
            </table>
            <div class="cd-footer-column">
                <b>STYLE ADVISOR</b><br>
                Your Account<br>
                Information<br>
                Addresses<br>
                Discount<br>
                Orders History<br>
                Order Tracking
            </div>
            
            <div class="cd-footer-column">
                <b>SHOPPING GUIDE</b><br>
                Blog<br>
                FAQs<br>
                Payment<br>
                Shipment<br>
                Where is my order?<br>
                Return policy
            </div>

            <div class="cd-footer-column">
                <b>INFORMATION</b><br>
                Site Map<br>
                Search Terms<br>
                Advanced Search<br>
                About Us<br>
                Contact Us<br>
                Suppliers<br>
                    
            </div>

            <div class="cd-footer-column">
                <b>CONNECT</b><br>
                <img src="med/img/Icon awesome-facebook-square-1.png">
                <img src="med/img/Icon awesome-twitter-square.png">
                <img src="med/img/Icon awesome-linkedin.png">
                <img src="med/img/Icon simple-instagram-1.png"><br>
                <b>PAY VIA</b><br>
                <img src="med/img/Icon awesome-cc-mastercard.png">
                <img src="med/img/Icon awesome-cc-visa-1.png">
                <img src="med/img/Icon awesome-cc-paypal-1.png"><br>
                <b>CONTACT</b><br>
            </div>
        </footer>

    </body>