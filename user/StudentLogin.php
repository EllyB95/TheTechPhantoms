<?php
// Initialize the session
//session_start();
$dbconn = pg_connect("sslmode=require sslrootcert=../admin/certificates/ca-certificate.crt host=thetechphantoms-do-user-8660169-0.b.db.ondigitalocean.com port=25060 dbname=Postgres user=CMHA password=j38mp49ya50ow9im");
if (!$dbconn) {
    echo "<center><h1>Doesn't work =(</h1></center>";
}

$username_err = $password_err = "";


if (isset($_POST['login']) && !empty($_POST['login'])) {
    // Check if password is empty
    if (empty(trim($_POST["password"]))) {
        $password_err = "Please enter your password.";
    } else {
        $password = trim($_POST["password"]);
    }

    $hashpassword = md5($_POST['password']);
    $sql = "select * from public.cmhauser where emailaddress = '" . pg_escape_string($_POST['emailaddress']) . "' and password ='" . $hashpassword . "'";
    $data = pg_query($dbconn, $sql);
    $login_check = pg_num_rows($data);
    //console.log("testing2");
    if ($login_check > 0) {
        //  console.log("testing3");
        session_start();
        $_SESSION["EmailStudent"] = $_POST['emailaddress'];
        $string = exec('getmac');
        $mac = substr($string, 0, 17);


        $sql2 = pg_query(sprintf("SELECT * FROM public.cart WHERE emailaddress='" . $mac . "';"));

        while ($row = pg_fetch_assoc($sql2)) {
            $sql3 = pg_fetch_assoc(pg_query(sprintf("SELECT * FROM public.cart WHERE course_id='" . $row['course_id'] . "' AND emailaddress='" . $_SESSION['EmailStudent'] . "';")));
            $sql4 = pg_fetch_assoc(pg_query(sprintf("SELECT * FROM public.enroll WHERE course_id='" . $row['course_id'] . "' AND emailaddress='" . $_SESSION['EmailStudent'] . "';")));
            if (empty($sql3) && empty($sql4))
                pg_query(sprintf("UPDATE public.cart SET emailaddress='" . $_SESSION['EmailStudent'] . "' WHERE emailaddress='" . $mac . "';"));
            else
                pg_query(sprintf("DELETE from public.cart WHERE emailaddress='" . $mac . "' and course_id='" . $row['course_id'] . "';"));

        }
        if (empty(pg_fetch_assoc($sql2)))
            header('Location: EnrollNewCourse.php');
        else
            header('Location: MyCart.php');
    } else {
        echo "<div class='alert alert-danger'>
        <a href='#' class='close' data-dismiss='alert' aria-label='close'>Close X</a>
        <p><strong>Alert!</strong></p>
        Email or password wrong! Please try again!.
    </div>'";
    }
}


pg_close($dbconn);
?>






<!DOCTYPE html>
<html lang="en-CA" class="no-js">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script>
        document.documentElement.classList = '';
    </script>
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-PLHBZ39');
    </script>
    <!-- End Google Tag Manager -->


    <!-- Encoding -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- Style Sheets -->
    <link rel='stylesheet' id='tribe-common-skeleton-style-css' href='../css/common-skeleton.min.css' type='text/css' media='all' />
    <link rel='stylesheet' id='tribe-tooltip-css' href='../css/tooltip.min.css' type='text/css' media='all' />
    <link rel='stylesheet' id='wp-block-library-css' href='../css/style.min.css' type='text/css' media='all' />
    <link rel='stylesheet' id='edd-styles-css' href='../css/edd.min.css' type='text/css' media='all' />
    <link rel='stylesheet' id='bootstrap-css' href='../css/bootstrap.min.css' type='text/css' media='all' />
    <link rel='stylesheet' id='site_styles-css' href='../css/main_styles.css' type='text/css' media='all' />
    <link rel='stylesheet' id='ie11_styles-css' href='../css/ie11.css' type='text/css' media='all' />
    <!-- unique to the php pages -->
    <link rel='stylesheet' id='booststrap' href='../css/bootstrap.css' type='text/css' media='all' />
    <link rel='stylesheet' id='login-css' href='../css/Login.css' type='text/css' media='all' />
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

    <a class="sr-only sr-only-focusable skip-link" href="#skip-anchor">Skip to content</a>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PLHBZ39" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <div id="page" class="site">
        <div id="content" class="site-content">
            <div id="site-menu" class="main-nav">


                <!-- <div class="sitewide-banner" data-modified="1588200144">
        <div class="sitewide-banner-container">
            <h4>CMHA Recovery College classes are now being offered online.</h4><a href="COURSESONLINEPLACEHOLDER" class="button">Register here.</a>        </div>

        <i class="icon ion-md-close hide-banner"></i>
    </div> -->

                <div class="d-md-none">
                    <div class="nav-trigger d-lg-none">
                        <button class="menu-toggle button--primary" id="main-nav-toggle" aria-haspopup="true" aria-expanded="false"><span class="text">Menu</span> <span class="hamburger-bars"><span class="bar-helper"></span></span></button>
                    </div>
                    <div class="brand brand--mobile">
                        <a href="../HomePage.php" title="Recovery College Edmonton" aria-label="Recovery College Edmonton" tabindex="0">
                            <img src="../images/svg/RC_Edmonton_Logo.svg" alt="Recovery College Edmonton">
                        </a>
                    </div>
                </div>

                <div class="navigation-wrapper">
                    <nav class="primary-nav">
                        <ul id="menu-main-menu" class="menu">
                            <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-22" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-22 nav-item"><a title="About Recovery College" href="../about.php" class="nav-link">About Recovery College</a></li>
                            <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-23" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children dropdown menu-item-23 nav-item"><a title="Find a Course" href="../AllCourses.php" aria-haspopup="true" aria-expanded="false" id="menu-item-dropdown-23">Find a Course</a></li>
                        </ul>
                    </nav>

                    <div class="brand brand--desktop d-none d-md-block">
                        <a href="../HomePage.php" title="Recovery College Edmonton" aria-label="Recovery College Edmonton" tabindex="0">
                            <img src="../images/svg/RC_Edmonton_Logo.svg" alt="Recovery College Edmonton">
                        </a>
                    </div>

                    <nav class="utility-nav">
                        <ul id="menu-utility-menu" class="menu">
                            <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-19" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-19 nav-item"><a title="News &amp; Updates" href="../news.php" class="nav-link">News &amp; Updates</a></li>
                            <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-20" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-20 nav-item"><a title="Donate" target="_blank" href="https://edmonton.cmha.ca/get-involved/donate/" class="nav-link">Donate</a></li>
                            <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-21" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-21 nav-item"><a title="FAQs" href="../Faq.php" class="nav-link">FAQs</a></li>
                            <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-18" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-18 nav-item"><a title="Contact" href="../contact.php" class="nav-link">Contact</a></li>
                            <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-18" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-18 nav-item"><a title="Cart" href="../MyCart.php" class="nav-link">&nbsp;&nbsp;&nbsp;Cart</a></li>
                            <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-18" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-18 nav-item"><a title="Cart" href="../MyCart.php" class="nav-link"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                            <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/></svg></a>
                            </li>
                        </ul>       
                    </nav>
                </div>
            </div>








            <!-- Login form -->

            <div class="header header-simple">
                <div class="login">
                    <h2>Login</h2>
                    <p>Please fill in your credentials to login.</p>
                    <form method="post">
                        <div class="form-group ">
                            <label>Email</label>
                            <input type="text" id="emailaddress" name="emailaddress" required class="form-control">
                            <span class="help-block"><?php echo $username_err ?></span>
                        </div>
                        <div class="form-group ">
                            <label>Password</label>
                            <input type="password" id="password" name="password" required class="form-control">
                            <span class="help-block"></span>
                        </div>
                        <div class="form-group">


                            <input type="submit" class="btn btn-primary" name="login" value="login" target="_blank">
                        </div>
                        <p>Don't have an account? <a href="../AddNewStudentNew.php">Sign up now</a>.</p>
                    </form>
                </div>
            </div>








        </div><!-- #content -->
        <!-- Sitewide Pop-up -->
       <footer id="site-footer" class="footer" role="contentinfo">
            <div class="container footer-container">
                <div class="row">
                    <div class="footer-newsletter col-12 col-md-4">
                    </div>
                    <div class="footer-nav col-6 d-none d-md-block">
                        <ul id="menu-footer-menu" class="menu">
                            <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-27" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children dropdown menu-item-27 nav-item">
                            <a title="Find a Course" href="../AllCourses.php" class="nav-link">Find a Course</a>
                                <ul role="menu">
                                    <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-28" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-28 nav-item"><a title="All Courses" href="../AllCourses.php" class="dropdown-item">All Courses</a>
                                    </li>
                                </ul>
                            </li>
                            <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-31" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children dropdown menu-item-31 nav-item">
                            <a title="Get Help" href="#" class="nav-link">Get Help</a>
                                <ul role="menu">
                                    <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-32" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-32 nav-item"><a title="News &amp; Updates" href="../news.php" class="dropdown-item">News &amp; Updates</a></li>
                                    <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-33" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-33 nav-item"><a title="FAQs" href="../Faq.php" class="dropdown-item">FAQs</a></li>
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
                        <a href="../HomePage.php">
                        <img class="" srcset="../images/svg/CMHA_AB_Edmonton_ENG_logo-1.svg 1w, images/svg/CMHA_AB_Edmonton_ENG_logo-1.svg 1w, images/svg/CMHA_AB_Edmonton_ENG_logo-1.svg 1w, images/svg/CMHA_AB_Edmonton_ENG_logo-1.svg 1w" src="https://images/svg/CMHA_AB_Edmonton_ENG_logo-1.svg" alt="">
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
                            <span class="footer-meta-item"><a href="../Privacy.php">Privacy Page</a></span>
                            <span class="footer-meta-sep">|</span>
                            <span class="footer-meta-item"><a href="../TermsConditions.php">Terms of Use</a></span>
                            <span class="footer-meta-sep">|</span>
                            <span class="footer-meta-item"><a href="../CopyrightPermissions.php">Copyright &amp; Permissions</a></span>
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
        (function(body) {
            'use strict';
            body.className = body.className.replace(/\btribe-no-js\b/, 'tribe-js');
        })(document.body);
    </script>




    <!-- Final shopping cart script -->

    <!-- This is the last thing remaining from WP. It will need to be updated to the shopping cart works -->
    <script type='text/javascript' id='ajax_scripts-js-extra'>
        /* <![CDATA[ */
        var ajaxscript = {
            "ajax_url": "https:\/\/recoverycollegeedmonton.ca\/wp-admin\/admin-ajax.php",
            "home_url": "https:\/\/recoverycollegeedmonton.ca",
            "theme_url": "https:\/\/recoverycollegeedmonton.ca\/wp-content\/themes\/cmha",
            "checkout_url": "https:\/\/recoverycollegeedmonton.ca\/registration\/",
            "nonce": "3a6a7b2efb"
        };
        /* ]]> */
    </script>
    <script type='text/javascript' src='js/ajax_script.js' id='ajax_scripts-js'></script>

</body>

</html>