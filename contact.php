<?php
$dbconn = pg_connect("host=localhost port=5432 dbname=platform user=postgres password=postgres");
if (isset($_POST['message_submit']) && !empty($_POST['message_submit'])) {

    $sql = "insert into public.messages(name,email,message)values('" . $_POST['name'] . "','" . $_POST['email'] . "','" . $_POST['message'] . "');";
    $ret = pg_query($dbconn, $sql);
    if ($ret) {
        echo '<script>alert("Message Submited Successfully")</script>';
        echo "<script>setTimeout(\"location.href = 'contact.php';\",1);</script>";
    } else {

        echo "Something Went Wrong";
    }
}
pg_close($dbconn);
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

<link rel='stylesheet' id='tribe-common-skeleton-style-css'  href='css/common-skeleton.min.css' type='text/css' media='all' />
<link rel='stylesheet' id='tribe-tooltip-css'  href='css/tooltip.min.css' type='text/css' media='all' />
<link rel='stylesheet' id='wp-block-library-css'  href='css/style.min.css' type='text/css' media='all' />
<link rel='stylesheet' id='edd-styles-css'  href='css/edd.min.css' type='text/css' media='all' />
<link rel='stylesheet' id='bootstrap-css'  href='css/bootstrap.min.css' type='text/css' media='all' />
<link rel='stylesheet' id='site_styles-css'  href='css/main_styles.css' type='text/css' media='all' />
<link rel='stylesheet' id='ie11_styles-css'  href='css/ie11.css' type='text/css' media='all' /> 

<!-- DNS pre fetch, not sure if we need it. Can speed up the page if we use the below content. removed WP content -->
<link rel='dns-prefetch' href='//cdnjs.cloudflare.com' />
<link rel='dns-prefetch' href='//maps.googleapis.com' />
<link rel='dns-prefetch' href='//s.w.org' />


<!-- JS stuff. the jquery file enables the cart to be animated
The content from cdnjs.cloudflare.com is all open source -->
<script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js' id='jquery-js'></script>
<script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js?ver=67c90ffd8417a442ac33ffaa4a4ee97a' id='popper-js-js'></script>
<script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js?ver=67c90ffd8417a442ac33ffaa4a4ee97a' id='bootstrap-js-js'></script>
<script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
<!-- head images -->
<link rel="icon" href="images/svg/cropped-RecoveryCollege_Favicon-192x192.svg" sizes="192x192" />
<link rel="cart" href="images/svg/cart.svg" sizes="192x192" />
<link rel="apple-touch-icon" href="images/svg/cropped-RecoveryCollege_Favicon-180x180.png" />
<meta name="msapplication-TileImage" content="images/svg/cropped-RecoveryCollege_Favicon-270x270.svg" />

</head>


<body class="page-template-default page page-id-42 has-sitewide-banner tribe-no-js">

    <div id="site-menu" class="main-nav">

    
    <div class="sitewide-banner" data-modified="1588200144">
        <div class="sitewide-banner-container">
            <h4>CMHA Recovery College classes are now being offered online.</h4><a href="AddNewStudentNew.php" class="button">Register here.</a>        </div>

        <i class="icon ion-md-close hide-banner"></i>
    </div>

    <div class="d-md-none">
        <div class="nav-trigger d-lg-none">
            <button class="menu-toggle button--primary" id="main-nav-toggle" aria-haspopup="true" aria-expanded="false"><span class="text">Menu</span> <span class="hamburger-bars"><span class="bar-helper"></span></span></button>
        </div>
        <div class="brand brand--mobile">
                            <a href="HomePage.php" title="Recovery College Edmonton" aria-label="Recovery College Edmonton" tabindex="0">
                    <img src="images/svg/RC_Edmonton_Logo.svg" alt="Recovery College Edmonton">
                </a>
                    </div>
    </div>

    <div class="navigation-wrapper">
        <nav class="primary-nav">
            <ul id="menu-main-menu" class="menu">
                <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-22" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-22 nav-item"><a title="About Recovery College" href="about.php" class="nav-link">About Recovery College</a></li>
                <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-23" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children dropdown menu-item-23 nav-item"><a title="Find a Course" href="AllCourses.php" aria-haspopup="true" aria-expanded="false" id="menu-item-dropdown-23">Find a Course</a></li>
            </ul>       
        </nav>

        <div class="brand brand--desktop d-none d-md-block">
                            <a href="HomePage.php" title="Recovery College Edmonton" aria-label="Recovery College Edmonton" tabindex="0">
                    <img src="images/svg/RC_Edmonton_Logo.svg" alt="Recovery College Edmonton">
                </a>
                    </div>

        <nav class="utility-nav">
            <ul id="menu-utility-menu" class="menu">
                <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-19" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-19 nav-item"><a title="News &amp; Updates" href="news.php" class="nav-link">News &amp; Updates</a></li>
                <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-20" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-20 nav-item"><a title="Donate" target="_blank" href="https://edmonton.cmha.ca/get-involved/donate/" class="nav-link">Donate</a></li>
                <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-21" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-21 nav-item"><a title="FAQs" href="Faq.php" class="nav-link">FAQs</a></li>
                <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-18" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-18 nav-item"><a title="Contact" href="contact.php" class="nav-link">Contact</a></li>
                <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-18" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-18 nav-item"><a title="Login" href="user/StudentLogin.php" class="nav-link">Login</a></li>
                <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-18" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-18 nav-item"><a title="Cart" href="MyCart.php" class="nav-link">&nbsp;&nbsp;&nbsp;Cart</a></li>
                <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-18" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-18 nav-item"><a title="Cart" href="MyCart.php" class="nav-link"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/></svg></a>
                </li>
            </ul>       
        </nav>
    </div>
</div>
        <div id="skip-anchor" tabindex="-1"></div>
        <div class="header header-simple">
            <div class="container">
                <div class="row">
                    <div class="col-12 ">
                        <h1>Contact</h1>
                    </div>
                </div>
            </div>

            </div>
        <section class="intro" id="intro-frontpage">

                <div class="brush-stroke brush-stroke-top" style="background-image: url(images/svg/white-top.svg);"></div>

                <div class="container intro-container">
                    <div class="row">

                        <div class="col-12 col-md-6">
                            <h2>Get in touch with us</h2>

                            <div class="intro-icons">
                                <div  data-relationship="individuals">
                                    <img src="images/svg/CMHA_Anybody.svg" alt="">
                                </div>
                                <div  data-relationship="young-adults">
                                    <img src="images/svg/CMHA_Students.svg" alt="">
                                </div>
                                <div  data-relationship="">
                                    <img src="images/svg/CMHA_OlderAdults.svg" alt="">
                                </div>
                                <div data-relationship="family-friends">
                                    <img src="images/svg/CMHA_Families.svg" alt="">
                                </div>
                                <div  data-relationship="">
                                    <img src="images/svg/CMHA_NativeAmericans.svg" alt="">
                                </div>
                            </div>
                        </div>



                        <div class="col-12 col-md-6">
                            <p>
                                <strong>Phone : </strong> 780-414-6333 <br>
                                <strong>Address : </strong> 300, 10010-105 St NW, Edmonton, AB CA T5J 1C4<br>
                                <strong>Email : </strong> <b>recoverycollege@cmha-edmonton.ab.ca</b>
                            </p>
                        </div>

                    </div>
                </div>

                <div class="brush-stroke brush-stroke-bottom" style="background-image: url(images/svg/white-top.svg);"></div>

            </section>



            <section class="" id="contact-form-section">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="">Send Us a Message</h2>
                        </div>
                        <div class="contact-form col-12">

                            <div class="gf_browser_gecko gform_wrapper" id="gform_wrapper_2">
                                <form method="post" enctype="multipart/form-data" id="gform_2">
                                    <div class="gform_body">
                                        <ul id="gform_fields_2" class="gform_fields top_label form_sublabel_below description_below">
                                            <li id="field_2_1" class="gfield field_sublabel_below field_description_below gfield_visibility_visible"><label class="gfield_label" for="input_2_1">Name</label>
                                                <div class="ginput_container ginput_container_text"><input name="name" id="input_2_1" type="text" value="" class="large" placeholder="First and last name" aria-invalid="false" required></div>
                                            </li>
                                            <li id="field_2_2" class="gfield field_sublabel_below field_description_below gfield_visibility_visible"><label class="gfield_label" for="input_2_2">Email</label>
                                                <div class="ginput_container ginput_container_email">
                                                    <input type="email" id="input_2_2" name="email" type="text" value="" class="large" placeholder="name@email.com" aria-invalid="false" required>
                                                </div>
                                            </li>
                                            <li id="field_2_3" class="gfield gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible"><label class="gfield_label" for="input_2_3">Message<span class="gfield_required">*</span></label>
                                                <div class="ginput_container ginput_container_textarea"><textarea name="message" id="input_2_3" class="textarea medium" placeholder="How can we help?" aria-required="true" aria-invalid="false" rows="10" cols="50" required></textarea></div>
                                            </li>
                                            <li id="field_2_4" class="gfield field_sublabel_below field_description_below hidden_label gfield_visibility_visible"><label class="gfield_label" for="input_2_4"></label>
                                                <div id="input_2_4" class="ginput_container ginput_recaptcha" data-sitekey="6LeAl7wUAAAAALVQpY_PsXKlRqf3wJ45MH5pPiZN" data-theme="light" data-tabindex="-1" data-size="invisible" data-badge="bottomright" style="">
                                                    <div class="grecaptcha-badge" data-style="bottomright" style="width: 256px; height: 60px; display: block; transition: right 0.3s ease 0s; position: fixed; bottom: 14px; right: -186px; box-shadow: gray 0px 0px 5px; border-radius: 2px; overflow: hidden;">
                                                        <div class="grecaptcha-logo"><iframe src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LeAl7wUAAAAALVQpY_PsXKlRqf3wJ45MH5pPiZN&amp;co=aHR0cHM6Ly9yZWNvdmVyeWNvbGxlZ2VlZG1vbnRvbi5jYTo0NDM.&amp;hl=en&amp;v=pRiAUlKgZOMcFLsfzZTeGtOA&amp;theme=light&amp;size=invisible&amp;badge=bottomright&amp;cb=nomjpxlndigf" role="presentation" name="a-ky27wnnpfmiz" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox allow-storage-access-by-user-activation" tabindex="-1" width="256" height="60" frameborder="0"></iframe></div>
                                                        <div class="grecaptcha-error"></div><textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea>
                                                    </div><iframe style="display: none;"></iframe>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="gform_footer top_label">
                                        <input class="button gform_button" name="message_submit" id="gform_submit_button_2" type="submit" value="Submit">
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="cta">

            <div class="brush-stroke brush-stroke-top" style="background-image: url(images/svg/dark-top.svg);"></div>

            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 cta-inner">
                        <img src="images/svg/RecoveryCollege-FreeMentalHealthCourses-FooterGraphic.svg" alt="Find a Course">
                        <h3 class="title-2">Develop your own resourcefulness</h3>
                        <a href="AllCourses.php" title="Find a Course" class="button button--reversed">Find a Course</a>
                    </div>
                </div>
            </div>

        </section>

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
    </div><!-- #page -->

        <script>
            (function(body) {
                'use strict';
                body.className = body.className.replace(/\btribe-no-js\b/, 'tribe-js');
            })(document.body);
        </script>
        <script type="text/javascript" id="site_scripts-js-extra">
            /* <![CDATA[ */
            var plglobals = {
                "session": ""
            };
            /* ]]> */
        </script>
        <script type="text/javascript" src="js/base_script.js?ver=1.7" id="site_scripts-js"></script>
        <script type="text/javascript" id="ajax_scripts-js-extra">
            /* <![CDATA[ */
            var ajaxscript = {
                "ajax_url": "https:\/\/recoverycollegeedmonton.ca\/wp-admin\/admin-ajax.php",
                "home_url": "https:\/\/recoverycollegeedmonton.ca",
                "theme_url": "https:\/\/recoverycollegeedmonton.ca\/wp-content\/themes\/cmha",
                "checkout_url": "https:\/\/recoverycollegeedmonton.ca\/registration\/",
                "nonce": "ac3450dab4"
            };
            /* ]]> */
        </script>
        <script type="text/javascript" src="js/ajax_script.js?ver=1.7" id="ajax_scripts-js"></script>


</body>

</html>