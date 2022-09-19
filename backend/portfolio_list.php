<?php
$Tag_Line="Portfolio - List of Portfolios";
$serial=1;
?>
<?php require_once('includes/header.php');?>     
            <div class="app-content">
                <div class="content-wrapper">
                    <div class="container">
                            <div class="row">
                                <div class="col">
                                    <div class="page-description">
                                        <h1>List of Portfolio</h1>
                                    </div>
                                </div>
                            </div>                          
                               
                            <div class="row">                                
                                <div class="col-md-12">
                                    <div class="card">
                                        <?php if(isset($_SESSION["portfolio_upload_successfully"])):?>
                                        <div class="alert alert-custom alert-success" role="alert">
                                            <div class="custom-alert-icon icon-success"><i class="material-icons-outlined">done</i></div>
                                                <div class="alert-content">
                                                <span class="alert-title"><?=$_SESSION["d_name"]?></span>
                                                    <span class="alert-text"><?php echo$_SESSION["portfolio_upload_successfully"];?></span>
                                                </div>
                                        </div>
                                        <?php endif; unset($_SESSION["portfolio_upload_successfully"]);?>
                                        <div class="card-header">
                                            <h5 class="card-title">Portfolio List</h5>
                                        </div>
                                        <table class="table">
                                            <thead class="table-dark">
                                                <tr>
                                                    <th>#</th>
                                                    <th>Portfolio Title</th>                                                  
                                                    <th>Portfolio Category</th>
                                                    <th>Portfolio Photo</th>                                                  
                                                    <th>Action</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                    $portfolios_query="SELECT * FROM portfolios";
                                                    $portfolios_query_query_from_db=mysqli_query($db_connect, $portfolios_query);                                                 
                                                ?>
                                                <?php foreach($portfolios_query_query_from_db as $portfolio): ?>
                                                <tr>
                                                    <td><?=$serial++?></td>
                                                    <td><?=$portfolio['portfolio_title'];?></td>
                                                    <td><?=$portfolio['portfolio_category'];?></td>
                                                    <td>                                                      
                                                        <img src="uploads/portfolios/<?=$portfolio['portfolio_photo'];?>" alt="" class="img-fluid" width="250px" >
                                                    </td>
                                                    <td>
                                                        <a href="portfolio_delete.php?id=<?=$portfolio['id'];?>" class="btn-sm btn btn-danger">Delete</a>
                                                    </td>
                                                </tr>
                                                <?php endforeach; ?>
                                                <?php if($portfolios_query_query_from_db->num_rows==0):?>
                                                <tr class="text-center text-danger">
                                                    <td colspan="50"> No Data Found</td>
                                                </tr>
                                                <?php endif;?>
                                            </tbody>
                                        </table>
                                    </div> 
                                </div>
                                  <div class="my-2">
                                <a  href="add_portfolio.php" class="btn btn-primary">Add portfolio</a>
                                </div>                              
                            </div> 
                                                          
                    </div>                  
                </div>
            </div>
            <?php require_once('includes/footer.php');?> 