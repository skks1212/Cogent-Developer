<?php
    // This file deletes tenders for the tenders page

    //include database connection with secure query function
    include '../db/mysql.php';

    //Check get variables
    if(!isset($_GET['tid'])){
        echo 'Error: No Details provided';
        exit;
    }
    //Delete Query
    if(mysql_safe_query('DELETE FROM tender WHERE tid = %s LIMIT 1', $_GET['tid'])){
        header('location:../tender.php');
    }else{
        //if query could not be done
        echo 'Error: Could not do Query';
        exit;
    }
?>