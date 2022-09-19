<?php
require_once('includes/data_base.php');
session_start();
$portfolio_title=htmlspecialchars($_POST['portfolio_title'], ENT_QUOTES);
$portfolio_category=htmlspecialchars($_POST['portfolio_category'], ENT_QUOTES);
$portfolio_description=htmlspecialchars($_POST['portfolio_description'], ENT_QUOTES);


$portfolio_insert_query="INSERT INTO portfolios(`portfolio_title`, `portfolio_category`, `portfolio_description`) VALUES ('$portfolio_title','$portfolio_category','$portfolio_description')";
mysqli_query($db_connect, $portfolio_insert_query);
$id=mysqli_insert_id($db_connect);


// photo upload start
    $uploaded_file_name=$_FILES['portfolio_photo']['name'];
    $exploed_uploaded_file_name=explode('.',$uploaded_file_name);
    $extention=end($exploed_uploaded_file_name);
    $new_name= $id.'.'.$extention;
    if($extention=="PNG" ||$extention=="jpg" ||$extention=="png"){
        $temp_file_location=$_FILES['portfolio_photo']['tmp_name'];
        $new_location="uploads/portfolios/".$new_name;
        move_uploaded_file($temp_file_location,$new_location);
        $portfolio_photo_update_query="UPDATE portfolios SET portfolio_photo='$new_name' WHERE id=$id";
        $portfolio_photo_update_from_db=mysqli_query($db_connect,$portfolio_photo_update_query);
        $_SESSION['portfolio_upload_successfully']="Portfolio added successfully";  
        header('location: portfolio_list.php');         
    }else{
        $_SESSION['photo_extention_error']="Profile Photo will be PNG or jpg format";
        header('location: add_portfolio_.php'); 
    }
// photo upload start

?>