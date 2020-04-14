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
        
        <div style="padding: 100px;">
            <span style="font-size: 20px;">
                HOME /
            </span><br>
            <span style="font-size: 40px;font-weight: bold;">
                ABOUT
            </span>
            <br>
            <br>
            <br>
            <br>
            <span style="font-size: 30px;font-weight: bold;">
                COMPANY DETAILS
            </span><br>
            <br>
            <table>
            <?php
                
                //select query for fetching about details
                $select = mysql_safe_query('SELECT * FROM about WHERE dtype = 0');

                while($row = mysql_fetch_assoc($select)){
                    ?>
                    <tr>
                        <td style="color: gray;font-size: 20px;width: 400px;">
                            <?php echo $row['dname'];?>
                        </td>
                        <td style="color: gray;font-size: 20px;">
                            <?php echo $row['detail'];?>
                        </td>
                    </tr>
                    <?php
                }

            ?>
            </table>
            <br>
            <br>
            <br>
            <span style="font-size: 30px;font-weight: bold;">
                SUMMARY
            </span><br>
            <br>
            <div style="display: inline-block;color: gray;font-size: 20px;line-height: 25px;">
            <?php
                
                //select query for fetching about details
                $select = mysql_safe_query('SELECT * FROM about WHERE dtype = 1');

                while($row = mysql_fetch_assoc($select)){
                    echo nl2br($row['detail']);
                }

            ?>
            </div>
            <br>
            <br>
            <br>
            <span style="font-size: 30px;font-weight: bold;">
                CONTACT DETAILS
            </span><br>
            <br>
            <table>
            <?php
                
                //select query for fetching about details
                $select = mysql_safe_query('SELECT * FROM about WHERE dtype = 2');

                while($row = mysql_fetch_assoc($select)){
                    ?>
                    <tr>
                        <td style="color: gray;font-size: 20px;width: 400px;">
                            <?php echo $row['dname'];?>
                        </td>
                        <td style="color: gray;font-size: 20px;">
                            <?php echo $row['detail'];?>
                        </td>
                    </tr>
                    <?php
                }

            ?>
            </table>
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