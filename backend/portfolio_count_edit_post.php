<?php
require_once('includes/data_base.php');
session_start();

$id=$_POST['portfolio_edit_id'];
$portfolio_count_description=htmlspecialchars($_POST['portfolio_count_description'], ENT_QUOTES);
$portfolio_count_icon=$_POST['portfolio_count_icon'];
$portfolio_count_number=htmlspecialchars($_POST['portfolio_count_number'], ENT_QUOTES);
$portfolio_count_status=$_POST['portfolio_count_status'];

$portfolio_count_update_query="UPDATE `portfolio_counts` SET `portfolio_description`='$portfolio_count_description',`portfolio_number`='$portfolio_count_number',`portfolio_icon`='$portfolio_count_icon',`status`='$portfolio_count_status' WHERE id=$id";
mysqli_query($db_connect, $portfolio_count_update_query);

$_SESSION['add_successfullly']="Update successfully";
header('location: portfolio_count_list.php');


?>