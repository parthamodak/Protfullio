<?php
$Tag_Line="Testimonial - add testimonial";

?>
<?php require_once('includes/header.php');?>     
            <div class="app-content">
                <div class="content-wrapper">
                    <div class="container">
                            <div class="row">
                                <div class="col">
                                    <div class="page-description">
                                        <h1> Testimonial</h1>
                                    </div>
                                </div>
                            </div> 
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">
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
                                            <h5 class="card-title">Add Testimonial</h5>
                                        </div>
                                        <div class="card-body">
                                            <div class="example-container">
                                                <form action="add_testimonial_post.php" method="POST" enctype="multipart/form-data">
                                                    <div class="example-content">
                                                        <label for="feedback" class="form-label">Client's Feedback</label>
                                                        <input type="text" class="form-control" id="feedback" name="feedback" >
                                                        <label for="client_name" class="form-label">Client's Name</label>
                                                        <input type="text" class="form-control" id="client_name" name="client_name" >
                                                        <label for="client_title" class="form-label">Client's Title</label>
                                                        <input type="text" class="form-control" id="client_title" name="client_title" >
                                                        <label for="client_photo" class="form-label">Client's Photo</label>
                                                        <input type="file" class="form-control" id="client_photo" name="client_photo" >
                                                                                                                                                                    
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