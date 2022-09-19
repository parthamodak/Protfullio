<?php
session_start();

$email_address= $_POST["email_address"];
$password= $_POST["password"];
$db_connect= mysqli_connect('localhost', 'root', '', 'neptune');


// Email_address
if($email_address){
    
}else{
    $_SESSION["email_login_error"]="Email Is Required!";
}
// Password
if($password){
    
}else{
    $_SESSION["password_login_error"]="Password Is Required!";
}

$encripted_login_password=md5($password);
$select_count_query= "SELECT COUNT(*) AS result FROM users WHERE email_address='$email_address' AND password='$encripted_login_password'";
$db_login_info= mysqli_query($db_connect, $select_count_query );
if(mysqli_fetch_assoc($db_login_info)['result']==1){
    $_SESSION["d_email_address"]=$email_address;
    $d_select_query="SELECT id, name FROM users WHERE email_address='$email_address'";
    $db_dashboard_info= mysqli_query($db_connect, $d_select_query );
    $after_assoc=mysqli_fetch_assoc($db_dashboard_info);

    $_SESSION["d_email_address"]=$email_address;
    $_SESSION["d_id"]=$after_assoc['id'];
    $_SESSION["d_name"]=$after_assoc['name'];

    header("location: backend/dashboard.php");
}else{
    $_SESSION["login_error"]= "Your Email or Password is Wrong!";
    header("location: login.php");
}

?>