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
            Home Page
        </span>
        <br>
        <br>
        <span style="font-size:20px;font-weight: bold;">
            Slide
        </span>
            <?php
                
                //select query for fetching about details
                $select = mysql_safe_query('SELECT * FROM home LIMIT 1');

                while($row = mysql_fetch_assoc($select)){
                    ?>
        <br>
        <br>
        <div style="background: lightgrey;padding: 15px;">
            <form method="POST" action="fn/changehome.php" enctype="multipart/form-data">
                Category
                <br>
                <input type="text" name="hcat" value="<?php echo $row['hcat'];?>"> 
                <br>
                <br>
                Title
                <br>
                <input type="text" name="htit" value="<?php echo $row['htit'];?>"> 
                <br>
                <br>
                Text
                <br>
                <input type="text" name="htext" value="<?php echo $row['htext'];?>"> 
                <br>
                <br>
                Product Image
                <br>
                <input type="file" name="himg" id="himg">
                <br>
                <img src="fn/<?php echo $row['himg'];?>" style="max-width:400px;max-height:400px;">
                <br>
                <input type="submit" value="Change">
            </form>
        </div>
        <?php
                }

            ?>
    </body>