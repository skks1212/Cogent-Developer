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
            About Page
        </span>
        <br>
        <br>
        <span style="font-size:20px;font-weight: bold;">
            Details
        </span>
        <br>
        <br>
        <table>
            <tr>
                <td>
                    <b>
                        Detail Name
                    </b>
                </td>
                <td>
                    <b>
                        Detail 
                    </b>
                </td>
            </tr>
            <?php
                
                //select query for fetching about details
                $select = mysql_safe_query('SELECT * FROM about WHERE dtype = 0');

                while($row = mysql_fetch_assoc($select)){
                    ?>
                    <tr>
                        <td>
                            <?php echo $row['dname'];?>
                        </td>
                        <td>
                            <?php echo $row['detail'];?>
                        </td>
                        <td>
                            <a href="fn/deletedetail.php?did=<?php echo $row['did'];?>'">
                               Delete
                            </a>
                        </td>
                    </tr>
                    <?php
                }

            ?>
        </table>
        <br>
        <br>
        <div style="background: lightgrey;padding: 15px;">
            Add Detail<br><br>
            <form method="POST" action="fn/adddetail.php" >
                <input type="text" name="dname" placeholder="Detail Name"> <input type="text" name="detail" placeholder="Detail Info"> <input type="submit" value="Add">
            </form>
        </div>
        <br>
        <br>
        <span style="font-size:20px;font-weight: bold;">
            Summary
        </span>
        <br>
        <br>
        <div style="background: lightgrey;padding: 15px;">
            Summary<br><br>
            <form method="POST" action="fn/changesummary.php" >
                
                <?php
                
                    //select query for fetching about details
                    $select = mysql_safe_query('SELECT * FROM about WHERE dtype = 1 LIMIT 1');
    
                    while($row = mysql_fetch_assoc($select)){
                        echo '<textarea name="summary" style="width:400px;height:300px;">'.$row['detail'].'</textarea>';
                    }
    
                ?>
                <br>
                <input type="submit" value="Change">
            </form>
        </div>
        <br>
        <br>
        <span style="font-size:20px;font-weight: bold;">
            Contact Details
        </span>
        <br>
        <br>
        <table>
            <tr>
                <td>
                    <b>
                        Detail Name
                    </b>
                </td>
                <td>
                    <b>
                        Detail 
                    </b>
                </td>
            </tr>
            <?php
                
                //select query for fetching about details
                $select = mysql_safe_query('SELECT * FROM about WHERE dtype = 2');

                while($row = mysql_fetch_assoc($select)){
                    ?>
                    <tr>
                        <td>
                            <?php echo $row['dname'];?>
                        </td>
                        <td>
                            <?php echo $row['detail'];?>
                        </td>
                        <td>
                            <a href="fn/deletedetail.php?did=<?php echo $row['did'];?>'">
                               Delete
                            </a>
                        </td>
                    </tr>
                    <?php
                }

            ?>
        </table>
        <br>
        <br>
        <div style="background: lightgrey;padding: 15px;">
            Add Contact Detail<br><br>
            <form method="POST" action="fn/adddetail.php?dtype=2" >
                <input type="text" name="dname" placeholder="Detail Name"> <input type="text" name="detail" placeholder="Detail Info"> <input type="submit" value="Add">
            </form>
        </div>
    </body>