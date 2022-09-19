<?php
$Tag_Line="Services - add service";
$serial=1;
?>
<?php require_once('includes/header.php');?>     
            <div class="app-content">
                <div class="content-wrapper">
                    <div class="container">
                            <div class="row">
                                <div class="col">
                                    <div class="page-description">
                                        <h1>Skill List</h1>
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
                                            <h5 class="card-title">Skill List</h5>
                                        </div>
                                        <table class="table">
                                            <thead class="table-dark">
                                                <tr>
                                                    <th>#</th>
                                                    <th>Skill Title</th>
                                                    <th>Skill Description</th>
                                                    <th>Skill Progress (%)</th>                                           
                                                    <th>Action</th>                                           
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                    $skill_query="SELECT * FROM skills";
                                                    $skill_query_from_db=mysqli_query($db_connect, $skill_query);                                                  
                                                ?>
                                                <?php foreach($skill_query_from_db as $skill): ?>
                                                <tr>
                                                    <td><?=$serial++?></td>
                                                    <td><?=$skill['skill_title'];?></td>
                                                    <td><?=$skill['skill_description'];?></td>                                       
                                                    <td><?=$skill['skill_progress'];?></td>                                                                                         
                                                    <td>
                                                        <a href="skill_delete.php?id=<?=$skill['id'];?>" class="btn-sm btn btn-danger">Delete</a>                                                   
                                                    </td>

                                                </tr>
                                                <?php endforeach; ?>
                                                <?php if($skill_query_from_db->num_rows==0):?>
                                                <tr class="text-center text-danger">
                                                    <td colspan="50"> No Data Found</td>
                                                </tr>
                                                <?php endif;?>
                                            </tbody>
                                        </table>
                                    </div> 
                                </div> 
                                   <div class="my-2">
                                <a  href="add_skill.php" class="btn btn-primary">Add Skill</a>
                                </div>                            
                            </div>                                  
                    </div>                  
                </div>
            </div>
            <?php require_once('includes/footer.php');?> 