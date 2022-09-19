<?php
$Tag_Line="Portfolio Count - edit";
?>
<?php require_once('includes/header.php');?>     
            <div class="app-content">
                <div class="content-wrapper">
                    <div class="container">
                            <div class="row">
                            <?php
                                $id=$_GET['id'];
                                $edit_portfolio_counts_query="SELECT * FROM portfolio_counts WHERE id=$id";
                                $edit_portfolio_counts_query_from_db=mysqli_fetch_assoc(mysqli_query($db_connect, $edit_portfolio_counts_query));
                                
                            ?>
                                <div class="col">
                                    <div class="page-description">
                                        <h1>Portfolio Count</h1>
                                    </div>
                                </div>
                            </div> 
                            <div class="row">
                            <?php 
                                require_once('fonts_icon.php');
                            ?>
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="card-title">Portfolio Count - <?=$edit_portfolio_counts_query_from_db['portfolio_description']?></h5>
                                        </div>
                                        <div class="card-body">
                                            <div class="example-container">
                                                <form action="portfolio_count_edit_post.php" method="POST">
                                                    <div class="example-content">
                                                    <input hidden type="text" name="portfolio_edit_id" value="<?= $id?>">
                                                        <label for="portfolio_count_icon_id" class="form-label">Portfolio Count Icon</label>
                                                            <i id="icon_view" class="fa-2x <?=$edit_portfolio_counts_query_from_db['portfolio_icon']?>"></i>
                                                        <input readonly type="text" class="form-control" id="portfolio_count_icon_id" name="portfolio_count_icon" >
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
                                                        <label for="portfolio_count_description" class="form-label">Portfolio Count Description</label>
                                                        <input type="text" class="form-control" id="portfolio_count_description" name="portfolio_count_description" value="<?=$edit_portfolio_counts_query_from_db['portfolio_description']?>" >
                                                        <label for="portfolio_count_number" class="form-label">Portfolio Count Number</label>
                                                        <input type="number"class="form-control" id="portfolio_count_number" name="portfolio_count_number" value="<?=$edit_portfolio_counts_query_from_db['portfolio_number']?>">   
                                                        <label for="portfolio_count_status" class="form-label">Portfolio Count Status</label>
                                                        <select class="form-control" id="portfolio_count_status" name="portfolio_count_status">
                                                            <option <?=($edit_portfolio_counts_query_from_db['status'])=='active'? 'selected':'' ?> value="active">Active</option>
                                                            <option <?=($edit_portfolio_counts_query_from_db['status'])=='deactive'? 'selected':'' ?> value="deactive">Deactive</option>
                                                        </select>                                                  
                                                    </div>
                                                    <div  class="example-content">
                                                    <button type="submit" class="btn btn-success from-control">submit</button>
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
                        $('#portfolio_count_icon_id').val($(this).attr('id'));
                        $('#icon_view').removeClass();
                        $('#icon_view').addClass($(this).attr('id'));
                    });
                });
            </script>