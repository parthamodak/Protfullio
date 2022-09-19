<?php
session_start();

$name=$_POST["name"];
$email=$_POST["email"];
$password=$_POST["password"];
$confirmPassword=$_POST["confirmPassword"];
$phone_number=$_POST["phone_number"];
$account_status=$_POST["account_status"];
$flag= false;

// Name
if($name){
    if(ctype_alpha($name)){
        $_SESSION["old_name"]=$name;
    }else{
        $flag=true;
    $_SESSION["name_error"]= "Name Must Be Alphabates!";
    }
}else{
    $flag=true;
    $_SESSION["name_error"]= "Name Is Required!";
    
}


// Email
if($email){
    if(filter_var($email,FILTER_VALIDATE_EMAIL)){
        $_SESSION["old_email"]=$email;
    }else{
        $flag=true;
        $_SESSION["email_error"]="Email Is In-Valid!";    
    }
}else{
    $flag=true;
    $_SESSION["email_error"]="Email Is Required!";
}

// Password
if($password){
    $_SESSION["old_password"]=$password;
}else{
    $flag=true;
    $_SESSION["password_error"]="Password Is Required!";
}

// Comfirm Password
if($confirmPassword){
    if($password!=$confirmPassword){
        $flag=true;
        $_SESSION["confirmPassword_error"]="Password And Confirm Password Are Not Same! ";
    }else{
        if(preg_match('/^(?=.*\d)(?=.*[@#\-_$%^&+=§!\?])(?=.*[a-z])(?=.*[A-Z])[0-9A-Za-z@#\-_$%^&+=§!\?]{6,20}$/',$password)!=1){
            $flag=true;
            $_SESSION["password_error"]="Password Will be at least one lowercase char, at least one uppercase char, at least one digit, at least one special sign! "; 
        }
    }
}else{
    $flag=true;
    $_SESSION["confirmPassword_error"]="Confirm Password Is Empty! ";
}


if($flag){
    header("location: registration.php");
}else{
    $db_connect= mysqli_connect('localhost', 'root', '', 'neptune');
    
    $encripted_password= md5($password);

    $unique_email_query="SELECT COUNT(*) AS valid_email FROM users WHERE email_address='$email'";
    $unique_email_check_from_db = mysqli_query($db_connect, $unique_email_query);
    if(mysqli_fetch_assoc($unique_email_check_from_db)['valid_email']==1){
        $_SESSION["unique_email_error"]="$email, This email is already taken";
        header('location: registration.php');
    }else{
    $insert_query=" INSERT INTO users(name, email_address, password, phone_number, account_status) VALUES('$name', '$email', '$encripted_password','$phone_number','$account_status')";
    mysqli_query($db_connect, $insert_query);

    $_SESSION["old_email"]=$email;
    $_SESSION["register_status"]="$name, Your account created Successfully";
    header('location: login.php');
    }
}

?>