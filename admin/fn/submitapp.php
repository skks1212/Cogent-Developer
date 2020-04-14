<?php
    // This file adds tenders for the tender page

    //include database connection with secure query function
    include '../db/mysql.php';

    //check if tender has to be changed to ongoing
    if(isset($_GET['change'])){
        if(mysql_safe_query('DELETE * FROM appllications WHERE aid = %s', $_GET['change'])){
            header('location:../careers.php');
        }else{
            //if query could not be done
            echo 'Error: Could not do Query';
            exit;
        }
        exit;
    }

    //Check post variables
    if(!isset($_POST)){
        echo 'Error: No Details provided';
        exit;
    }
    

    //Normal tender insert Query
    if(mysql_safe_query('INSERT INTO appllications (aname,ano,amail,agender,aDOB,aqualification,ainterest) VALUES (%s,%s,%s,%s,%s,%s,%s)', $_POST['afname'].' '.$_POST['alname'], $_POST['ano'], $_POST['amail'],$_POST['agender'],$_POST['aDOB'],$_POST['aqualification'],$_POST['ainterest'])){
        header('location:../../careers.php');
    }else{
        //if query could not be done
        echo 'Error: Could not do Query';
        exit;
    }
?>