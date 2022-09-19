<?php
    require_once('includes/data_base.php');
    $id=$_GET['id'];
    $messages_delete_query="DELETE FROM `contact_box` WHERE id=$id";
    $messages_delete_query_from_db=mysqli_query($db_connect,$messages_delete_query);
    header('location: message.php')

?>