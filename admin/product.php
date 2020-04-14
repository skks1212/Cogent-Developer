<?php
    include 'db/mysql.php';
    include 'header.php';
?>
<!DOCTYPE html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../css/common.css">
    </head>
    <body style="padding: 30px;">
        <span style="font-size:25px">
            Product Page
        </span>
        <br>
        <br>
        <span style="font-size:20px;font-weight: bold;">
            Product Details
        </span>
            <?php
                
                //select query for fetching about details
                $select = mysql_safe_query('SELECT * FROM products LIMIT 1');

                while($row = mysql_fetch_assoc($select)){
                    ?>
        <br>
        <br>
        <div style="background: lightgrey;padding: 15px;">
            <form method="POST" action="fn/changeproduct.php" enctype="multipart/form-data">
                Product Id
                <br>
                <input type="text" name="pid" value="<?php echo $row['pid'];?>"> 
                <br>
                <br>
                Product Name
                <br>
                <input type="text" name="pname" value="<?php echo $row['pname'];?>"> 
                <br>
                <br>
                Product Rating
                <br>
                <input type="text" name="prate" value="<?php echo $row['prate'];?>"> 
                <br>
                <br>
                Product Price
                <br>
                <input type="integer" name="pprice" value="<?php echo $row['pprice'];?>"> 
                <br>
                <br>
                Product Discount Percentage
                <br>
                <input type="integer" name="pdiscount" value="<?php echo $row['pdiscount'];?>"> 
                <br>
                <br>
                Product Info
                <br>
                <textarea name="pinfo" style="width:300px;height:200px;"><?php echo $row['pinfo'];?></textarea> 
                <br>
                <br>
                Product Image
                <br>
                <input type="file" name="pimg" id="pimg">
                <br>
                <img src="fn/<?php echo $row['pimg'];?>" style="max-width:400px;max-height:400px;">
                <br>
                <input type="submit" value="Change">
            </form>
        </div>
        <?php
                }

            ?>
    </body>