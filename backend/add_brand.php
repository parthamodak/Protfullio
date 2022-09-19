<?php
$Tag_Line="Portfolio - add portfolio";

?>
<?php require_once('includes/header.php');?>     
            <div class="app-content">
                <div class="content-wrapper">
                    <div class="container">
                            <div class="row">
                                <div class="col">
                                    <div class="page-description">
                                        <h1> Brand</h1>
                                    </div>
                                </div>
                            </div> 
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">
                                        <?php if(isset($_SESSION["brand_photo_extention_error"])):?>
                                        <div class="alert alert-custom alert-danger" role="alert">
                                            <div class="custom-alert-icon icon-danger"><i class="material-icons-outlined">cancel</i></div>
                                                <div class="alert-content">
                                                <span class="alert-title"><?=$_SESSION["d_name"]?></span>
                                                    <span class="alert-text"><?php echo$_SESSION["brand_photo_extention_error"];?></span>
                                                </div>
                                        </div>
                                        <?php endif; unset($_SESSION["brand_photo_extention_error"]);?>
                                        <div class="card-header">
                                            <h5 class="card-title">Add Brand</h5>
                                        </div>
                                        <div class="card-body">
                                            <div class="example-container">
                                                <form action="add_brand_post.php" method="POST" enctype="multipart/form-data">
                                                    <div class="example-content">                                                                                             
                                                        <label for="brand_photo" class="form-label">Brand Photo</label>
                                                        <input type="file" class="form-control" id="brand_photo" name="brand_photo" >
                                                                                                                                                                                                                 
                                                    </div>
                                                    <div  class="example-content">
                                                    <button type="submit" class="btn btn-success from-control">SUBMIT</button>
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