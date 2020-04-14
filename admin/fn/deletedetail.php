<?php
    // This file processes data for the about page

    //include database connection with secure query function
    include '../db/mysql.php';

    //Check get variables
    if(!isset($_GET['did'])){
        echo 'Error: No Details provided';
        exit;
    }
    //Delete Query
    if(mysql_safe_query('DELETE FROM about WHERE did = %s LIMIT 1', $_GET['did'])){
        header('location:../about.php');
    }else{
        //if query could not be done
        echo 'Error: Could not do Query';
        exit;
    }
?>