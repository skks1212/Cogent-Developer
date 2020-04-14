<?php
    include 'admin/db/mysql.php';
?>
<!DOCTYPE html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/common.css">
        <link rel="stylesheet" type="text/css" href="css/header.css">
        <link rel="stylesheet" type="text/css" href="css/footer.css">
    </head>
    <body>
    <?php
        include 'header.php';
    ?>
        
        <div class="cd-page">
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

            <div class="cd-info-box" style="margin-top: 100px;">
                <span class="cd-info-title">
                    Stay Home, Stay Safe
                </span>
                <p class="cd-info-cont">
                    Dear Centers<br>
                    Hope You All Are Well With Your Family Friends Staff customers
                    This is the hard time so, we need to keep safe keep clean to your self also to
                    advise your at least 10 near dear families or friends, this disease disaster can
                    be managed not required panic.
                    Be calm & cool only adopt the safety meager suggested by government.<br>
                    <b>OUR OFFICE IS OFF TILL 14TH APRIL BUT WE ARE AVAILABLE IN PHONE
                    PLEASE DO NOT VISIT PERSONALLY.</b><br>
                    We Are Always With You.
                </p>
                <img class="cd-info-img" src="med/img/undraw_remotely_2j6y.png" style="width: 45%;top: 180px;">
                <div class="cd-info-bg-accent">
                    Thanks<br>
                    Nav Bharat Institute &<br>
                    BADOXY Electrical and Electronics Pvt.. Ltd

                </div>
            </div>

            <div class="cd-info-box" style="margin-top: 100px;">
                <span class="cd-info-title">
                    Nav Bharat Institute
                    <br>
                    <small>
                        (For Higher Education)
                    </small>
                </span>
                <p class="cd-info-cont" style="width: 60%;">
                    - A Centre for Regular, Private & Distance Courses<br>
                    - Authorized Center of Uttar Pradesh Knowledge Corporation Ltd.<br>
                    - Registered under Ministry of MSME Government of India<br>
                    - Registered with Ministry of HRD (CR Act Regd. No. :- L-57168)<br>
                    - Be Prepared for: B.A., B.Sc., B. Com., M.A., M.Sc., M. Com, L.L.B. M.B.A.,
                    M.C.A., ITI, Polytechnic, B. Tech., Etc<br><br>
                    <a id="join-us">
                        <img src="med/img/Join Us.png" width="200px">
                    </a>
                    <a id="more-details">
                        <img src="med/img/More Details.png" width="200px">
                    </a>
                </p>
                <img class="cd-info-img" src="med/img/NBI Illustraiton.png" style="top: 150px;">
                <div class="cd-info-bg-accent"></div>
            </div>

            <div class="cd-slider">
                <img class="cd-slider-bl" src="med/img/Left.png">
                <img class="cd-slider-br" src="med/img/Right.png">
                <img src="med/img/Page Mark.png" class="cd-slider-page-mark">
                <div class="cd-slider-info">
                <?php
                
                //select query for fetching about details
                $select = mysql_safe_query('SELECT * FROM home LIMIT 1');

                while($row = mysql_fetch_assoc($select)){
                    ?>
                    <span style="font-size:20px;">
                        <?php echo $row['hcat'];?>
                    </span>
                    <br>
                    <span style="font-size:60px;font-weight: bold;">
                        <?php echo $row['htit'];?>
                    </span>
                    <br>
                    <br>
                    <span style="font-size:20px;">
                        <?php echo nl2br($row['htext']);?>
                    </span>
                    <br>
                    <br>
                    <br>
                    <a id="shop-now">
                        <img src="med/img/Shop Now.png" width="200px">
                    </a>
                </div>
                <div class="cd-slider-img">
                    <img src="admin/fn/<?php echo $row['himg'];?>" style="max-height:320px;max-width:230px;">
                </div>
                <?php
                }
                ?>
            </div>

            <div class="cd-item-horizontal">
                <div class="cd-iten-h">
                    <br>
                    <span style="font-size:25px;">
                        70% off on<br>
                        <b>
                            Sunglasses
                        </b>
                    </span>
                    <img src="med/img/sunglasses.PNG" style="position: absolute;bottom: 30px; width: 150px;left: 75px;">
                </div>
                <div class="cd-iten-h">
                    <br>
                    <span style="font-size:25px;">
                        <b>
                            BAJAJ Electric Irons
                        </b>
                    </span>
                    <span style="position: absolute;left: 30px;bottom: 40px;text-align: left;">
                        Starting from<br>
                        Rs. 800/-
                    </span>
                    <img src="med/img/press.PNG" style="position: absolute;bottom: 30px; width: 150px;right: 10px;">
                </div>
                <div class="cd-iten-h" style="margin-right: 0px;">
                    <br>
                    <span style="font-size:25px;">
                        <b>
                            Dell XPS 7590 Touch
                        </b>
                    </span>
                    <span style="position: absolute;left: 30px;bottom: 40px;text-align: left;">
                        Buy Now
                    </span>
                    <img src="med/img/laptop.PNG" style="position: absolute;bottom: 30px; width: 150px;right: 10px;">
                </div>
            </div>

            <div style="font-size:40px;text-align: left;margin-top:50px;font-weight: bold;position: relative;">
                NEW PRODUCTS
                <div style="position: absolute;right: 0px;top: 0px;">
                    <img style="width: 40px;" src="med/img/Left.png">
                    <img style="width: 40px;" src="med/img/Right.png">
                </div>
            </div>

            <div class="cd-item-vertical">
                <div class="cd-item-v">
                    <div style="height: 230px;">
                        <img class="cd-item-img" src="med/img/IPhone-X-Transparent-Images-2.png" style="width: 70%;">
                    </div>
                    <div class="cd-item-info">
                        <b>Apple iPhone X</b><br>
                        Rs. 68,999
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
                        <img class="cd-item-img" src="med/img/wfl-2.png">
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
            </div>
            <div class="cd-slider">
                <img class="cd-slider-bl" src="med/img/Left.png">
                <img class="cd-slider-br" src="med/img/Right.png">
                <img src="med/img/Page Mark.png" class="cd-slider-page-mark">
                <div class="cd-slider-info">
                    <span style="font-size:20px;">
                        LIMITED OFFER
                    </span>
                    <br>
                    <span style="font-size:60px;font-weight: bold;">
                        DEAL OF THE DAY
                    </span>
                    <br>
                    <br>
                    <span style="font-size:20px;">
                        Lorem ipsum dolor sit amet, consectetur
                    </span>
                    <br>
                    <br>
                    <span style="font-size:60px;">
                        <b>1d</b> &nbsp; 1h &nbsp; 1m &nbsp; 1s
                    </span>
                    <span style="font-size:20px;">
                        left
                    </span>
                    <br>
                    <br>
                    <a id="shop-now">
                        <img src="med/img/Shop Now.png" width="200px">
                    </a>
                </div>
            </div>

            <div style="font-size:40px;text-align: left;margin-top:50px;font-weight: bold;position: relative;">
                BEST SELLERS
                <div style="position: absolute;right: 0px;top: 0px;">
                    <img style="width: 40px;" src="med/img/Left.png">
                    <img style="width: 40px;" src="med/img/Right.png">
                </div>
            </div>

            <div class="cd-item-vertical">
                <div class="cd-item-v">
                    <div style="height: 230px;">
                        <img class="cd-item-img" src="med/img/IPhone-X-Transparent-Images-2.png" style="width: 70%;">
                    </div>
                    <div class="cd-item-info">
                        <b>Apple iPhone X</b><br>
                        Rs. 68,999
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
                        <img class="cd-item-img" src="med/img/wfl-2.png">
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