<?php
    // This file processes data for the about page

    //include database connection with secure query function
    include '../db/mysql.php';

    //Check post variables
    if(!isset($_POST['dname']) || !isset($_POST['detail'])){
        echo 'Error: No Details provided';
        exit;
    }
    //check if detail is a contact detail
    if(isset($_GET['dtype']) && $_GET['dtype']==2){
        if(mysql_safe_query('INSERT INTO about (dname,detail,dtype) VALUES (%s,%s,2)', $_POST['dname'], $_POST['detail'])){
            header('location:../index.php');
        }else{
            //if query could not be done
            echo 'Error: Could not do Query';
            exit;
        }
        exit;
    }

    //Normal detail insert Query
    if(mysql_safe_query('INSERT INTO about (dname,detail) VALUES (%s,%s)', $_POST['dname'], $_POST['detail'])){
        header('location:../about.php');
    }else{
        //if query could not be done
        echo 'Error: Could not do Query';
        exit;
    }
?>