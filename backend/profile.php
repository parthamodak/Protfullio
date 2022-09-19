<?php
$Tag_Line="Profile - Change Your Info";
?>
<?php require_once('includes/header.php');?>     
            <div class="app-content">
                <div class="content-wrapper">
                    <div class="container">
                            <div class="row">
                                <div class="col">
                                    <div class="page-description">
                                        <h1>Profile</h1>
                                    </div>
                                </div>
                            </div> 
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="card">
                                        <?php if(isset($_SESSION["chanegd_name"])):?>
                                        <div class="alert alert-custom alert-success" role="alert">
                                            <div class="custom-alert-icon icon-success"><i class="material-icons-outlined">done</i></div>
                                                <div class="alert-content">
                                                <span class="alert-title"><?=$_SESSION["d_name"]?></span>
                                                    <span class="alert-text"><?php echo$_SESSION["chanegd_name"];?></span>
                                                </div>
                                        </div>
                                        <?php endif; unset($_SESSION["chanegd_name"]);?>
                                        <div class="card-header">
                                            <h5 class="card-title">Name Change</h5>
                                        </div>
                                        <div class="card-body">
                                            <div class="example-container">
                                                <form action="profile_post.php" method="POST">
                                                    <div class="example-content">
                                                        <label for="name" class="form-label">Name</label>
                                                        <input type="text" class="form-control" id="name" name="old_name" value="<?=$_SESSION["d_name"];?>" >
                                                    </div>
                                                    <div class="example-content">
                                                        <label for="phone_number" class="form-label">Phone Number</label>
                                                        <input type="text" class="form-control" id="phone_number" name="phone_number" value="<?php echo(isset($_SESSION["old_phone_number"]))?$_SESSION["old_phone_number"] : "";?>" >
                                                    </div>
                                                    <div class="example-content">
                                                        <label for="email_address" class="form-label">Email Address</label>
                                                        <input type="text" class="form-control" id="email_address" name="email_address" value="<?=$_SESSION["d_email_address"];?>" >
                                                    </div>
                                                    <div  class="example-content">
                                                    <button type="submit" name="change_name" class="btn btn-success from-control">Change</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div> 
                                </div>
                                <div class="col-md-6">
                                    <div class="card">
                                    <?php if(isset($_SESSION["photo_extention_successfully"])):?>
                                        <div class="alert alert-custom alert-success" role="alert">
                                            <div class="custom-alert-icon icon-success"><i class="material-icons-outlined">done</i></div>
                                                <div class="alert-content">
                                                <span class="alert-title"><?=$_SESSION["d_name"]?></span>
                                                    <span class="alert-text"><?php echo$_SESSION["photo_extention_successfully"];?></span>
                                                </div>
                                        </div>
                                        <?php endif; unset($_SESSION["photo_extention_successfully"]);?>

                                        <?php if(isset($_SESSION["photo_extention_error"])):?>
                                        <div class="alert alert-custom alert-danger" role="alert">
                                            <div class="custom-alert-icon icon-danger"><i class="material-icons-outlined">cancel</i></div>
                                                <div class="alert-content">
                                                <span class="alert-title"><?=$_SESSION["d_name"]?></span>
                                                    <span class="alert-text"><?php echo$_SESSION["photo_extention_error"];?></span>
                                                </div>
                                        </div>
                                        <?php endif; unset($_SESSION["photo_extention_error"]);?>
                                        <div class="card-header">
                                            <h5 class="card-title">Profile Photo</h5>
                                        </div>
                                        <div class="card-body">
                                            <div class="example-container">
                                                <form action="profile_post.php" method="POST" enctype="multipart/form-data">
                                                    <div class="example-content">
                                                        <img src="uploads/profile_photo/<?= $profile_photo_name_from_db?>" class="img-fluid" alt="" width="200px">
                                                    </div>
                                                    <div class="example-content">
                                                        <label for="name" class="form-label">Upload Photo</label>
                                                        <input type="file" class="form-control" name="upload_photo" id="name">
                                                    </div>
                                                    <div class="example-content">
                                                    <button type="submit" name="photo_upload" class="btn btn-success from-control">Upload</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div> 
                                </div>
                            </div>   
                            <div class="row">
                                <div class="col-md-6">
                                <div class="card">
                                    <!-- success alert -->
                                        <?php if(isset($_SESSION["changed_password"])):?>
                                        <div class="alert alert-custom alert-success" role="alert">
                                            <div class="custom-alert-icon icon-success"><i class="material-icons-outlined">done</i></div>
                                                <div class="alert-content">
                                                <span class="alert-title"><?=$_SESSION["d_name"]?></span>
                                                    <span class="alert-text"><?php echo$_SESSION["changed_password"];?></span>
                                                </div>
                                        </div>
                                        <?php endif; unset($_SESSION["changed_password"]);?>

                                        <!-- error alert -->
                                        <?php if(isset($_SESSION["current_password_error"])):?>
                                        <div class="alert alert-custom alert-danger" role="alert">
                                            <div class="custom-alert-icon icon-danger"><i class="material-icons-outlined">cancel</i></div>
                                                <div class="alert-content">
                                                <span class="alert-title"><?=$_SESSION["d_name"]?></span>
                                                    <span class="alert-text"><?php echo $_SESSION["current_password_error"];?></span>
                                                </div>
                                        </div>
                                        <?php endif; unset($_SESSION["current_password_error"]);?>

                                        <?php if(isset($_SESSION["new_password_error"])):?>
                                        <div class="alert alert-custom alert-danger" role="alert">
                                            <div class="custom-alert-icon icon-danger"><i class="material-icons-outlined">cancel</i></div>
                                                <div class="alert-content">
                                                <span class="alert-title"><?=$_SESSION["d_name"]?></span>
                                                    <span class="alert-text"><?php echo $_SESSION["new_password_error"];?></span>
                                                </div>
                                        </div>
                                        <?php endif; unset($_SESSION["new_password_error"]);?>

                                        <?php if(isset($_SESSION["new_and_confirm_password_error"])):?>
                                        <div class="alert alert-custom alert-danger" role="alert">
                                            <div class="custom-alert-icon icon-danger"><i class="material-icons-outlined">cancel</i></div>
                                                <div class="alert-content">
                                                <span class="alert-title"><?=$_SESSION["d_name"]?></span>
                                                    <span class="alert-text"><?php echo $_SESSION["new_and_confirm_password_error"];?></span>
                                                </div>
                                        </div>
                                        <?php endif; unset($_SESSION["new_and_confirm_password_error"]);?>
                                        <div class="card-header">
                                            <h5 class="card-title">Password Change</h5>
                                        </div>
                                        <div class="card-body">
                                            <div class="example-container">
                                                <form action="profile_post.php" method="POST">
                                                    <div class="example-content">
                                                        <label for="current_password" class="form-label">Current Passowrd</label>
                                                        <input type="Password" class="form-control <?php echo (isset($_SESSION["current_password_error"]))?"is-invalid" : "";?>" id="current_password" name="current_password" >
                                                    </div>
                                                    <div class="example-content">
                                                        <label for="new_password" class="form-label">New Passowrd</label>
                                                        <input type="Password" class="form-control <?php echo (isset($_SESSION["new_password_error"]))?"is-invalid" : "";?>" id="new_password" name="new_password" >
                                                    </div>
                                                    <div class="example-content">
                                                        <label for="confirm_password" class="form-label">Confirm Passowrd</label>
                                                        <input type="Password" class="form-control <?php echo (isset($_SESSION["new-and_confirm_password_error"]))?"is-invalid" : "";?>" id="confirm_password" name="confirm_password" >
                                                    </div>
                                                    <div  class="example-content">
                                                    <button type="submit" name="change_password" class="btn btn-success from-control">Change</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>     
                    </div>                  
                </div>
            </div>
            <?php require_once('includes/footer.php');?> 