<?php
require_once('includes/data_base.php');
foreach ($_POST as $settings_name => $settings_value) {
   $update_query="UPDATE settings SET settings_value='$settings_value' WHERE settings_name='$settings_name'";
   mysqli_query($db_connect, $update_query);
}
header('location: owner_details.php');


?>