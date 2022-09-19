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
                                        <h1>Add Portfolio</h1>
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
                                            <h5 class="card-title">Add Portfolio</h5>
                                        </div>
                                        <div class="card-body">
                                            <div class="example-container">
                                                <form action="add_portfolio_post.php" method="POST" enctype="multipart/form-data">
                                                    <div class="example-content">
                                                        <label for="portfolio_title" class="form-label">Portfolio Title</label>
                                                        <input type="text" class="form-control" id="portfolio_title" name="portfolio_title" >
                                                        <label for="portfolio_category" class="form-label">Portfolio Category</label>
                                                        <input type="text" class="form-control" id="portfolio_category" name="portfolio_category" >
                                                        <label for="portfolio_photo" class="form-label">Portfolio Photo</label>
                                                        <input type="file" class="form-control" id="portfolio_photo" name="portfolio_photo" >
                                                    
                                                        <label for="portfolio_description" class="form-label">Portfolio Description</label> <br>
                                                        <textarea class="form-control" id="portfolio_description" rows="5" name="portfolio_description"></textarea>
                                                                                                                                                                     
                                                    </div>
                                                    <div  class="example-content">
                                                    <button type="submit" class="btn btn-success from-control">Add Portfolio</button>
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