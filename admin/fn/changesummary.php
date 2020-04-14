<?php
    // This file changes summary for the about page

    //include database connection with secure query function
    include '../db/mysql.php';

    //Check post variables
    if(!isset($_POST['summary'])){
        echo 'Error: No Details provided';
        exit;
    }
    //Update Query
    if(mysql_safe_query('UPDATE about SET detail = %s WHERE dtype = 1', $_POST['summary'])){
        header('location:../index.php');
    }else{
        //if query could not be done
        echo 'Error: Could not do Query';
        exit;
    }
?>