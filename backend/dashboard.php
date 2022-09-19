<?php
$Tag_Line="Dashboard - Welcome to Your Control Panel";
?>
<?php require_once('includes/header.php');?> 
            <div class="app-content">
            <?php 
                $users_select_query="SELECT id, name, email_address FROM users LIMIT 5";
                $users_count_query="SELECT COUNT(*) as total_users FROM users" ;
                $users_info_db=mysqli_query($db_connect, $users_select_query);
                $total_users_count=mysqli_query($db_connect, $users_count_query);
                $all_users=mysqli_fetch_assoc($total_users_count)['total_users'];
            ?>
                <div class="content-wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="page-description">
                                    <h1>Dashboard</h1>
                                    <h2>Welcome, <?=$_SESSION["d_name"];?>(<?=$_SESSION["d_email_address"]?>)</h2>
                                    <h5>your ID is #<?=$_SESSION["d_id"]?></h5>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
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
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                    $all_messages_query="SELECT * FROM contact_box LIMIT 3";
                                                    $all_messages_query_from_db=mysqli_query($db_connect, $all_messages_query);  
                                                    $serial=1;                                                
                                                ?>
                                                <?php foreach($all_messages_query_from_db as $messages):?>

                                                <tr>
                                                    <td><?=$serial++?></td>
                                                    <td><?=$messages['name'];?></td>
                                                    <td><?=$messages['email_address'];?></td>
                                                    <td><?=$messages['message'];?></td>                                                                                                   
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
                            <div class="col-md-6">
                                    <div class="card">                                      
                                        <div class="card-header">
                                            <h5 class="card-title">Service List</h5>
                                        </div>
                                        <table class="table">
                                            <thead class="table-dark">
                                                <tr>
                                                    <th>#</th>
                                                    <th>Service Title</th>
                                                    <th>Service Description</th>
                                                    <th>Service Icon</th> 
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                    $all_services_query="SELECT * FROM servies LIMIT 3";
                                                    $all_services_query_from_db=mysqli_query($db_connect, $all_services_query); 
                                                    $serial=1;                                                 
                                                ?>
                                                <?php foreach($all_services_query_from_db as $services): ?>
                                                <tr>
                                                    <td><?=$serial++?></td>
                                                    <td><?=$services['service_title'];?></td>
                                                    <td><?=$services['service_description'];?></td>
                                                    <td>
                                                        <i class="<?=$services['service_icon'];?>"></i>
                                                    </td>                                               
                                                </tr>
                                                <?php endforeach; ?>
                                                <?php if($all_services_query_from_db->num_rows==0):?>
                                                <tr class="text-center text-danger">
                                                    <td colspan="50"> No Data Found</td>
                                                </tr>
                                                <?php endif;?>
                                            </tbody>
                                        </table>
                                    </div> 
                            </div>
                        </div>
                        <div class="row">                           
                            <div class="col-md-6">
                                <div class="card widget widget-list">
                                    <div class="card-header">
                                        <h5 class="card-title">Active Members<span class="badge badge-success badge-style-light"><?= $all_users?></span></h5>
                                    </div>
                                    <div class="card-body">
                                        <span class="text-muted m-b-xs d-block"> <?= $all_users?> active members.</span>                      
                                        <ul class="widget-list-content list-unstyled">
                                        <?php $serial=1;?>
                                           <?php foreach($users_info_db as $users):?>
                                                <li class="widget-list-item widget-list-item-green">
                                                    <span class="widget-list-item-icon"><i><?=$serial++?></i></span>
                                                    <span class="widget-list-item-description">
                                                        <a href="profile.php" class="widget-list-item-description-title">
                                                            <?= $users['name']?>
                                                        </a>
                                                        <span class="widget-list-item-description-subtitle">
                                                        <?= $users['email_address']?>
                                                        </span>
                                                    </span>
                                                </li>
                                            <?php endforeach;?>    
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card">                         
                                        <div class="card-header">
                                            <h5 class="card-title">Portfolio List</h5>
                                        </div>
                                        <table class="table">
                                            <thead class="table-dark">
                                                <tr>
                                                    <th>#</th>
                                                    <th>Portfolio Title</th>
                                                    <th>Portfolio Photo</th>                                                                                                  
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                    $portfolios_query="SELECT * FROM portfolios LIMIT 2";
                                                    $portfolios_query_query_from_db=mysqli_query($db_connect, $portfolios_query);   
                                                    $serial=1;                                              
                                                ?>
                                                <?php foreach($portfolios_query_query_from_db as $portfolio): ?>
                                                <tr>
                                                    <td><?=$serial++?></td>
                                                    <td><?=$portfolio['portfolio_title'];?></td>
                                                    <td>                                                      
                                                        <img src="uploads/portfolios/<?=$portfolio['portfolio_photo'];?>" alt="" class="img-fluid" width="100px" >
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
                            <div class="col-md-6">
                                    <div class="card">                                
                                        <div class="card-header">
                                            <h5 class="card-title">Portfolio Count List</h5>
                                        </div>
                                        <table class="table">
                                            <thead class="table-dark">
                                                <tr>
                                                    <th>#</th>
                                                    <th>Portfolio number</th>
                                                    <th>Portfolio Icon</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                    $all_portfolio_count_query="SELECT * FROM `portfolio_counts` LIMIT 3";
                                                    $all_portfolio_count_query_from_db=mysqli_query($db_connect, $all_portfolio_count_query); 
                                                    $serial=1;                                                                                                   
                                                ?>                                      
                                                <?php foreach($all_portfolio_count_query_from_db as $portfolio_count): ?>
                                                <tr>
                                                    <td><?=$serial++?></td>
                                                    <td><?=$portfolio_count['portfolio_number'];?></td>
                                                   
                                                    <td>
                                                        <i class="<?=$portfolio_count['portfolio_icon'];?>"></i>                                                    
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
                            <div class="col-md-6">
                                     <div class="card">                                      
                                        <div class="card-header">
                                            <h5 class="card-title">Brands List</h5>
                                        </div>
                                        <table class="table">
                                            <thead class="table-dark">
                                                <tr>
                                                    <th>#</th>
                                                    <th class="text-center">Brand Photo</th>                                                                                                  
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                    $brand_query="SELECT * FROM brands LIMIT 3";
                                                    $brand_query_from_db=mysqli_query($db_connect, $brand_query);
                                                    $serial=1;                                                
                                                ?>
                                                <?php foreach($brand_query_from_db as $brand): ?>
                                                <tr>
                                                    <td><?=$serial++?></td>                                                  
                                                    <td class="text-center">                                                      
                                                        <img src="uploads/brands/<?=$brand['brand_photo'];?>" alt="" class="img-fluid" width="100px" >
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
                            <div class="col-md-6">
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
                                                    <th>Client's Feedback</th>                                                  
                                                    <th>Client's Photo</th>                                                  
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                    $testimonial_query="SELECT * FROM testimonials LIMIT 3";
                                                    $testimonial_queryy_from_db=mysqli_query($db_connect, $testimonial_query);                                                 
                                                ?>
                                                <?php foreach($testimonial_queryy_from_db as $testimonial): ?>
                                                <tr>
                                                    <td><?=$serial++?></td>
                                                    <td><?=$testimonial['client_name'];?></td>
                                                    <td><?=$testimonial['feedback'];?></td>
                                                    <td>                                                      
                                                        <img src="uploads/testimonials/<?=$testimonial['client_photo'];?>" alt="" class="img-fluid" width="80px" >
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
                        </div>                    
                    </div>
                </div>
            </div>
<?php require_once('includes/footer.php');?>    