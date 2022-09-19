<?php
    require_once('includes/data_base.php');
    $id=$_GET['id'];
    $service_delete_query="DELETE FROM `servies` WHERE id=$id";
    $service_delete_query_from_db=mysqli_query($db_connect,$service_delete_query);
    header('location: service_list.php')

?>