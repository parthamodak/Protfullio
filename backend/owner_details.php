<?php
$Tag_Line="Owner Details- add Details";
?>
<?php require_once('includes/header.php');?>     
            <div class="app-content">
                <div class="content-wrapper">
                    <div class="container">
                            <div class="row">
                                <div class="col">
                                    <div class="page-description">
                                        <h1>Owner Details</h1>
                                    </div>
                                </div>
                            </div> 
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="card-title">Add Owner Details</h5>
                                        </div>
                                        <div class="card-body">                                       
                                            <div class="example-container">
                                                <form action="owner_details_post.php" method="POST">
                                                    <div class="example-content">
                                                        <?php
                                                            $settings_query="SELECT * FROM `settings`";
                                                            $settings_query_from_db=mysqli_query($db_connect, $settings_query);                                                                                                                     
                                                        ?>
                                                        <?php foreach($settings_query_from_db as $settings):?>
                                                        <label for="<?=$settings['settings_name'];?>" class="form-label"><?=ucwords(str_replace("_"," ",$settings['settings_name']));?></label>
                                                        <input class="form-control" id="<?=$settings['settings_name'];?>" name="<?=$settings['settings_name'];?>" value="<?=$settings['settings_value'];?>" >   
                                                        <?php endforeach;?>                                                                                                      
                                                    </div>
                                                    <div  class="example-content">
                                                    <button type="submit" class="btn btn-success from-control">Add Details</button>
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