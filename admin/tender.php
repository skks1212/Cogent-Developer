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
            Tender Page
        </span>
        <br>
        <br>
        <span style="font-size:20px;font-weight: bold;">
            Ongoing Tenders
        </span>
        <br>
        <br>
        <table>
            <tr>
                <td>
                    <b>
                        Tender Number
                    </b>
                </td>
                <td>
                    <b>
                        Tender Location
                    </b>
                </td>
                <td>
                    <b>
                        Tender Budget
                    </b>
                </td>
                <td>
                    <b>
                        Tender Date
                    </b>
                </td>
            </tr>
            <?php
                
                //select query for fetching about details
                $select = mysql_safe_query('SELECT * FROM tender WHERE type = 1');

                while($row = mysql_fetch_assoc($select)){
                    ?>
                    <tr>
                        <td>
                            <?php echo $row['tid'];?>
                        </td>
                        <td>
                            <?php echo $row['tlocation'];?>
                        </td>
                        <td>
                            <?php echo $row['tbudget'];?>
                        </td>
                        <td>
                            <?php echo $row['tdate'];?>
                        </td>
                        <td>
                            <a href="fn/deletetender.php?tid=<?php echo $row['tid'];?>'">
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
        <span style="font-size:20px;font-weight: bold;">
            Upcoming Tenders
        </span>
        <br>
        <br>
        <table>
            <tr>
                <td>
                    <b>
                        Tender Number
                    </b>
                </td>
                <td>
                    <b>
                        Tender Location
                    </b>
                </td>
                <td>
                    <b>
                        Tender Budget
                    </b>
                </td>
                <td>
                    <b>
                        Tender Date
                    </b>
                </td>
            </tr>
            <?php
                
                //select query for fetching about details
                $select = mysql_safe_query('SELECT * FROM tender WHERE type = 0');

                while($row = mysql_fetch_assoc($select)){
                    ?>
                    <tr>
                        <td>
                            <?php echo $row['tid'];?>
                        </td>
                        <td>
                            <?php echo $row['tlocation'];?>
                        </td>
                        <td>
                            <?php echo $row['tbudget'];?>
                        </td>
                        <td>
                            <?php echo $row['tdate'];?>
                        </td>
                        <td>
                            <a href="fn/deletetender.php?tid=<?php echo $row['tid'];?>'">
                               Delete
                            </a>
                        </td>
                        <td>
                            <a href="fn/addtender.php?change=<?php echo $row['tid'];?>'">
                               Make Ongoing
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
            Add Tender<br><br>
            <form method="POST" action="fn/addtender.php" >
                <input type="text" name="tlocation" placeholder="Tender Location"> <input type="text" name="tbudget" placeholder="Tender Budget"> <input type="text" name="tdate" placeholder="Tender Date dd/mm/yy"> <input type="submit" value="Add">
            </form>
        </div>
    </body>