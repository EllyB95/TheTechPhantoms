
<!DOCTYPE html>
<html lang="en-CA" class="no-js">
<head>
    <script>document.documentElement.classList = '';</script>
    <!-- Google Tag Manager -->
    <script>
        (function (w, d, s, l, i) {
            w[l] = w[l] || []; w[l].push({
                'gtm.start':
                    new Date().getTime(), event: 'gtm.js'
            }); var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
                    'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-PLHBZ39');</script>
    <!-- End Google Tag Manager -->

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" ="https://recoverycollegeedmonton.ca/xmlrpc.php">

    <!-- Style Sheets -->
    <link rel='stylesheet' id='tribe-common-skeleton-style-css' href='css/common-skeleton.min.css' type='text/css' media='all' />
    <link rel='stylesheet' id='tribe-tooltip-css' href='css/tooltip.min.css' type='text/css' media='all' />
    <link rel='stylesheet' id='wp-block-library-css' href='css/style.min.css' type='text/css' media='all' />
    <link rel='stylesheet' id='edd-styles-css' href='css/edd.min.css' type='text/css' media='all' />
    <link rel='stylesheet' id='bootstrap-css' href='css/bootstrap.min.css' type='text/css' media='all' />
    <link rel='stylesheet' id='site_styles-css' href='css/main_styles.css' type='text/css' media='all' />
    <link rel='stylesheet' id='ie11_styles-css' href='css/ie11.css' type='text/css' media='all' />

    <!-- DNS pre fetch, not sure if we need it. Can speed up the page if we use the below content. removed WP content -->
    <link rel='dns-prefetch' href='//cdnjs.cloudflare.com' />
    <link rel='dns-prefetch' href='//maps.googleapis.com' />



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


<body class="privacy-policy page-template-default page page-id-44 tribe-no-js">

    <a class="sr-only sr-only-focusable skip-link" href="#skip-anchor">Skip to content</a>

    <!-- Google Tag Manager (noscript) -->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PLHBZ39"
                height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript) -->

    <div id="page" class="site">
        <div id="content" class="site-content">


            <div class="cart-button-outer">
                <div class="cart-button-quantity"></div>
                <button id="cart-toggle" class="button-cart" aria-label="Hide / Show Cart"><img src="images/svg/cart.svg" alt="Cart"> </button>
            </div>

            <div id="cart">

                <div class="cart-header">
                    <h4>Your Course Cart</h4>
                </div>

                <div class="cart-inner">

                    <div class="cart-items-outer">
                        <span><b>Added Courses</b></span>
                        <hr>

                        <ul class="cart-items">
                        </ul>
                    </div>

                    <div class="cart-actions">
                        <button id="finalize-registration">Finalize Registration</button>
                        <a class="d-none" href="REGISTRATIONPAGEPLACEHOLDER" id="navigate-finalize-registration"></a><!--https://recoverycollegeedmonton.ca/registration/-->

                        <button id="dismiss-cart" class="button button--secondary">Keep Browsing</button>
                    </div>
                </div>

            </div>

            <div id="site-menu" class="main-nav">
		<div class="sitewide-banner" data-modified="1588200144">
		  <div class="sitewide-banner-container">
		     <h4>CMHA Recovery College classes are now being offered online.</h4><a href="StudentPanel/Register.php" class="button">Register here.</a>
		  </div>

		   <i class="icon ion-md-close hide-banner"><span class="iconify" data-icon="gridicons:cross-small" data-inline="false"></span></i>
		</div>

                <!-- This banner refers to the top bar. can be used for news. in this case, it refers to online classes -->
                <div class="d-md-none">
                    <div class="nav-trigger d-lg-none">
                        <button class="menu-toggle button--primary" id="main-nav-toggle" aria-haspopup="true" aria-expanded="false"><span class="text">Menu</span> <span class="hamburger-bars"><span class="bar-helper"></span></span></button>
                    </div>
                    <div class="brand brand--mobile">
                        <a href="HomePage.html" title="Recovery College Edmonton" aria-label="Recovery College Edmonton" tabindex="0"><!--https://recoverycollegeedmonton.ca-->
                            <img src="images/svg/RC_Edmonton_Logo.svg" alt="Recovery College Edmonton">
                        </a>
                    </div>
                </div>

                <div class="navigation-wrapper">
                    <nav class="primary-nav">

                        <!-- Open source standard community schemas. Fine to use. can make the nav elements work much better -->
                        <ul id="menu-main-menu" class="menu">
                            <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-22" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-22 nav-item"><a title="About Recovery College" href="About.php" class="nav-link">About Recovery College</a></li><!--http://recoverycollegeedmonton.ca/about-recovery-college/-->
                            <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-23" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children dropdown menu-item-23 nav-item">
                                <a title="Find a Course" href="Courses.php" aria-haspopup="true" aria-expanded="false">Find a Course</a></li>
                        </ul>
                    </nav>

                    <div class="brand brand--desktop d-none d-md-block">
                        <a href="HomePage.html" title="Recovery College Edmonton" aria-label="Recovery College Edmonton" tabindex="0">
                            <!--https://recoverycollegeedmonton.ca-->
                            <img src="images/svg/RC_Edmonton_Logo.svg" alt="Recovery College Edmonton">
                        </a>
                    </div>

                    <nav class="utility-nav">
                       
                        <ul id="menu-utility-menu" class="menu">
                            <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-19" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-19 nav-item"><a title="News &amp; Updates" href="News.php" class="nav-link">News &#038; Updates</a></li><!--http://recoverycollegeedmonton.ca/news/-->
                            <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-20" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-20 nav-item"><a title="Donate" target="_blank" href="DONATEPLACEHOLDER" class="nav-link">Donate</a></li><!--https://edmonton.cmha.ca/get-involved/donate/-->
                            <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-21" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-21 nav-item"><a title="FAQs" href="Faq.php" class="nav-link">FAQs</a></li><!--http://recoverycollegeedmonton.ca/faqs/-->
                            <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-18" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-18 nav-item"><a title="Contact" href="Contact.php" class="nav-link">Contact</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div id="skip-anchor" tabindex="-1"></div>
            <div class="header header-simple">

                <div class="container">
                    <div class="row">

                        <div class="col-12">

                            <h1>
                                Privacy Policy
                            </h1>

                        </div>

                    </div>
                </div>

            </div>

            <section class="intro">

                <div class="brush-stroke brush-stroke-top" style="background-image: url(images/svg/white-top.svg);"></div>

                <div class="container intro-container">
                    <div class="row">


                        <div class="col-12 col-md-12">
                            <h2>We take your right to privacy seriously</h2>
                        </div>



                    </div>
                </div>

                <div class="brush-stroke brush-stroke-bottom" style="background-image: url(images/svg/white-top.svg);"></div>

            </section>

            <section class="dynamic-content ">

                <div class="container">
                    <div class="row">


                        <div class="col-12 ">
                            <div class="wysiwyg">
                                <p>Following is the CMHA statement concerning privacy issues on our web site. If you have any questions, comments, or suggestions, please contact us.</p>
                                <ul>
                                    <li>We do not automatically gather any personal information such as your name, phone number, e-mail or address. This information is only obtained if you supply it voluntarily, through contacting us via e-mail, by asking to be added to an Information Network or to receive electronic newsletters or other information.</li>
                                    <li>Any personal information you provide to us will not be sold to any third party. We use software that receives and records the Internet Protocol (IP) address of the computer that has contacted our web site. We make no attempt to link these addresses with the identity of individuals contacting our site. The information is used to improve the content of this site and is not shared with other organizations.</li>
                                    <li>We do not regularly use "cookies" to track how our visitors use the site. Whenever we enable "cookies" to facilitate our transactions, we will first inform you.</li>
                                </ul>
                                <p>If you choose to participate in an on-line forum or discussion group or join an Information Network or similar list, we may ask you to volunteer personal information such as your name and e-mail address for the purposes of effective administration of the forum or discussion group. We will not disclose this information to anyone outside of CMHA without your prior consent.</p>
                            </div>
                        </div>


                    </div>
                </div>

            </section>



        </div><!-- #content -->
        <!-- Sitewide Pop-up/Modal -->
        <footer id="site-footer" class="footer" role="contentinfo">
            <div class="container footer-container">

                <div class="row">

                    <div class="footer-newsletter col-12 col-md-4">


                    </div>

                    <div class="footer-nav col-6 d-none d-md-block">

                        <ul id="menu-footer-menu" class="menu">
                            <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-27" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children dropdown menu-item-27 nav-item">
                                <a title="Find a Course" href="Courses." clphpass="nav-link">Find a Course</a>
                            </li>
                            <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-31" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children dropdown menu-item-31 nav-item">
                                <a title="Get Help" href="#" class="nav-link">Get Help</a>
                                <ul role="menu">
                                    <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-32" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-32 nav-item"><a title="News &amp; Updates" href="News.php" class="dropdown-item">News &#038; Updates</a></li><!--http://recoverycollegeedmonton.ca/news/-->
                                    <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-33" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-33 nav-item"><a title="FAQs" href="Faq.php" class="dropdown-item">FAQs</a></li><!--http://recoverycollegeedmonton.ca/faqs/-->
                                </ul>
                            </li>
                            <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-402" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-402 nav-item"><a title="Contact Us" href="Contact.php" class="nav-link">Contact Us</a><ul role="menu" aria-role="menu"><li class="nav-item" aria-role="menuitem">300, 10010-105 St NW<br />Edmonton, AB T5J 1C4</li><li class="nav-item" aria-role="menuitem">780-414-6300</li></ul></li>
                        </ul>
                    </div>

                    <div class="footer-other-blogs col-12 col-md-2">


                        <ul class="menu">
                            <li class="nav-item">
                                <a href="#" class="nav-link link">Other Locations</a>
                                <ul class="cmha-locations-menu" role="menu" aria-role="menu">
                                    <li class="menu-item" aria-role="menuitem">
                                        <a href="http://recoverycollegecalgary.ca" title="Recovery College Calgary">Calgary</a>
                                    </li>
                                    <li class="menu-item" aria-role="menuitem">
                                        <a href="http://recoverycollegewoodbuffalo.ca" title="Recovery College Wood Buffalo">Wood Buffalo</a>
                                    </li>
                                    <li class="menu-item" aria-role="menuitem">
                                        <a href="http://recoverycollegelethbridge.ca" title="Recovery College Lethbridge">Lethbridge</a>
                                    </li>
                                    <li class="menu-item" aria-role="menuitem">
                                        <a href="http://recoverycollegecentralalberta.ca" title="Recovery College Central Alberta">Central Alberta</a>
                                    </li>

                                </ul>
                            </li>
                        </ul>
                    </div>

                </div>

                <div class="row">

                    <div class="col-12 col-md-4 footer-main-site-link">

                        <a href="#" target="_blank">
                            <!--https://edmonton.cmha.ca/-->
                            <img class="" srcset="images/svg/CMHA_AB_Edmonton_ENG_logo-1.svg 1w, https://recoverycollegeedmonton.ca/wp-content/uploads/sites/3/2019/08/CMHA_AB_Edmonton_ENG_logo-1.svg 1w, https://recoverycollegeedmonton.ca/wp-content/uploads/sites/3/2019/08/CMHA_AB_Edmonton_ENG_logo-1.svg 1w, https://recoverycollegeedmonton.ca/wp-content/uploads/sites/3/2019/08/CMHA_AB_Edmonton_ENG_logo-1.svg 1w" src="https://recoverycollegeedmonton.ca/wp-content/uploads/sites/3/2019/08/CMHA_AB_Edmonton_ENG_logo-1.svg" alt="">
                        </a>
                    </div>

                    <div class="col-12 col-md-8 footer-social">
                        <span class="title-5">Find Us</span>
                        <ul class="footer-social-icons">

                            <li>
				<a href="https://www.facebook.com/CMHAEdmonton/" target="_blank" rel="noopener" aria-label="Facebook">
				<span class="iconify" data-icon="ant-design:facebook-filled" data-inline="false" style="margin-top: -8px;"></span>

				</a>
			</li>

			<li>
				<a href="https://twitter.com/CMHAEdmonton" target="_blank" rel="noopener" aria-label="Twitter">
				<span class="iconify" data-icon="ion-logo-twitter" data-inline="false" style="margin-top: -8px;"></span>

				</a>
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
                            <span class="copy-registration"><span class="footer-meta-item">&copy; Recovery College Edmonton 2020, All Rights Reserved</span><span class="footer-meta-item">Registered Charity Number: 118834316RR</span></span>
                        </div>

                    </div>
                </div>

            </div>
        </footer>

        <div class="modal fade" id="waitlist-modal" tabindex="-1" role="dialog" aria-labelledby="waitlist-modal" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="waitlist-modal-title">Join Waitlist</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <p>This course is full. Add yourself to the waitlist you&#8217;ll be contacted when a spot opens up.</p>

                        <form>
                            <label for="waitlist__name">Name</label>
                            <input type="text" name="name" id="waitlist__name" placeholder="John Doe" required>

                            <p>What is your preferred method of contact?</p>
                            <div class="radio-group">
                                <field-group>
                                    <input type="radio" name="contact-preference" id="waitlist-contact-preference-email" data-conditional-control="true" value="email" checked="checked" />
                                    <label for="waitlist-contact-preference-email">Email</label>
                                </field-group>
                                <field-group>
                                    <input type="radio" name="contact-preference" id="waitlist-contact-preference-phone" data-conditional-control="true" value="phone" />
                                    <label for="waitlist-contact-preference-phone">Text Message</label>
                                </field-group>
                            </div>

                            <label for="waitlist__email" data-conditional-switch="contact-preference" data-conditional-value="email">Email</label>
                            <input type="email" name="email" id="waitlist__email" placeholder="john.smith@example.com" data-conditional-switch="contact-preference" data-conditional-value="email">

                            <label for="waitlist__phone" data-conditional-switch="contact-preference" data-conditional-value="phone">Mobile (eg. 780-111-2222)</label>
                            <input type="tel" name="phone" id="waitlist__phone" placeholder="780-111-2222 ( 10 digits )" data-conditional-switch="contact-preference" data-conditional-value="phone" minlength="10">

                            <field-group>
                                <input type="checkbox" id="waitlist-consent-checkbox" name="consent" required>
                                <label for="waitlist-consent-checkbox">I agree with and accept the <a class="link" href="privacy.html" target="_blank">Privacy Policy</a>.</label>
                            </field-group>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="button button--secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="button button--plus" id="waitlist-submit">Join Waitlist</button>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- #page -->

    <script>
		( function ( body ) {
			'use strict';
			body.className = body.className.replace( /\btribe-no-js\b/, 'tribe-js' );
		} )( document.body );
    </script>
    
    <script type='text/javascript' id='site_scripts-js-extra'>
/* <![CDATA[ */
var plglobals = {"session":""};
/* ]]> */
    </script>
    <script type='text/javascript' src='https://recoverycollegeedmonton.ca/wp-content/themes/cmha/assets/dist/bundles/base_script.js?ver=1.7' id='site_scripts-js'></script>
    <script type='text/javascript' id='ajax_scripts-js-extra'>
/* <![CDATA[ */
var ajaxscript = {"ajax_url":"https:\/\/recoverycollegeedmonton.ca\/wp-admin\/admin-ajax.php","home_url":"https:\/\/recoverycollegeedmonton.ca","theme_url":"https:\/\/recoverycollegeedmonton.ca\/wp-content\/themes\/cmha","checkout_url":"https:\/\/recoverycollegeedmonton.ca\/registration\/","nonce":"d15c160d0d"};
/* ]]> */
    </script>
    <script type='text/javascript' src='https://recoverycollegeedmonton.ca/wp-content/themes/cmha/assets/dist/bundles/ajax_script.js?ver=1.7' id='ajax_scripts-js'></script>
   

</body>
</html>
