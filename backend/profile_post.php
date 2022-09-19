<?php
session_start();
$db_connect= mysqli_connect('localhost', 'root', '', 'neptune');
if(isset($_POST['change_name'])){
    $name=$_POST['old_name'];
    $phone_number=$_POST['phone_number'];
    $email=$_POST['email_address'];
    $id=$_SESSION["d_id"];
    $old_phone_number_query="SELECT phone_number, email_address FROM users WHERE id=1";
    $old_phone_number_from_db=mysqli_fetch_assoc(mysqli_query($db_connect,$old_phone_number_query));
    $_SESSION["old_phone_number"]=$old_phone_number_from_db['phone_number'];

    $name_update_query="UPDATE users SET name='$name', phone_number='$phone_number',email_address='$email' WHERE id=$id";
    mysqli_query($db_connect,$name_update_query);
    
    $_SESSION['chanegd_name']= "Changed successfully";
    
    $_SESSION["d_name"]=$name;
    $_SESSION["old_phone_number"]=$phone_number;
    $_SESSION["d_email_address"]=$email;
    header('location: profile.php');
    
}
if(isset($_POST['photo_upload'])){
    $id=$_SESSION["d_id"];
    $uploaded_file_name=$_FILES['upload_photo']['name'];
    $exploed_uploaded_file_name=explode('.',$uploaded_file_name);
    $extention=end($exploed_uploaded_file_name);
    $new_name= $id.'.'.$extention;
    if($extention=="PNG" ||$extention=="jpg" || $extention=="png"){
        $temp_file_location=$_FILES['upload_photo']['tmp_name'];
        $new_location="uploads/profile_photo/".$new_name;
        move_uploaded_file($temp_file_location,$new_location);
        $profile_photo_update_query="UPDATE users SET profile_photo_name='$new_name' WHERE id=$id";
        $profile_photo_update_from_db=mysqli_query($db_connect,$profile_photo_update_query);
        header('location: profile.php');  
        $_SESSION['photo_extention_successfully']="Photo uploaded successfully";         
    }else{
        $_SESSION['photo_extention_error']="Profile Photo will be PNG or jpg format";
        header('location: profile.php'); 
    }
}

if(isset($_POST['change_password'])){
    // print_r($_POST['current_password']);
    $id=$_SESSION["d_id"];
    $encripted_current_password=md5($_POST['current_password']);
    $current_password_check_query="SELECT COUNT(*) AS password_check FROM users WHERE id=$id AND password='$encripted_current_password'";
    $current_password_check= mysqli_fetch_assoc(mysqli_query($db_connect,$current_password_check_query))['password_check'];
    if($current_password_check==1){
        $new_password=($_POST['new_password']);
        $confirm_password=($_POST['confirm_password']);
        if(preg_match('/^(?=.*\d)(?=.*[@#\-_$%^&+=§!\?])(?=.*[a-z])(?=.*[A-Z])[0-9A-Za-z@#\-_$%^&+=§!\?]{6,20}$/',$new_password)==1){
            if($new_password==$confirm_password){
                $encripted_new_password=md5($_POST['new_password']);
                $password_update_query="UPDATE users SET password='$encripted_new_password' WHERE id=$id";
                mysqli_query($db_connect,$password_update_query);
                $_SESSION['changed_password']= "your password changed successfully";
                header('location: profile.php');
            }else{
                $_SESSION["new_and_confirm_password_error"]="New Password And Confirm Password Are Not Same! ";
                header('location: profile.php');
            }
            
        }else{
            $_SESSION["new_password_error"]="Password Will be at least one lowercase char, at least one uppercase char, at least one digit, at least one special sign! ";
            header('location: profile.php');
        }
        
    }else{
        $_SESSION["current_password_error"]="Your current password is wrong! ";
        header('location: profile.php');
    }

}


?>