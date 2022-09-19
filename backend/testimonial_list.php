<?php
$Tag_Line="Testimonial - List of Testimonials";
$serial=1;
?>
<?php require_once('includes/header.php');?>     
            <div class="app-content">
                <div class="content-wrapper">
                    <div class="container">
                            <div class="row">
                                <div class="col">
                                    <div class="page-description">
                                        <h1>Testimonial List </h1>
                                    </div>
                                </div>
                            </div>                          
                               
                            <div class="row">                                
                                <div class="col-md-12">
                                    <div class="card">
                                        <?php if(isset($_SESSION["client_photo"])):?>
                                        <div class="alert alert-custom alert-success" role="alert">
                                            <div class="custom-alert-icon icon-success"><i class="material-icons-outlined">done</i></div>
                                                <div class="alert-content">
                                                <span class="alert-title"><?=$_SESSION["d_name"]?></span>
                                                    <span class="alert-text"><?php echo$_SESSION["client_photo"];?></span>
                                                </div>
                                        </div>
                                        <?php endif; unset($_SESSION["client_photo"]);?>
                                        <div class="card-header">
                                            <h5 class="card-title">Testimonial List</h5>
                                        </div>
                                        <table class="table">
                                            <thead class="table-dark">
                                                <tr>
                                                    <th>#</th>
                                                    <th>Client's Name</th>                                                  
                                                    <th>Client's Title</th>
                                                    <th>Client's Feedback</th>                                                  
                                                    <th>Client's Photo</th>                                                  
                                                    <th>Action</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                    $testimonial_query="SELECT * FROM testimonials";
                                                    $testimonial_queryy_from_db=mysqli_query($db_connect, $testimonial_query);                                                 
                                                ?>
                                                <?php foreach($testimonial_queryy_from_db as $testimonial): ?>
                                                <tr>
                                                    <td><?=$serial++?></td>
                                                    <td><?=$testimonial['client_name'];?></td>
                                                    <td><?=$testimonial['client_title'];?></td>
                                                    <td><?=$testimonial['feedback'];?></td>
                                                    <td>                                                      
                                                        <img src="uploads/testimonials/<?=$testimonial['client_photo'];?>" alt="" class="img-fluid" width="80px" >
                                                    </td>
                                                    <td>
                                                        <a href="testimonial_delete.php?id=<?=$testimonial['id'];?>" class="btn-sm btn btn-danger">Delete</a>
                                                    </td>
                                                </tr>
                                                <?php endforeach; ?>
                                                <?php if($testimonial_queryy_from_db->num_rows==0):?>
                                                <tr class="text-center text-danger">
                                                    <td colspan="50"> No Data Found</td>
                                                </tr>
                                                <?php endif;?>
                                            </tbody>
                                        </table>
                                    </div> 
                                </div> 
                                 <div class="my-2">
                                <a  href="add_testimonial.php" class="btn btn-primary">Add Testimonial</a>
                                </div>                            
                            </div>                                  
                    </div>                  
                </div>
            </div>
            <?php require_once('includes/footer.php');?> 