<?php
    include 'admin/db/mysql.php';
?>
<!DOCTYPE html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/common.css">
        <link rel="stylesheet" type="text/css" href="css/header.css">
        <link rel="stylesheet" type="text/css" href="css/footer.css">
        <link rel="stylesheet" type="text/css" href="css/item.css">
    </head>
    <body>
    <?php
        include 'header.php';
    ?>
        
        
        <div style="padding: 100px;">
            <span style="font-size: 20px;">
                HOME / NEW PRODUCTS / APPLIANCES /
            </span>
            <br>
            <br>
            <br>
            <br>
            <?php
                
                //select query for fetching tender
                $select = mysql_safe_query('SELECT * FROM products LIMIT 1');

                while($row = mysql_fetch_assoc($select)){
                    ?>
            <div class="cd-product-l">
                <div class="cd-product-main-img" style="display: flex; align-items: center;justify-content: center;">
                    <img src="admin/fn/<?php echo $row['pimg'];?>" width="80%">
                </div>
                <br>
                <br>
                <div style="display: flex; align-items: center;justify-content: center;width: 700px;">
                    <div class="cd-product-sub-img" style="display: flex; align-items: center;justify-content: center;margin-right: 50px;">
                        <img src="med/img/Layer 612.png" width="80%">
                    </div>
                    <div class="cd-product-sub-img" style="display: flex; align-items: center;justify-content: center;margin-right: 50px;">
                        <img src="med/img/Layer 612.png" width="80%">
                    </div>
                    <div class="cd-product-sub-img" style="display: flex; align-items: center;justify-content: center;">
                        <img src="med/img/Layer 612.png" width="80%">
                    </div>
                </div>
                
            </div>
            <div class="cd-product-r">
            
                Product ID: <?php echo $row['pid'];?>
                <br>
                <span style="font-size: 40px;font-weight: bold;">
                    <?php echo $row['pname'];?>
                </span>
                <br>
                <br>
                <?php
                    $x = 0;
                    while ($x < $row['prate']){
                        ?>
                        <img src="med/img/iconfinder_star_-1.png" width="30px">
                        <?php
                        $x++;
                    }
                    ?>
                <a href="" style="color: #2874F0;">
                    12,345 Reviews
                </a>
                <br>
                <br>
                <span style="font-size: 30px;">
                    Rs. <?php echo ($row['pprice'] - ($row['pprice'] / 100 * $row['pdiscount']));?>
                </span>
                <?php echo $row['pdiscount'];?>% OFF
                <br>
                <strike>
                    Rs. <?php echo $row['pprice'];?>
                </strike>
                (inclusive of all taxes)
                <br>
                <br>
                <span style="font-size: 20px;">
                <?php echo nl2br($row['pinfo']);?>
                </span>
                <br>
                <br>
                <?php
                }
                ?>
                <img src="med/img/Buy Now Button.png" width="100%">
                <br>
                <img src="med/img/Add To Cart Button.png" width="100%">
            </div>
            <br>
            <br>
            <br>
            <span style="font-size: 30px;font-weight: bold;">
                Compare With
            </span>
            <br>
            <br>
            <div class="cd-item-vertical">
                <div class="cd-item-v">
                    <div style="height: 230px;">
                        <img class="cd-item-img" src="med/img/wfl-2.png" style="width: 80%;">
                    </div>
                    <div class="cd-item-info">
                        <b>VOLTAS WFL70S</b><br>
                        Rs. 41,300
                    </div>
                    <br>
                    <br>
                    <a id="shop-now">
                        <img src="med/img/Shop Now.png" width="92%">
                    </a>
                    <br>
                    <a style="font-size: 20px;">
                        Add to cart
                    </a>
                </div>
                <div class="cd-item-v">
                    <div style="height: 230px;">
                        <img class="cd-item-img" src="med/img/asset-3.png">
                    </div>
                    <div class="cd-item-info">
                        <b>Ray Aviator Classic</b><br>
                        Rs. 10,875
                    </div>
                    <br>
                    <br>
                    <a id="shop-now">
                        <img src="med/img/Shop Now.png" width="92%">
                    </a>
                    <br>
                    <a style="font-size: 20px;">
                        Add to cart
                    </a>
                </div>
                <div class="cd-item-v">
                    <div style="height: 230px;">
                        <img class="cd-item-img" src="med/img/asset-12.png" style="width: 80%;">
                    </div>
                    <div class="cd-item-info">
                        <b>Lenovo USB Keyboard</b><br>
                            Rs. 1,684
                    </div>
                    <br>
                    <br>
                    <a id="shop-now">
                        <img src="med/img/Shop Now.png" width="92%">
                    </a>
                    <br>
                    <a style="font-size: 20px;">
                        Add to cart
                    </a>
                </div>
                <div class="cd-item-v" style="margin-right: 0px;">
                    <div style="height: 230px;">
                        <img class="cd-item-img" src="med/img/asset-12.png" style="width: 80%;">
                    </div>
                    <div class="cd-item-info">
                        <b>Lenovo USB Keyboard</b><br>
                            Rs. 1,684
                    </div>
                    <br>
                    <br>
                    <a id="shop-now">
                        <img src="med/img/Shop Now.png" width="92%">
                    </a>
                    <br>
                    <a style="font-size: 20px;">
                        Add to cart
                    </a>
                </div>
                <img src="med/img/Right.png" style="margin-left: 20px;">
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