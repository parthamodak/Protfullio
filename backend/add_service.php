<?php
$Tag_Line="Services - add service";
?>
<?php require_once('includes/header.php');?>     
            <div class="app-content">
                <div class="content-wrapper">
                    <div class="container">
                            <div class="row">
                                <div class="col">
                                    <div class="page-description">
                                        <h1>Add Service</h1>
                                    </div>
                                </div>
                            </div> 
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="card-title">Add Service</h5>
                                        </div>
                                        <div class="card-body">
                                        <?php 
                                            require_once('fonts_icon.php');
                                        ?>
                                            <div class="example-container">
                                                <form action="add_service_post.php" method="POST">
                                                    <div class="example-content">
                                                        <label for="service_title" class="form-label">Service Title</label>
                                                        <input type="text" class="form-control" id="service_title" name="service_title" >
                                                        <label for="service_description" class="form-label">Service Description</label>
                                                        <textarea class="form-control" id="service_description" name="service_description" rows="5"></textarea>
                                                        <label for="service_icon_input" class="form-label">Service Icon</label>
                                                                        <i id="icon_view" class="fa-2x <?= $font?>"></i>
                                                        <input readonly type="text" class="form-control" id="service_icon_input" name="service_icon" >
                                                        <div class="card text-white my-2" style="overflow-y: scroll; height:200px;">                                                         
                                                            <div class="card-header">      
                                                            Choose Icon from the list                                                      
                                                            </div>
                                                            <div class="card-body">
                                                                <?php foreach($fonts as $font):?>
                                                                    <span id="<?= $font?>" class="badge badge-primary m-1 icon_span">
                                                                        <i class="fa-2x <?= $font?>"></i>
                                                                    </span>
                                                                <?php endforeach;?>    
                                                                </div>
                                                        </div>
                                                        <label for="service_status" class="form-label">Service Status</label>
                                                        <select class="form-control" id="service_status" name="service_status">
                                                            <option value="active">Active</option>
                                                            <option value="deactive">Deactive</option>
                                                        </select>

                                                    </div>
                                                    <div  class="example-content">
                                                    <button type="submit" class="btn btn-success from-control">Add Service</button>
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

            <script>
                $(document).ready(function() {
                    $('.icon_span').click(function() {
                        $('#service_icon_input').val($(this).attr('id'));
                        $('#icon_view').removeClass();
                        $('#icon_view').addClass($(this).attr('id'));
                    });
                });
            </script>