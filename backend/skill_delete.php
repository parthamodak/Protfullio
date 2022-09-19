<?php
    require_once('includes/data_base.php');
    $id=$_GET['id'];
    $skill_delete_query="DELETE FROM `skills` WHERE id=$id";
    $skill_delete_query_from_db=mysqli_query($db_connect,$skill_delete_query);
    header('location: skill_list.php')

?>