<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<?php include '../config.php';?>
<?php
// Initialize the session
//session_start();
 $dbconn = pg_connect("sslmode=require sslrootcert=certificates/ca-certificate.crt host=thetechphantoms-do-user-8660169-0.b.db.ondigitalocean.com port=25060 dbname=Postgres user=CMHA password=j38mp49ya50ow9im");
 if (!$dbconn){  
echo "<center><h1>Doesn't work =(</h1></center>";  
}else  
{
    // echo "<center><h1>Good connection</h1></center>"; 
}

 if(isset($_POST['login'])&&!empty($_POST['login'])){
    //console.log("testing1");
    $hashpassword = md5($_POST['password']);
    $sql ="select * from public.admin where email = '".pg_escape_string($_POST['email'])."' and password ='".$hashpassword."'";
    $data = pg_query($dbconn,$sql); 
    $login_check = pg_num_rows($data);
    //console.log("testing2");
    if($login_check > 0){ 
      //  console.log("testing3");
        session_start();
        $_SESSION["EmailAdmin"] = $_POST['email'];
        header('Location: AdminPanel.php');    
    }else{
        echo "<div class='alert alert-danger'>
        <a href='#' class='close' data-dismiss='alert' aria-label='close'>Close X</a>
        <p><strong>Alert!</strong></p>
        Email or password wrong! Please try again!.
    </div>'";
    }
}


pg_close($dbconn); 
// Check if the user is already logged in, if yes then redirect him to welcome page
// if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
//   header("location: StudentDashboard.php");
//   exit;
//}
 
// Include config file
// require_once "../php/config.php";

 
// Define variables and initialize with empty values
// $username = $password = "";
// $username_err = $password_err = "";
 

// if($_SERVER["REQUEST_METHOD"] == "POST"){

  
//     if(empty(trim($_POST["username"]))){
//         $username_err = "Please enter username.";
//     } else{
//         $username = trim($_POST["username"]);
//     }

//     if(empty(trim($_POST["password"]))){
//         $password_err = "Please enter your password.";
//     } else{
//         $password = trim($_POST["password"]);
//     }
    
    
//     if(empty($username_err) && empty($password_err)){




//         require_once "../php/sql.php";
        
//         $statement = pg_query($db_connection, $LoginSql);

//         $login_check = pg_num_rows($statement);
//     if($login_check > 0){ 
        
    
//                             session_start();
                            
                         
//                             $_SESSION["loggedin"] = true;
//                             $_SESSION["username"] = $username;                            
                            
                          
//                             header("location: StudentDashboard.php");

//     }else{
       
//                             $password_err = "Invalid password or username";

//     }
    
  
//     pg_close($db_connection);
// }
// }
?>






 
<!DOCTYPE html>
<html lang="en-CA" class="no-js">
<head>
    <script>document.documentElement.classList = '';</script>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-PLHBZ39');</script>
    <!-- End Google Tag Manager -->


    <!-- Encoding -->
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
        

    <!-- Style Sheets -->
<link rel='stylesheet' id='tribe-common-skeleton-style-css'  href='../css/common-skeleton.min.css' type='text/css' media='all' />
<link rel='stylesheet' id='tribe-tooltip-css'  href='../css/tooltip.min.css' type='text/css' media='all' />
<link rel='stylesheet' id='wp-block-library-css'  href='../css/style.min.css' type='text/css' media='all' />
<link rel='stylesheet' id='edd-styles-css'  href='../css/edd.min.css' type='text/css' media='all' />
<link rel='stylesheet' id='bootstrap-css'  href='../css/bootstrap.min.css' type='text/css' media='all' />
<link rel='stylesheet' id='site_styles-css'  href='../css/main_styles.css' type='text/css' media='all' />
<link rel='stylesheet' id='ie11_styles-css'  href='../css/ie11.css' type='text/css' media='all' />
<!-- unique to the php pages -->
<link rel='stylesheet' id='booststrap'  href='../css/bootstrap.css' type='text/css' media='all' />
<link rel='stylesheet' id='login-css'  href='../css/Login.css' type='text/css' media='all' />
<script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>


<!-- DNS pre fetch, not sure if we need it. Can speed up the page if we use the below content. removed WP content -->
<link rel='dns-prefetch' href='//cdnjs.cloudflare.com' />
<link rel='dns-prefetch' href='//maps.googleapis.com' />



<!-- JS stuff. the jquery file enables the cart to be animated
The content from cdnjs.cloudflare.com is all open source -->
<script type='text/javascript' src='../js/jquery-3.6.0.min.js' id='jquery-js'></script>
<script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js?ver=67c90ffd8417a442ac33ffaa4a4ee97a' id='popper-js-js'></script>
<script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js?ver=67c90ffd8417a442ac33ffaa4a4ee97a' id='bootstrap-js-js'></script>
<script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>


<!-- head images -->
<link rel="icon" href="../images/png/cropped-RecoveryCollege_Favicon-192x192.png" sizes="192x192" />
<link rel="apple-touch-icon" href="../images/png/cropped-RecoveryCollege_Favicon-180x180.png" />
<meta name="msapplication-TileImage" content="../images/png/cropped-RecoveryCollege_Favicon-270x270.png" />
</head>
    </head>


<body class="news-template-default single single-news postid-1930 has-sitewide-banner tribe-no-js">

    <div id="page" class="site">
        <div id="content" class="site-content">   
            <div id="site-menu" class="main-nav">
                <div class="d-md-none">
                    <div class="nav-trigger d-lg-none">
                        <button class="menu-toggle button--primary" id="main-nav-toggle" aria-haspopup="true" aria-expanded="false"><span class="text">Menu</span> <span class="hamburger-bars"><span class="bar-helper"></span></span></button>
                    </div>

                </div>

                <div class="navigation-wrapper">
                    


                    <nav class="utility-nav">

                        <ul id="menu-utility-menu" class="menu">
                            <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-19" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-19 nav-item"><a title="News &amp; Updates" href="../news.php" class="nav-link">News &amp; Updates</a></li>
                            <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-20" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-20 nav-item"><a title="Donate" target="_blank" href="https://edmonton.cmha.ca/get-involved/donate/" class="nav-link">Donate</a></li>
                            <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-21" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-21 nav-item"><a title="FAQs" href="../Faq.php" class="nav-link">FAQs</a></li>
                            <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-18" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-18 nav-item"><a title="Contact" href="../contact.php" class="nav-link">Contact</a></li>
                        </ul>
                    </nav>
                </div>
            </div>








<!-- Login form -->
        
<div class="header header-simple">
<div class="login">
        <h2>Login</h2>
        <p>Please fill in your credentials to login.</p>
        <form  method="post">
            <div class="form-group ">
                <label>Email</label>
                <input type="email" id="email" name="email" class="form-control" >
                <span class="help-block"></span>
            </div>    
            <div class="form-group ">
                <label>Password</label>
                <input type="password" id="password" name="password" class="form-control">
                <span class="help-block"></span>
            </div>
            <div class="form-group">

                <input type="submit" class="btn btn-primary" name="login" value="login">
            </div>
           
        </form>
    </div>  
</div>








</div><!-- #content -->
    <footer id="site-footer" class="footer" role="contentinfo">
            <div class="container footer-container">
                <div class="row">
                    <div class="footer-newsletter col-12 col-md-4">
                    </div>
                    <div class="footer-nav col-6 d-none d-md-block">
                        <ul id="menu-footer-menu" class="menu">
                            <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-27" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children dropdown menu-item-27 nav-item">
                            <a title="Find a Course" href="AllCourses.php" class="nav-link">Find a Course</a>
                                <ul role="menu">
                                    <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-28" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-28 nav-item"><a title="All Courses" href="AllCourses.php" class="dropdown-item">All Courses</a>
                                    </li>
                                </ul>
                            </li>
                            <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-31" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children dropdown menu-item-31 nav-item">
                            <a title="Get Help" href="#" class="nav-link">Get Help</a>
                                <ul role="menu">
                                    <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-32" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-32 nav-item"><a title="News &amp; Updates" href="news.php" class="dropdown-item">News &amp; Updates</a></li>
                                    <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-33" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-33 nav-item"><a title="FAQs" href="Faq.php" class="dropdown-item">FAQs</a></li>
                                </ul>
                            </li>
                            <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-402" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-402 nav-item"><a title="Contact Us" href="contact.php" class="nav-link">Contact Us</a><ul role="menu" aria-role="menu"><li class="nav-item" aria-role="menuitem">300, 10010-105 St NW<br>Edmonton, AB T5J 1C4</li><li class="nav-item" aria-role="menuitem">780-414-6300</li></ul></li>
                        </ul>
                    </div>

                    <div class="footer-other-blogs col-12 col-md-2">
                                                    
                        <ul class="menu">
                            <li class="nav-item">
                                <a href="#" class="nav-link link">Other Locations</a>
                                <ul class="cmha-locations-menu" role="menu" aria-role="menu">
                                    <li class="menu-item" aria-role="menuitem"><a href="http://recoverycollegecalgary.ca" title="Recovery College Calgary">Calgary</a>
                                    </li>
                                    <li class="menu-item" aria-role="menuitem"><a href="http://recoverycollegewoodbuffalo.ca" title="Recovery College Wood Buffalo">Wood Buffalo</a>
                                    </li>
                                    <li class="menu-item" aria-role="menuitem"><a href="http://recoverycollegelethbridge.ca" title="Recovery College Lethbridge">Lethbridge</a>
                                    </li>
                                    <li class="menu-item" aria-role="menuitem"><a href="http://recoverycollegecentralalberta.ca" title="Recovery College Central Alberta">Central Alberta</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-md-4 footer-main-site-link">
                        <a href="HomePage.php">
                        <img class="" srcset="images/svg/CMHA_AB_Edmonton_ENG_logo-1.svg 1w, images/svg/CMHA_AB_Edmonton_ENG_logo-1.svg 1w, images/svg/CMHA_AB_Edmonton_ENG_logo-1.svg 1w, images/svg/CMHA_AB_Edmonton_ENG_logo-1.svg 1w" src="https://images/svg/CMHA_AB_Edmonton_ENG_logo-1.svg" alt="">
                        </a>
                    </div>

                    <div class="col-12 col-md-8 footer-social">
                        <span class="title-5">Find Us</span>
                            <ul class="footer-social-icons">
                                <li><a href="https://www.facebook.com/CMHAEdmonton/" target="_blank" rel="noopener" aria-label="Facebook"><span class="iconify" data-icon="ant-design:facebook-filled" data-inline="false" style="margin-top: -8px;"></span></a>
                                </li>
                                <li><a href="https://twitter.com/CMHAEdmonton" target="_blank" rel="noopener" aria-label="Twitter"><span class="iconify" data-icon="ion-logo-twitter" data-inline="false" style="margin-top: -8px;"></span></a>
                                </li>
                            </ul>
                    </div>
                </div>

                <div class="footer-meta">
                    <div class="row">
                        <div class="col-12 col-sm-4 col-md-6">
                            <span class="footer-meta-item"><a href="Privacy.php">Privacy Page</a></span>
                            <span class="footer-meta-sep">|</span>
                            <span class="footer-meta-item"><a href="TermsConditions.php">Terms of Use</a></span>
                            <span class="footer-meta-sep">|</span>
                            <span class="footer-meta-item"><a href="CopyrightPermissions.php">Copyright &amp; Permissions</a></span>
                        </div>

                        <div class="col-12 col-sm-8 col-md-6">
                            <span class="copy-registration"><span class="footer-meta-item">© Recovery College Edmonton 2020, All Rights Reserved</span><span class="footer-meta-item">Registered Charity Number: 118834316RR</span></span>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
</div>
<!-- #page -->



<script>
    ( function ( body ) {
        'use strict';
        body.className = body.className.replace( /\btribe-no-js\b/, 'tribe-js' );
    } )( document.body );
</script>




<!-- Final shopping cart script -->

<!-- This is the last thing remaining from WP. It will need to be updated to the shopping cart works -->
<script type='text/javascript' id='ajax_scripts-js-extra'>
    /* <![CDATA[ */
    var ajaxscript = {"ajax_url":"https:\/\/recoverycollegeedmonton.ca\/wp-admin\/admin-ajax.php","home_url":"https:\/\/recoverycollegeedmonton.ca","theme_url":"https:\/\/recoverycollegeedmonton.ca\/wp-content\/themes\/cmha","checkout_url":"https:\/\/recoverycollegeedmonton.ca\/registration\/","nonce":"3a6a7b2efb"};
    /* ]]> */
    </script>
    <script type='text/javascript' src='js/ajax_script.js' id='ajax_scripts-js'></script>
    
    </body>
    </html>