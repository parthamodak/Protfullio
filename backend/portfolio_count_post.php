<?php
require_once('includes/data_base.php');
session_start();

$portfolio_count_icon=$_POST['portfolio_count_icon'];
$portfolio_count_description=htmlspecialchars($_POST['portfolio_count_description'], ENT_QUOTES);
$portfolio_count_number=htmlspecialchars($_POST['portfolio_count_number'], ENT_QUOTES);
$status=$_POST['portfolio_count_number_status'];

$portfolio_count_insert_query="INSERT INTO portfolio_counts(`portfolio_number`, `portfolio_description`, `status`, `portfolio_icon`) VALUES ('$portfolio_count_number','$portfolio_count_description','$status','$portfolio_count_icon')
";
mysqli_query($db_connect, $portfolio_count_insert_query);

$_SESSION['add_successfullly']="Added successfully";
header('location: portfolio_count_list.php');


?>