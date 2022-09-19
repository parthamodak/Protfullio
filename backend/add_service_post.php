<?php
require_once('includes/data_base.php');
session_start();

$service_title=htmlspecialchars($_POST['service_title'], ENT_QUOTES);
$service_description=htmlspecialchars($_POST['service_description'], ENT_QUOTES);
$service_icon=$_POST['service_icon'];
$service_status=htmlspecialchars($_POST['service_status'], ENT_QUOTES);

$service_insert_query="INSERT INTO `servies`(`service_title`, `service_description`, `service_icon`, `status`) VALUES ('$service_title','$service_description','$service_icon','$service_status');";
mysqli_query($db_connect, $service_insert_query);

$_SESSION['add_successfullly']="Your service  added successfully";
header('location: service_list.php');


?>