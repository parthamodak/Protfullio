<?php
    require_once('includes/data_base.php');
    $id=$_GET['id'];
    $portfolio_count_delete_query="DELETE FROM `portfolio_counts` WHERE id=$id";
    $portfolio_count_delete_query_from_db=mysqli_query($db_connect,$portfolio_count_delete_query);
    header('location: portfolio_count_list.php')

?>