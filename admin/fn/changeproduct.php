<?php

//include database connection with secure query function
include '../db/mysql.php';
if($_FILES['pimg']['size'] != 0 || $_FILES['pimg']['error'] != 0){
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["pimg"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["pimg"]["tmp_name"]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
        exit;
    // if everything is ok, try to upload file
    } else {
        if (!move_uploaded_file($_FILES["pimg"]["tmp_name"], $target_file)) {
            echo "Sorry, there was an error uploading your file.";
            exit;
        }
    }
    $update = mysql_safe_query('UPDATE products SET pid = %s, pname = %s, prate = %s, pprice = %s, pdiscount = %s, pinfo = %s, pimg = %s', $_POST['pid'],$_POST['pname'],$_POST['prate'],$_POST['pprice'],$_POST['pdiscount'],$_POST['pinfo'],$target_file);
}else{
    $update = mysql_safe_query('UPDATE products SET pid = %s, pname = %s, prate = %s, pprice = %s, pdiscount = %s, pinfo = %s', $_POST['pid'],$_POST['pname'],$_POST['prate'],$_POST['pprice'],$_POST['pdiscount'],$_POST['pinfo']);
}

    // This file changes product details for the about page

    

    //Check post variables
    if(!isset($_POST)){
        echo 'Error: No Details provided';
        exit;
    }
    //Update Query
    $imgurl = '';
    if($update){
        header('location:../product.php');
    }else{
        //if query could not be done
        echo 'Error: Could not do Query';
        exit;
    }
?>