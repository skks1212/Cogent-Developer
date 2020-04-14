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
            Careers Page
        </span>
        <br>
        <br>
        <span style="font-size:20px;font-weight: bold;">
            Applications
        </span>
        <table>
            <tr>
                <td>
                    <b>
                        Full Name
                    </b>
                </td>
                <td>
                    <b>
                        Contact No.
                    </b>
                </td>
                <td>
                    <b>
                        Email
                    </b>
                </td>
                <td>
                    <b>
                        Gender
                    </b>
                </td>
                <td>
                    <b>
                        DOB
                    </b>
                </td>
                <td>
                    <b>
                        Qualification
                    </b>
                </td>
                <td>
                    <b>
                        Interest
                    </b>
                </td>
            </tr>
            <?php
                
                //select query for fetching about details
                $select = mysql_safe_query('SELECT * FROM appllications');

                while($row = mysql_fetch_assoc($select)){
                    ?>
                    <tr>
                        <td>
                            <?php echo $row['aname'];?>
                        </td>
                        <td>
                            <?php echo $row['ano'];?>
                        </td>
                        <td>
                            <?php echo $row['amail'];?>
                        </td>
                        <td>
                            <?php echo $row['agender'];?>
                        </td>
                        <td>
                            <?php echo $row['aDOB'];?>
                        </td>
                        <td>
                            <?php echo $row['aqualification'];?>
                        </td>
                        <td>
                            <?php echo $row['ainterest'];?>
                        </td>
                    </tr>
                    <?php
                }

            ?>
        </table>
    </body>