<?php
require_once('includes/data_base.php');
session_start();

$id=$_POST['serviec_id'];
$service_title=htmlspecialchars($_POST['service_title'], ENT_QUOTES);
$service_description=htmlspecialchars($_POST['service_description'], ENT_QUOTES);
$service_icon=$_POST['service_icon'];
$service_status=$_POST['service_status'];

$sevice_update_query="UPDATE `servies` SET `service_title`='$service_title',`service_description`='$service_description',`service_icon`='$service_icon',`status`='$service_status' WHERE id=$id";
mysqli_query($db_connect, $sevice_update_query);

$_SESSION['add_successfullly']="Your service  update successfully";
header('location: service_list.php');


?>