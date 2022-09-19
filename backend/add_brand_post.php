<?php
require_once('includes/data_base.php');
session_start();
$id= time().rand(100, 100000000);
// photo upload start
    $uploaded_file_name=$_FILES['brand_photo']['name'];
    $exploed_uploaded_file_name=explode('.',$uploaded_file_name);
    $extention=end($exploed_uploaded_file_name);
    $new_name= $id.'.'.$extention;
    if($extention=="PNG" ||$extention=="jpg" || $extention=="png"){
        $temp_file_location=$_FILES['brand_photo']['tmp_name'];
        $new_location="uploads/brands/".$new_name;
        move_uploaded_file($temp_file_location,$new_location);
        $brand_photo_insert_query="INSERT INTO brands (brand_photo) VALUES ('$new_name')";
        $brand_photo_insert_querye_from_db=mysqli_query($db_connect,$brand_photo_insert_query);
        $_SESSION['brand_photo_upload_successfully']="Brand added successfully";  
        header('location: brand_list.php');         
    }else{
        $_SESSION['brand_photo_extention_error']="Brand Photo will be PNG or jpg format";
        header('location: add_brand.php'); 
    }
// photo upload start


?>