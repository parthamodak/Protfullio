<?php
require_once('includes/data_base.php');
session_start();
$feedback=htmlspecialchars($_POST['feedback'], ENT_QUOTES);
$client_name=htmlspecialchars($_POST['client_name'], ENT_QUOTES);
$client_title=htmlspecialchars($_POST['client_title'], ENT_QUOTES);

$testimonal_insert_query="INSERT INTO testimonials(`client_name`, `client_title`, `feedback`) VALUES ('$client_name','$client_title','$feedback')";
mysqli_query($db_connect, $testimonal_insert_query);
$id=mysqli_insert_id($db_connect);


// photo upload start
    $uploaded_file_name=$_FILES['client_photo']['name'];
    $exploed_uploaded_file_name=explode('.',$uploaded_file_name);
    $extention=end($exploed_uploaded_file_name);
    $new_name= $id.'.'.$extention;
    if($extention=="PNG" ||$extention=="jpg" ||$extention=="png"){
        $temp_file_location=$_FILES['client_photo']['tmp_name'];
        $new_location="uploads/testimonials/".$new_name;
        move_uploaded_file($temp_file_location,$new_location);
        $client_photo_update_query="UPDATE testimonials SET client_photo='$new_name' WHERE id=$id";
        $client_photo_update_query_from_db=mysqli_query($db_connect,$client_photo_update_query);
        $_SESSION['client_photo']="Testimonial added successfully";  
        header('location: testimonial_list.php');         
    }else{
        $_SESSION['photo_extention_error']="Profile Photo will be PNG or jpg format";
        header('location: add_testimonial.php'); 
    }
// photo upload start


?>