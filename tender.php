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
                TENDER
            </span>
            <br>
            <br>
            <Br>
        
            <div class="cd-info-box">
                <span class="cd-info-title">
                    Our Projects
                </span>
                <p class="cd-info-cont">
                    We build and develop the future<br>
                    environment for working, living and communication.<br>
                    We take on projects with the intention of finding smart,<br>
                    new solutions to problems, large and small. <br>
                </p>
                <img class="cd-info-img" src="med/img/undraw_project_completed_w0oq.png">
                <div class="cd-info-bg-accent"></div>
            </div>

            <div class="cd-tender-box" style="margin-top: 100px;">
                <span style="font-size: 30px;font-weight: bold;">
                    ONGOING TENDERS
                </span>
                <br>
                <br>
                <span style="font-size: 25px;">
                    Lorem ipsum dolor sit amet, consetetur sadipscing elit.
                </span>
                <Br>
                <br>
                <?php
                
                //select query for fetching tender
                $select = mysql_safe_query('SELECT * FROM tender WHERE type = 1');

                while($row = mysql_fetch_assoc($select)){
                    ?>
                    <table style="display: inline-block;">
                    <tr>
                        <td>
                            <img src="med/img/Icon awesome-hashtag.png" width="20px">
                        </td>
                        <td>
                            &nbsp; <?php echo $row['tid'];?>
                        </td>
                    </tr>
                </table>
                <table style="display: inline-block;margin-left: 30px;">
                    <tr>
                        <td>
                            <img src="med/img/Icon material-location-on.png" height="20px">
                        </td>
                        <td>
                            &nbsp; <?php echo $row['tlocation'];?>
                        </td>
                    </tr>
                </table>
                <table style="display: inline-block;margin-left: 30px;">
                    <tr>
                        <td>
                            <img src="med/img/Icon awesome-rupee-sign.png" height="20px">
                        </td>
                        <td>
                            &nbsp; <?php echo $row['tbudget'];?>
                        </td>
                    </tr>
                </table>
                <table style="display: inline-block;margin-left: 30px;">
                    <tr>
                        <td>
                            <img src="med/img/Icon awesome-calendar-check.png" height="20px">
                        </td>
                        <td>
                            &nbsp; <?php echo $row['tdate'];?>
                        </td>
                    </tr>
                </table>
                <br>
                    <?php
                }

            ?>
                <br>
                <br>
                <center>
                    <img src="med/img/Group 6.png" style="width: 200px;">
                    <br>
                    <Br>
                    <img src="med/img/Left.png" style="width: 40px;"> <img src="med/img/1.png" style="width: 40px;"> <img src="med/img/2.png" style="width: 40px;"> <img src="med/img/3.png" style="width: 40px;"> <img src="med/img/Right.png" style="width: 40px;">
                </center>
            </div>
            <div class="cd-tender-box" style="margin-top: 100px;">
                <span style="font-size: 30px;font-weight: bold;">
                    UPCOMING TENDERS
                </span>
                <br>
                <br>
                <span style="font-size: 25px;">
                    Lorem ipsum dolor sit amet, consetetur sadipscing elit.
                </span>
                <Br>
                <br>
                <?php
                
                //select query for fetching tender
                $select = mysql_safe_query('SELECT * FROM tender WHERE type = 0');

                while($row = mysql_fetch_assoc($select)){
                    ?>
                    <table style="display: inline-block;">
                    <tr>
                        <td>
                            <img src="med/img/Icon awesome-hashtag.png" width="20px">
                        </td>
                        <td>
                            &nbsp; <?php echo $row['tid'];?>
                        </td>
                    </tr>
                </table>
                <table style="display: inline-block;margin-left: 30px;">
                    <tr>
                        <td>
                            <img src="med/img/Icon material-location-on.png" height="20px">
                        </td>
                        <td>
                            &nbsp; <?php echo $row['tlocation'];?>
                        </td>
                    </tr>
                </table>
                <table style="display: inline-block;margin-left: 30px;">
                    <tr>
                        <td>
                            <img src="med/img/Icon awesome-rupee-sign.png" height="20px">
                        </td>
                        <td>
                            &nbsp; <?php echo $row['tbudget'];?>
                        </td>
                    </tr>
                </table>
                <table style="display: inline-block;margin-left: 30px;">
                    <tr>
                        <td>
                            <img src="med/img/Icon awesome-calendar-check.png" height="20px">
                        </td>
                        <td>
                            &nbsp; <?php echo $row['tdate'];?>
                        </td>
                    </tr>
                </table>
                <br>
                    <?php
                }

            ?>
                <br>
                <br>
                <center>
                    <img src="med/img/Group 6.png" style="width: 200px;">
                    <br>
                    <Br>
                    <img src="med/img/Left.png" style="width: 40px;"> <img src="med/img/1.png" style="width: 40px;"> <img src="med/img/2.png" style="width: 40px;"> <img src="med/img/3.png" style="width: 40px;"> <img src="med/img/Right.png" style="width: 40px;">
                </center>
            </div>
            <div class="cd-tender-box" style="margin-top: 100px;">
                <span style="font-size: 30px;font-weight: bold;">
                    TENDER PROPOSAL SUBMISSION
                </span>
                <br>
                <br>
                <span style="font-size: 25px;">
                    Lorem ipsum dolor sit amet, consetetur sadipscing elit.
                </span>
                <br>
                <br>
                <center>
                    <img src="med/img/Submit.png" style="width: 200px;">
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