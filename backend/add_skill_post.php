<?php
require_once('includes/data_base.php');
session_start();

$skill_title=htmlspecialchars($_POST['skill_title'], ENT_QUOTES);
$skill_description=htmlspecialchars($_POST['skill_description'], ENT_QUOTES);
$skill_progress=htmlspecialchars($_POST['skill_progress'], ENT_QUOTES);

$skill_insert_query="INSERT INTO `skills`(`skill_title`, `skill_description`, `skill_progress`) VALUES ('$skill_title','$skill_description','$skill_progress');";
mysqli_query($db_connect, $skill_insert_query);

$_SESSION['add_successfullly']="Your skill added successfully";
header('location: skill_list.php');


?>