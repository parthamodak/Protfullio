<?php
    require_once('includes/data_base.php');
    $id=$_GET['id'];
    $brand_delete_query="DELETE FROM `brands` WHERE id=$id";
    $brand_delete_query_from_db=mysqli_query($db_connect,$brand_delete_query);
    header('location: brand_list.php');

?>