<?php
    require_once('includes/data_base.php');
    $id=$_GET['id'];
    $testimonial_delete_query="DELETE FROM `testimonials` WHERE id=$id";
    $testimonial_delete_query_from_db=mysqli_query($db_connect,$testimonial_delete_query);
    header('location: testimonial_list.php');

?>