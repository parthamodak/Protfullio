<?php session_start();?>
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
    <title>Neptune - Responsive Admin Dashboard Template</title>

    <!-- Styles -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
    <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/plugins/perfectscroll/perfect-scrollbar.css" rel="stylesheet">
    <link href="assets/plugins/pace/pace.css" rel="stylesheet">

    
    <!-- Theme Styles -->
    <link href="assets/css/main.min.css" rel="stylesheet">
    <link href="assets/css/custom.css" rel="stylesheet">

    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/neptune.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/neptune.png" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <div class="app app-auth-sign-in align-content-stretch d-flex flex-wrap justify-content-end">
        <div class="app-auth-background">

        </div>
        <div class="app-auth-container">
            <div class="logo">
                <a href="index.html">Neptune</a>
            </div>
            <p class="auth-description">Please sign-in to your account and continue to the dashboard.<br>Don't have an account? <a href="registration.php">Register Now</a></p>
            <?php if(isset($_SESSION["register_status"])):?>
            <div class="alert alert-custom alert-success" role="alert">
                <div class="custom-alert-icon icon-success"><i class="material-icons-outlined">done</i></div>
                    <div class="alert-content">
                       <span class="alert-title">Congratulations! </span>
                        <span class="alert-text"><?php echo$_SESSION["register_status"];?></span>
                    </div>
             </div>
             <?php endif;?>

             <?php if(isset($_SESSION["login_error"])):?>
            <div class="alert alert-custom alert-danger" role="alert">
                <div class="custom-alert-icon icon-danger"><i class="material-icons-outlined">cancel</i></div>
                    <div class="alert-content">
                       <span class="alert-title">OOPS</span>
                        <span class="alert-text"><?php echo$_SESSION["login_error"];?></span>
                    </div>
             </div>
             <?php endif;?>

            <form action="login_post.php" method="POST">
                <div class="auth-credentials m-b-xxl">
                    <label for="signInEmail" class="form-label">Email address</label>
                    <input type="text" class="form-control <?php echo (isset($_SESSION["email_login_error"]))?"is-invalid" : "";?>" id="signInEmail" aria-describedby="signInEmail" placeholder="example@neptune.com" value="<?php echo(isset($_SESSION["old_email"]))?$_SESSION["old_email"] : "";?>" name="email_address">
                    <?php if(isset($_SESSION["email_login_error"])):?>
                        <div class="form-text m-b-md text-danger" ><?php echo $_SESSION["email_login_error"] ?></div>
                    <?php endif;?>    

                    <label for="signInPassword" class="form-label">Password</label>
                    <input type="password" class="form-control <?php echo (isset($_SESSION["password_login_error"]))?"is-invalid" : "";?> " id="signInPassword" aria-describedby="signInPassword" placeholder="Enter Your Password" name="password">
                    <?php if(isset($_SESSION["password_login_error"])):?>
                        <div class="form-text m-b-md text-danger" ><?php echo $_SESSION["password_login_error"] ?></div>
                    <?php endif;?>


                </div>

                <div class="auth-submit">                          
                    <button type="submit" class="btn btn-primary"> Log In</button>
                </div>
            </form>
            <div class="divider"></div>            
        </div>
    </div>
    
    <!-- Javascripts -->
<script src="assets/plugins/jquery/jquery-3.5.1.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/plugins/perfectscroll/perfect-scrollbar.min.js"></script>
    <script src="assets/plugins/pace/pace.min.js"></script>
    <script src="assets/js/main.min.js"></script>
    <script src="assets/js/custom.js"></script>
</body>
</html>

<?php session_unset();?>