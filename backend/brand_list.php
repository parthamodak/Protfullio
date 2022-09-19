<?php
$Tag_Line="Brand - List of brands";
$serial=1;
?>
<?php require_once('includes/header.php');?>     
            <div class="app-content">
                <div class="content-wrapper">
                    <div class="container">
                            <div class="row">
                                <div class="col">
                                    <div class="page-description">
                                        <h1> Brand List</h1>
                                    </div>
                                </div>
                            </div>                          
                               
                            <div class="row">                                
                                <div class="col-md-12">
                                    <div class="card">
                                        <?php if(isset($_SESSION["brand_photo_upload_successfully"])):?>
                                        <div class="alert alert-custom alert-success" role="alert">
                                            <div class="custom-alert-icon icon-success"><i class="material-icons-outlined">done</i></div>
                                                <div class="alert-content">
                                                <span class="alert-title"><?=$_SESSION["d_name"]?></span>
                                                    <span class="alert-text"><?php echo$_SESSION["brand_photo_upload_successfully"];?></span>
                                                </div>
                                        </div>
                                        <?php endif; unset($_SESSION["brand_photo_upload_successfully"]);?>
                                        <div class="card-header">
                                            <h5 class="card-title">Brands List</h5>
                                        </div>
                                        <table class="table">
                                            <thead class="table-dark">
                                                <tr>
                                                    <th>#</th>
                                                    <th class="text-center">Brand Photo</th>                                                  
                                                    <th>Action</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                    $brand_query="SELECT * FROM brands";
                                                    $brand_query_from_db=mysqli_query($db_connect, $brand_query);                                                 
                                                ?>
                                                <?php foreach($brand_query_from_db as $brand): ?>
                                                <tr>
                                                    <td><?=$serial++?></td>                                                  
                                                    <td class="text-center">                                                      
                                                        <img src="uploads/brands/<?=$brand['brand_photo'];?>" alt="" class="img-fluid" width="250px" >
                                                    </td>
                                                    <td>
                                                        <a href="brand_delete.php?id=<?=$brand['id'];?>" class="btn-sm btn btn-danger">Delete</a>
                                                    </td>
                                                </tr>
                                                <?php endforeach; ?>
                                                <?php if($brand_query_from_db->num_rows==0):?>
                                                <tr class="text-center text-danger">
                                                    <td colspan="50"> No Data Found</td>
                                                </tr>
                                                <?php endif;?>
                                            </tbody>
                                        </table>
                                    </div> 
                                </div>  
                                 <div class="my-2">
                                <a  href="add_brand.php" class="btn btn-primary">Add Brand</a>
                                </div>                           
                            </div>                                  
                    </div>                  
                </div>
            </div>
            <?php require_once('includes/footer.php');?> 