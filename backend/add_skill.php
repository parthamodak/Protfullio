<?php
$Tag_Line="Services - add service";
session_start();
?>
<?php require_once('includes/header.php');?>     
            <div class="app-content">
                <div class="content-wrapper">
                    <div class="container">
                            <div class="row">
                                <div class="col">
                                    <div class="page-description">
                                        <h1>Add Skill</h1>
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
                                            <div class="example-container">
                                                <form action="add_skill_post.php" method="POST">
                                                    <div class="example-content">
                                                        <label for="skill_title" class="form-label">Skill Title</label>
                                                        <input type="text" class="form-control" id="skill_title" name="skill_title" >
                                                        <label for="skill_description" class="form-label">Skill Description</label>
                                                        <input type="text" class="form-control" id="skill_description" name="skill_description" >
                                                        <label for="skill_progress" class="form-label">Skill Progress (%)</label>
                                                        <input type="range" class="form-control" id="skill_progress" name="skill_progress" >
                                                                                                               
                                                    </div>
                                                    <div  class="example-content">
                                                    <button type="submit" class="btn btn-success from-control">Add Skill</button>
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
