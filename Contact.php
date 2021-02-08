<?php session_start();
	if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true)
	{
    	$LoginLogoutButton = '<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-18" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-18 nav-item"><a title="Logout" href="LoginRegistrationPages\logout.php" class="nav-link">Logout</a></li>';      
    }
    else
    {
        $LoginLogoutButton = '<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-18" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-18 nav-item"><a title="Login" href="LoginRegistrationPages\login.php" class="nav-link">Login</a></li>';                                        
    }                            
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

<!-- Files for Map -->
<link rel="stylesheet" type="text/css" href="./css/style.css" />
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAv8XwA0rtSsnA-xWMI6kjsR7OFuKXbrdc&callback=initMap&libraries=&v=weekly" defer ></script>
<script src="./js/index.js"></script>


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
<link rel="icon" href="images/png/cropped-RecoveryCollege_Favicon-192x192.png" sizes="192x192" />
<link rel="apple-touch-icon" href="images/png/cropped-RecoveryCollege_Favicon-180x180.png" />
<meta name="msapplication-TileImage" content="images/png/cropped-RecoveryCollege_Favicon-270x270.png" />
</head>



<body class="page-template-default page page-id-42 has-sitewide-banner tribe-no-js">

	<a class="sr-only sr-only-focusable skip-link" href="#skip-anchor">Skip to content</a>

	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PLHBZ39"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->

	<div id="page" class="site">
		<div id="content" class="site-content">
		
	<!-- Cart. Icon on the right of the page... need to tweak icon -->
    <div class="cart-button-outer">
        <div class="cart-button-quantity"></div>
        <button id="cart-toggle" class="button-cart" aria-label="Hide / Show Cart"></button>
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
                <a class="d-none" href="REGISTRATIONPAGEPLACEHOLDER" id="navigate-finalize-registration"></a>
                <button id="dismiss-cart" class="button button--secondary">Keep Browsing</button>
            </div>
        </div>
    </div>


<div id="site-menu" class="main-nav">	
	
	<!-- This banner refers to the top bar. can be used for news. in this case, it refers to online classes -->
	<div class="sitewide-banner" data-modified="1588200144">
		<div class="sitewide-banner-container">
			<h4>CMHA Recovery College classes are now being offered online.</h4><a href="COURSESONLINEPLACEHOLDER" class="button">Register here.</a>		</div>

		<i class="icon ion-md-close hide-banner"></i>
	</div>

	<div class="d-md-none">
		<div class="nav-trigger d-lg-none">
			<button class="menu-toggle button--primary" id="main-nav-toggle" aria-haspopup="true" aria-expanded="false"><span class="text">Menu</span> <span class="hamburger-bars"><span class="bar-helper"></span></span></button>
		</div>
		<div class="brand brand--mobile">
							<a href="https://recoverycollegeedmonton.ca" title="Recovery College Edmonton" aria-label="Recovery College Edmonton" tabindex="0">
					<img src="images/svg/RC_Edmonton_Logo.svg" alt="Recovery College Edmonton">
				</a>
					</div>
	</div>




	<div class="navigation-wrapper">
	<nav class="primary-nav">
		
<!-- Open source standard community schemas. Fine to use. can make the nav elements work much better -->
			<ul id="menu-main-menu" class="menu"><li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-22" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-22 nav-item"><a title="About Recovery College" href="ABOUTPAGEPLACEHOLDER" class="nav-link">About Recovery College</a></li>
<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-23" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children dropdown menu-item-23 nav-item"><a title="Find a Course" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle nav-link" id="menu-item-dropdown-23">Find a Course</a>
<ul class="dropdown-menu" aria-labelledby="menu-item-dropdown-23" role="menu">
	<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-24" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-24 nav-item"><a title="All Courses" href="COURSESALLPLACEHOLDER" class="dropdown-item">All Courses</a></li>
	<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-1994" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1994 nav-item"><a title="Online Classes" href="COURSESONLINEPLACEHOLDER" class="dropdown-item">Online Classes</a></li>
	<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-25" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-25 nav-item"><a title="Calendar" href="CALENDARPAGEPLACEHOLDER" class="dropdown-item">Calendar</a></li>
	<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-2175" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2175 nav-item"><a title="Private Courses" href="PRIVATECOURSEPLACEHOLDER" class="dropdown-item">Private Courses</a></li>
</ul>
</li>
</ul>		</nav>
		<div class="brand brand--desktop d-none d-md-block">
							<a href="https://recoverycollegeedmonton.ca" title="Recovery College Edmonton" aria-label="Recovery College Edmonton" tabindex="0">
					<img src="images/svg/RC_Edmonton_Logo.svg" alt="Recovery College Edmonton">
				</a>
					</div>

		<nav class="utility-nav">
			<div class="searchform-wrapper">
				<form class="searchform" method="get" action="https://recoverycollegeedmonton.ca/">
	<input type="text" name="s" aria-label="Site search" placeholder="What are you looking for?" />
	<button aria-labelledby="searchform--5f9a156bec145__label"><i class="ion ion-md-search"></i><span class="text" id="searchform--5f9a156bec145__label">Search</span></button>
</form>
				<button class="searchform-toggle" aria-label="Search the site"><i class="ion ion-md-search"></i></button>
			</div>
			<ul id="menu-utility-menu" class="menu"><li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-19" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-19 nav-item"><a title="News &amp; Updates" href="NEWSPLACEHOLDER" class="nav-link">News &#038; Updates</a></li>
<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-20" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-20 nav-item"><a title="Donate" target="_blank" href="DONATEPLACEHOLDER" class="nav-link">Donate</a></li>
<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-21" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-21 nav-item"><a title="FAQs" href="FAQPLACEHOLDER" class="nav-link">FAQs</a></li>
<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-18" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-18 nav-item"><a title="Contact" href="CONTACTPLACEHOLDER" class="nav-link">Contact</a></li>
<?php
															echo $LoginLogoutButton;
														?>
</ul>		</nav>
	</div>
</div>
		<div id="skip-anchor" tabindex="-1"></div>

		<div class="header header-simple">
    <div class="container">
        <div class="row">
            <div class="col-12">
                            <h1>
                        Contact                    </h1>                
            </div>
        </div>
    </div>
</div>

	<section class="intro">
		<div class="brush-stroke brush-stroke-top" style="background-image: url(images/svg/white-top.svg);"></div>
		<div class="container intro-container">
			<div class="row">
				<div class="col-12 col-md-6">
					<h2> Get in touch with us </h2>
				</div>
				<div class="col-12 col-md-6">
					<p><strong>Phone</strong> 780-414-6333 <br>
					<strong>Address</strong> 300, 10010-105 St NW, Edmonton, AB CA T5J 1C4<br>
					<strong>Email</strong> <a href="mailto:recoverycollege@cmha-edmonton.ab.ca">recoverycollege@cmha-edmonton.ab.ca</a></p>
				</div>
			</div>
		</div>
		<div class="brush-stroke brush-stroke-bottom" style="background-image: url(images/svg/white-top.svg);"></div>
		
	</section>

<style type="text/css">
.acf-map {
	width: 100%;
	height: 400px;
	border: #ccc solid 1px;
	margin: 20px 0;
}

/* fixes potential theme css conflict */
.acf-map img {
   max-width: inherit !important;
}
</style>


<!-- Map Section -->

<!--The div element for the map -->

 <section class="" id="contact-map">
    <!--The div element for the map -->
    <div class="container">
		<div class="row">
			<div id="map" class="acf-map">
            </div>
		</div>
	</div>
</section>

<!-- Contact Form Section -->
<section class="" id="contact-form-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="">Send Us a Message</h2>
            </div>
            <div class="contact-form col-12">
                                
                <div class='gf_browser_gecko gform_wrapper' id='gform_wrapper_2' ><form method='post' enctype='multipart/form-data'  id='gform_2'  action='/contact/'>
                        <div class='gform_body'><ul id='gform_fields_2' class='gform_fields top_label form_sublabel_below description_below'><li id='field_2_1'  class='gfield field_sublabel_below field_description_below gfield_visibility_visible' ><label class='gfield_label' for='input_2_1' >Name</label><div class='ginput_container ginput_container_text'><input name='input_1' id='input_2_1' type='text' value='' class='large'    placeholder='First and last name'  aria-invalid="false" /></div></li><li id='field_2_2'  class='gfield field_sublabel_below field_description_below gfield_visibility_visible' ><label class='gfield_label' for='input_2_2' >Email</label><div class='ginput_container ginput_container_email'>
                            <input name='input_2' id='input_2_2' type='text' value='' class='large'   placeholder='name@email.com'  aria-invalid="false" />
                        </div></li><li id='field_2_3'  class='gfield gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible' ><label class='gfield_label' for='input_2_3' >Message<span class='gfield_required'>*</span></label><div class='ginput_container ginput_container_textarea'><textarea name='input_3' id='input_2_3' class='textarea medium'    placeholder='What do you have questions about?' aria-required="true" aria-invalid="false"   rows='10' cols='50'></textarea></div></li><li id='field_2_4'  class='gfield field_sublabel_below field_description_below hidden_label gfield_visibility_visible' ><label class='gfield_label' for='input_2_4' ></label><div id='input_2_4' class='ginput_container ginput_recaptcha' data-sitekey='6LeAl7wUAAAAALVQpY_PsXKlRqf3wJ45MH5pPiZN'  data-theme='light' data-tabindex='-1' data-size='invisible' data-badge='bottomright'></div></li>
                            </ul></div>
        <div class='gform_footer top_label'> <button class='button gform_button' id='gform_submit_button_2'><div class="link">Submit</div></button> 
            <input type='hidden' class='gform_hidden' name='is_submit_2' value='1' />
            <input type='hidden' class='gform_hidden' name='gform_submit' value='2' />
            
            <input type='hidden' class='gform_hidden' name='gform_unique_id' value='' />
            <input type='hidden' class='gform_hidden' name='state_2' value='WyJbXSIsIjMzMjQ1MjJkMGRmYjE4NDdmY2Q2OGM5NjY4Zjg5OTNlIl0=' />
            <input type='hidden' class='gform_hidden' name='gform_target_page_number_2' id='gform_target_page_number_2' value='0' />
            <input type='hidden' class='gform_hidden' name='gform_source_page_number_2' id='gform_source_page_number_2' value='1' />
            <input type='hidden' name='gform_field_values' value='' />
            
        </div>
                        </form>
                        </div><script type='text/javascript'> jQuery(document).bind('gform_post_render', function(event, formId, currentPage){if(formId == 2) {if(typeof Placeholders != 'undefined'){
                        Placeholders.enable();
                    }} } );jQuery(document).bind('gform_post_conditional_logic', function(event, formId, fields, isInit){} );</script><script type='text/javascript'> jQuery(document).ready(function(){jQuery(document).trigger('gform_post_render', [2, 1]) } ); </script>            </div>
        </div>
    </div>
</section>

	
		
<!-- #content -->
	<!-- Sitewide pop-up -->
					<footer id="site-footer" class="footer" role="contentinfo">
		<div class="container footer-container">
			<div class="row">
				<div class="footer-newsletter col-12 col-md-4">					
				</div>
				<div class="footer-nav col-6 d-none d-md-block">
					<ul id="menu-footer-menu" class="menu"><li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-27" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children dropdown menu-item-27 nav-item"><a title="Find a Course" href="#" class="nav-link">Find a Course</a>
<ul  role="menu">
	<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-28" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-28 nav-item"><a title="All Courses" href="COURSESALLPLACEHOLDER" class="dropdown-item">All Courses</a></li>
	<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-29" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-29 nav-item"><a title="Calendar" href="CALENDARPAGEPLACEHOLDER" class="dropdown-item">Calendar</a></li>
</ul>
</li>
<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-31" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children dropdown menu-item-31 nav-item"><a title="Get Help" href="#" class="nav-link">Get Help</a>
<ul  role="menu">
	<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-32" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-32 nav-item"><a title="News &amp; Updates" href="NEWSPLACEHOLDER" class="dropdown-item">News &#038; Updates</a></li>
	<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-33" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-33 nav-item"><a title="FAQs" href="FAQPLACEHOLDER" class="dropdown-item">FAQs</a></li>
</ul>
</li>
<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-402" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-402 nav-item"><a title="Contact Us" href="#" class="nav-link">Contact Us</a><ul role="menu" aria-role="menu"><li class="nav-item" aria-role="menuitem">300, 10010-105 St NW<br/>Edmonton, AB T5J 1C4</li><li class="nav-item" aria-role="menuitem">780-414-6300</li></ul></li>
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
					<a href="https://edmonton.cmha.ca/" target="_blank">
					
					
					<!-- srcset appears to allow scalable images. I just dumped the same image -->				
					
						<img class="" srcset="images/svg/CMHA_AB_Edmonton_ENG_logo-1.svg 1w, images/svg/CMHA_AB_Edmonton_ENG_logo-1.svg 1w, images/svg/CMHA_AB_Edmonton_ENG_logo-1.svg 1w, images/svg/CMHA_AB_Edmonton_ENG_logo-1.svg 1w" src="images/svg/CMHA_AB_Edmonton_ENG_logo-1.svg" alt=""></a>
				</div>
				<div class="col-12 col-md-8 footer-social">
					<span class="title-5">Find Us</span>
					<ul class="footer-social-icons">
						<li>
							<a href="https://www.facebook.com/CMHAEdmonton/" target="_blank" rel="noopener" aria-label="Facebook">
								<span class="iconify" data-icon="ion-logo-facebook" data-inline="true"></span>
							</a>
						</li>						
						<li>
							<a href="https://twitter.com/CMHAEdmonton" target="_blank" rel="noopener" aria-label="Twitter">
								<span class="iconify" data-icon="ion-logo-twitter" data-inline="true"></span>
							</a>
						</li>
					</ul>
				</div>
			</div>

			<div class="footer-meta">
				<div class="row">

					<div class="col-12 col-sm-4 col-md-6">						
													<span class="footer-meta-item"><a href="PRIVACYPLACEHOLDER">Privacy Page</a></span>
							<span class="footer-meta-sep">|</span>						
													<span class="footer-meta-item"><a href="TERMSCONDITIONSPLACEHOLDER">Terms of Use</a></span>
							<span class="footer-meta-sep">|</span>						
													<span class="footer-meta-item"><a href="copyright-permissions.html">Copyright &amp; Permissions</a></span>	
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
                            <input type="radio" name="contact-preference" id="waitlist-contact-preference-email" data-conditional-control="true" value="email" checked="checked"/>
                            <label for="waitlist-contact-preference-email">Email</label>
                        </field-group>
                        <field-group>
                            <input type="radio" name="contact-preference" id="waitlist-contact-preference-phone" data-conditional-control="true" value="phone"/>
                            <label for="waitlist-contact-preference-phone">Text Message</label>
                        </field-group>
                    </div>
                    <label for="waitlist__email" data-conditional-switch="contact-preference" data-conditional-value="email">Email</label>
                    <input type="email" name="email" id="waitlist__email" placeholder="john.smith@example.com" data-conditional-switch="contact-preference" data-conditional-value="email">
                    <label for="waitlist__phone" data-conditional-switch="contact-preference" data-conditional-value="phone">Mobile (eg. 780-111-2222)</label>
                    <input type="tel" name="phone" id="waitlist__phone" placeholder="780-111-2222 ( 10 digits )" data-conditional-switch="contact-preference" data-conditional-value="phone" minlength="10">

                    <field-group>
                        <input type="checkbox" id="waitlist-consent-checkbox" name="consent" required>
                        <label for="waitlist-consent-checkbox">I agree with and accept the <a class="link" href="PRIVACYPLACEHOLDER" target="_blank">Privacy Policy</a>.</label>
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