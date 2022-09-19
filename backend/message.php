<?php
$Tag_Line="Messages - from visitors";
$serial=1;
?>
<?php require_once('includes/header.php');?>     
            <div class="app-content">
                <div class="content-wrapper">
                    <div class="container">
                            <div class="row">
                                <div class="col">
                                    <div class="page-description">
                                        <h1>List of Messages</h1>
                                    </div>
                                </div>
                            </div>                          
                            <div class="row">                                
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="card-title">Messages</h5>
                                        </div>
                                        <table class="table">
                                            <thead class="table-dark">
                                                <tr>
                                                    <th>#</th>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Message</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                    $all_messages_query="SELECT * FROM contact_box";
                                                    $all_messages_query_from_db=mysqli_query($db_connect, $all_messages_query);                                                  
                                                ?>
                                                <?php foreach($all_messages_query_from_db as $messages):?>

                                                <tr>
                                                    <td><?=$serial++?></td>
                                                    <td><?=$messages['name'];?></td>
                                                    <td><?=$messages['email_address'];?></td>
                                                    <td><?=$messages['message'];?></td>                                                   
                                                    <td>
                                                        <a href="message_delete.php?id=<?=$messages['id'];?>" class="btn-sm btn btn-danger">Delete</a>
                                                    </td>
                                                </tr>
                                                <?php endforeach; ?>
                                                <?php if($all_messages_query_from_db->num_rows==0):?>
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