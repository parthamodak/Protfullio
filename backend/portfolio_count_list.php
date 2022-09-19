<?php
$Tag_Line="Portfolio  Count- list";
$serial=1;
?>
<?php require_once('includes/header.php');?>     
            <div class="app-content">
                <div class="content-wrapper">
                    <div class="container">
                            <div class="row">
                                <div class="col">
                                    <div class="page-description">
                                        <h1>List of Services</h1>
                                    </div>
                                </div>
                            </div>                          
                            <div class="row">                                
                                <div class="col-md-12">
                                    <div class="card">
                                        <?php if(isset($_SESSION["add_successfullly"])):?>
                                        <div class="alert alert-custom alert-success" role="alert">
                                            <div class="custom-alert-icon icon-success"><i class="material-icons-outlined">done</i></div>
                                                <div class="alert-content">
                                                <span class="alert-title"><?=$_SESSION["d_name"]?></span>
                                                    <span class="alert-text"><?php echo$_SESSION["add_successfullly"];?></span>
                                                </div>
                                        </div>
                                        <?php endif; unset($_SESSION["add_successfullly"]);?>
                                        <div class="card-header">
                                            <h5 class="card-title">Service List</h5>
                                        </div>
                                        <table class="table">
                                            <thead class="table-dark">
                                                <tr>
                                                    <th>#</th>
                                                    <th>Portfolio number</th>
                                                    <th>Portfolio Description</th>
                                                    <th>Portfolio Icon</th>
                                                    <th>Portfolio Status</th>
                                                    <th>Action</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                    $all_portfolio_count_query="SELECT * FROM `portfolio_counts`";
                                                    $all_portfolio_count_query_from_db=mysqli_query($db_connect, $all_portfolio_count_query);        
                                                                                            
                                                ?>
                                                
                                                <?php foreach($all_portfolio_count_query_from_db as $portfolio_count): ?>
                                                <tr>
                                                    <td><?=$serial++?></td>
                                                    <td><?=$portfolio_count['portfolio_number'];?></td>
                                                    <td><?=$portfolio_count['portfolio_description'];?></td>
                                                    <td>
                                                        <i class="<?=$portfolio_count['portfolio_icon'];?>"></i>
                                                    <td>
                                                        <?php if($portfolio_count['status']=="active"): ?>
                                                        <badge class="badge badge-success"> Active</badge>
                                                        <?php else:?>
                                                        <badge class="badge badge-danger"> Deactive</badge>
                                                        <?php endif;?>
                                                    </td>
                                                    <td>
                                                        <a href="portfolio_count_delete.php?id=<?=$portfolio_count['id'];?>" class="btn-sm btn btn-danger">Delete</a>
                                                        <a href="portfolio_count_edit.php?id=<?=$portfolio_count['id'];?>" class="btn-sm btn btn-warning">Edit</a>
                                                    </td>

                                                </tr>
                                                <?php endforeach; ?>
                                                <?php if($all_portfolio_count_query_from_db->num_rows==0):?>
                                                <tr class="text-center text-danger">
                                                    <td colspan="50"> No Data Found</td>
                                                </tr>
                                                <?php endif;?>
                                            </tbody>
                                        </table>
                                    </div> 
                                </div>                             
                            </div>                                  
                    </div>                  
                </div>
            </div>
            <?php require_once('includes/footer.php');?> 