<?php
session_start();
require_once('data_base.php');

// Page Name
$link=explode('/',$_SERVER['PHP_SELF']);
$paeg_name=end($link);

if(!isset($_SESSION["d_id"])){
    header("location: error.php");
}
$user_id=$_SESSION["d_id"];
$profile_photo_select_query="SELECT profile_photo_name FROM users WHERE id=$user_id";
$profile_photo_select_from_db=mysqli_query($db_connect, $profile_photo_select_query);
$profile_photo_name_from_db=mysqli_fetch_assoc($profile_photo_select_from_db)['profile_photo_name'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive Admin Dashboard Template">
    <meta name="keywords" content="admin,dashboard">
    <meta name="author" content="stacks">
    <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    
    <!-- Title -->
    <title><?= $Tag_Line?></title>

    <!-- Styles -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
    <link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/plugins/perfectscroll/perfect-scrollbar.css" rel="stylesheet">
    <link href="../assets/plugins/pace/pace.css" rel="stylesheet">
    

    
    <!-- Theme Styles -->
    <link href="../assets/css/main.min.css" rel="stylesheet">
    <link href="../assets/css/custom.css" rel="stylesheet">

    <link rel="icon" type="image/png" sizes="32x32" href="../assets/images/neptune.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/neptune.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <div class="app align-content-stretch d-flex flex-wrap">
        <div class="app-sidebar">
            <div class="logo">
                <a href="../dashboard.php" class="logo-icon"><span class="logo-text">Neptune</span></a>
                <div class="sidebar-user-switcher user-activity-online">
                    <a href="dashboard.php">
                        <img src="uploads/profile_photo/<?= $profile_photo_name_from_db?>">
                        <span class="activity-indicator"></span>
                        <span class="user-info-text"><?=$_SESSION["d_name"];?><br><span class="user-state-info"><?=$_SESSION["d_email_address"]?></span></span>
                    </a>
                </div>
            </div>
            <div class="app-menu">
                <ul class="accordion-menu">
                    <li class="sidebar-title">
                        Apps
                    </li>
                    <li class="<?= ($paeg_name=="dashboard.php")? "active-page" : "" ;?>">
                        <a href="dashboard.php" class="active"><i class="material-icons-two-tone">dashboard</i>Dashboard</a>
                    </li>
                    <li class="<?= ($paeg_name=="profile.php")? "active-page" : "" ;?>">
                        <a href="profile.php"><i class="material-icons-two-tone">account_circle</i>Profile</a>                      
                    </li>
                    <li class="<?= ($paeg_name=="index.php")? "active-page" : "" ;?>">
                        <a href="../index.php" target="_blank"><i class="material-icons-two-tone">language</i>Visit Site</a>
                    </li>
                    <li class="<?= ($paeg_name=="owner_details.php")? "active-page" : "" ;?>">
                        <a href="owner_details.php"><i class="material-icons-two-tone">manage_accounts</i>Owner Details</a>
                    </li>
                     
                    
                    <?php 
                    
                    $messages_count_query="SELECT COUNT(*) as total_messages FROM contact_box" ;
                    $total_messages_count=mysqli_query($db_connect, $messages_count_query);
                    $all_messages=mysqli_fetch_assoc($total_messages_count)['total_messages'];
                    
                    ?>
                    <li class="<?= ($paeg_name=="message.php")? "active-page" : "" ;?>">
                        <a href="message.php"><i class="material-icons-two-tone">mail</i>Messages<span class="badge rounded-pill badge-success float-end"><?= $all_messages?></span></a>
                    </li>

                    <li class="<?= ($paeg_name=="add_service.php" || $paeg_name=="service_list.php")? "active-page" : "" ;?>">
                        <a href="#"><i class="material-icons-two-tone">home_repair_service</i>Services<i class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
                            <ul class="sub-menu">
                                <li >
                                    <a class="<?= ($paeg_name=="add_service.php")? "active" : "" ;?>" href="add_service.php">Add Service</a>
                                </li>
                                <li>
                                    <a class="<?= ($paeg_name=="service_list.php")? "active" : "" ;?>" href="service_list.php">List of Services</a>
                                </li>
                            </ul>
                    </li>
                    <li class="<?= ($paeg_name=="add_portfolio.php" || $paeg_name=="portfolio_list.php")? "active-page" : "" ;?>">
                        <a href="#"><i class="material-icons-two-tone">star</i>Portfolios<i class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
                        <ul class="sub-menu">
                            <li>
                                <a class="<?= ($paeg_name=="add_portfolio.php")? "active" : "" ;?>" href="add_portfolio.php">Add Portfolio</a>
                            </li>
                            <li>
                                <a class="<?= ($paeg_name=="portfolio_list.php")? "active" : "" ;?>" href="portfolio_list.php">List of Portfolios</a>
                            </li>
                        </ul>
                    </li>
                    <li class="<?= ($paeg_name=="portfolio_count.php" || $paeg_name=="portfolio_count_list.php")? "active-page" : "" ;?>">
                        <a href="#"><i class="material-icons-two-tone">tag</i>Protfolio Count<i class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
                        <ul class="sub-menu">
                            <li>
                                <a class="<?= ($paeg_name=="portfolio_count.php")? "active" : "" ;?>" href="portfolio_count.php">Add Protfolio Count</a>
                            </li>
                            <li>
                                <a class="<?= ($paeg_name=="portfolio_count_list.php")? "active" : "" ;?>" href="portfolio_count_list.php">list of Protfolio Count</a>
                            </li>
                        </ul>
                    </li>
                    <li class="<?= ($paeg_name=="add_brand.php" || $paeg_name=="brand_list.php")? "active-page" : "" ;?>">
                        <a href="#"><i class="material-icons-two-tone">apartment</i>Brands<i class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
                        <ul class="sub-menu">
                            <li >
                                <a class="<?= ($paeg_name=="add_brand.php")? "active" : "" ;?>" href="add_brand.php">Add Brand</a>
                            </li>
                            <li >
                                <a class="<?= ($paeg_name=="brand_list.php")? "active" : "" ;?>" href="brand_list.php">list of Brands</a>
                            </li>
                        </ul>
                    </li>
                    <li class="<?= ($paeg_name=="add_testimonial.php" || $paeg_name=="testimonial_list.php")? "active-page" : "" ;?>">
                        <a href="#"><i class="material-icons-two-tone">rate_review</i>Testimonial<i class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
                        <ul class="sub-menu">
                            <li >
                                <a class="<?= ($paeg_name=="add_testimonial.php")? "active" : "" ;?>" href="add_testimonial.php">Add Testimonial</a>
                            </li>
                            <li >
                                <a class="<?= ($paeg_name=="testimonial_list.php")? "active" : "" ;?>" href="testimonial_list.php">list of Testimonials</a>
                            </li>
                        </ul>
                    </li> 
                    <li class="<?= ($paeg_name=="add_skill.php" || $paeg_name=="skill_list.php")? "active-page" : "" ;?>">
                        <a href="#"><i class="material-icons-two-tone">school</i>Skills<i class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
                        <ul class="sub-menu">
                            <li >
                                <a class="<?= ($paeg_name=="add_skill.php")? "active" : "" ;?>" href="add_skill.php">Add Skill</a>
                            </li>
                            <li >
                                <a class="<?= ($paeg_name=="skill_list.php")? "active" : "" ;?>" href="skill_list.php">list of Skills</a>
                            </li>
                        </ul>
                    </li>               
                </ul>
            </div>
        </div>
        <div class="app-container">
            <div class="search">
                <form>
                    <input class="form-control" type="text" placeholder="Type here..." aria-label="Search">
                </form>
                <a href="#" class="toggle-search"><i class="material-icons">close</i></a>
            </div>
            <div class="app-header">
                <nav class="navbar navbar-light navbar-expand-lg">
                    <div class="container-fluid">
                        <div class="navbar-nav" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link hide-sidebar-toggle-button" href="#"><i class="material-icons">first_page</i></a>
                                </li>                                                              
                            </ul>
            
                        </div>
                        <div class="d-flex">
                            <ul class="navbar-nav">
                                <li class="nav-item hidden-on-mobile">
                                    <a href="logout.php" class="btn btn-danger btn-sm">Logout</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>