<?php
require_once('backend/includes/data_base.php');
   
   $name=htmlspecialchars($_POST['name'], ENT_QUOTES);
   $email_address=htmlspecialchars($_POST['email_address'], ENT_QUOTES);
   $message=htmlspecialchars($_POST['message'], ENT_QUOTES);
   $contact_insert_query="INSERT INTO contact_box(name, email_address, message) VALUES ('$name','$email_address','$message')";
    mysqli_query($db_connect, $contact_insert_query);
    header('location: index.php');

?>