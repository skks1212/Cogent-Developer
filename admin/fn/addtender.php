<?php
    // This file adds tenders for the tender page

    //include database connection with secure query function
    include '../db/mysql.php';

    //check if tender has to be changed to ongoing
    if(isset($_GET['change'])){
        if(mysql_safe_query('UPDATE tender SET type = 1 WHERE tid = %s', $_GET['change'])){
            header('location:../tender.php');
        }else{
            //if query could not be done
            echo 'Error: Could not do Query';
            exit;
        }
        exit;
    }

    //Check post variables
    if(!isset($_POST['tlocation']) || !isset($_POST['tbudget']) || !isset($_POST['tdate'])){
        echo 'Error: No Details provided';
        exit;
    }
    

    //Normal tender insert Query
    if(mysql_safe_query('INSERT INTO tender (tlocation,tbudget,tdate) VALUES (%s,%s,%s)', $_POST['tlocation'], $_POST['tbudget'], $_POST['tdate'])){
        header('location:../tender.php');
    }else{
        //if query could not be done
        echo 'Error: Could not do Query';
        exit;
    }
?>