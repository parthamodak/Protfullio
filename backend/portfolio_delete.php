<?php
    require_once('includes/data_base.php');
    $id=$_GET['id'];
    $portfolio_delete_query="DELETE FROM `portfolios` WHERE id=$id";
    $portfolio_delete_query_from_db=mysqli_query($db_connect,$portfolio_delete_query);
    header('location: portfolio_list.php');

?>