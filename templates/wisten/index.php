<?php
/**
 * @package     Joomla.Site
 * @subpackage  Templates.protostar
 *
 * @copyright   Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

$app             = JFactory::getApplication();
$doc             = JFactory::getDocument();
$user            = JFactory::getUser();
$this->language  = $doc->language;
$this->direction = $doc->direction;

// Getting params from template
$params = $app->getTemplate(true)->params;

// Detecting Active Variables
$option   = $app->input->getCmd('option', '');
$view     = $app->input->getCmd('view', '');
$layout   = $app->input->getCmd('layout', '');
$task     = $app->input->getCmd('task', '');
$itemid   = $app->input->getCmd('Itemid', '');
$sitename = $app->get('sitename');

if($task == "edit" || $layout == "form" )
{
	$fullWidth = 1;
}
else
{
	$fullWidth = 0;
}

// Add JavaScript Frameworks
//JHtml::_('bootstrap.framework');
//$doc->addScript('templates/' . $this->template . '/js/template.js');
$doc->addScript('templates/' . $this->template . '/js/jquery-1.10.2.min.js');
$doc->addScript('templates/' . $this->template . '/js/bootstrap.js');
$doc->addScript('templates/' . $this->template . '/js/jquery.appear.js');
$doc->addScript('templates/' . $this->template . '/js/waypoints.min.js');
$doc->addScript('templates/' . $this->template . '/js/jquery.prettyPhoto.js');
$doc->addScript('templates/' . $this->template . '/js/modernizr-latest.js');
$doc->addScript('templates/' . $this->template . '/js/SmoothScroll.js');
$doc->addScript('templates/' . $this->template . '/js/jquery.parallax-1.1.3.js');
$doc->addScript('templates/' . $this->template . '/js/jquery.easing.1.3.js');
$doc->addScript('templates/' . $this->template . '/js/jquery.superslides.js');
$doc->addScript('templates/' . $this->template . '/js/jquery.flexslider.js');
$doc->addScript('templates/' . $this->template . '/js/jquery.sticky.js');
$doc->addScript('templates/' . $this->template . '/js/owl.carousel.js');
$doc->addScript('templates/' . $this->template . '/js/jquery.isotope.js');
$doc->addScript('templates/' . $this->template . '/js/jquery.mb.YTPlayer.js');
$doc->addScript('templates/' . $this->template . '/js/jquery.fitvids.js');
//$doc->addScript('templates/' . $this->template . '/js/plugins.js');







// Add Stylesheets
//$doc->addStyleSheet('templates/' . $this->template . '/css/template.css');
$doc->addStyleSheet('templates/' . $this->template . '/css/animate.min.css');
$doc->addStyleSheet('templates/' . $this->template . '/css/bootstrap.css');
$doc->addStyleSheet('templates/' . $this->template . '/css/style.css');
$doc->addStyleSheet('templates/' . $this->template . '/css/flexslider.css');
$doc->addStyleSheet('templates/' . $this->template . '/css/font-awesome.css');
//$doc->addStyleSheet('templates/' . $this->template . '/css/owl.carousel.css');
$doc->addStyleSheet('templates/' . $this->template . '/css/prettyPhoto.css');
$doc->addStyleSheet('templates/' . $this->template . '/css/responsive.css');
$doc->addStyleSheet('templates/' . $this->template . '/css/custom.css');


// Load optional RTL Bootstrap CSS
JHtml::_('bootstrap.loadCss', false, $this->direction);

// Adjusting content width
if ($this->countModules('position-7') && $this->countModules('position-8'))
{
	$span = "inner box_blog";
}
elseif ($this->countModules('position-7') && !$this->countModules('position-8'))
{
	$span = "inner blog1 left";
}
elseif (!$this->countModules('position-7') && $this->countModules('position-8'))
{
	$span = "inner blog1 right";
}
else
{
	$span = "inner wide_blog";
}

// Logo file or site title param
if ($this->params->get('logoFile'))
{
	$logo = '<img src="' . JUri::root() . $this->params->get('logoFile') . '" alt="' . $sitename . '" />';
}
elseif ($this->params->get('sitetitle'))
{
	$logo = '<span class="site-title" title="' . $sitename . '">' . htmlspecialchars($this->params->get('sitetitle')) . '</span>';
}
else
{
	$logo = '<span class="site-title" title="' . $sitename . '">' . $sitename . '</span>';
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
<head>

	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
	
	<style type="text/stylesheet">
		@-webkit-viewport   { width: device-width; }
		@-moz-viewport      { width: device-width; }
		@-ms-viewport       { width: device-width; }
		@-o-viewport        { width: device-width; }
		@viewport           { width: device-width; }
	</style>
	<script type="text/javascript">
		//<![CDATA[
		if (navigator.userAgent.match(/IEMobile\/10\.0/)) {
			var msViewportStyle = document.createElement("style");
			msViewportStyle.appendChild(
				document.createTextNode("@-ms-viewport{width:auto!important}")
			);
			document.getElementsByTagName("head")[0].appendChild(msViewportStyle);
		}
		//]]>
	</script>

<meta name="HandheldFriendly" content="true"/>
<meta name="apple-mobile-web-app-capable" content="YES"/>
<jdoc:include type="head" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/colors/<?php echo $this->params->get('templateColor');?>.css" type="text/css"/>
	

	<!--[if lt IE 9]>
		<script src="<?php echo $this->baseurl; ?>/media/jui/js/html5.js"></script>
	<![endif]-->
</head>

<body data-spy="scroll" data-target=".nav-menu" data-offset="50" style="background:<?php echo $this->params->get('templateBackgroundColor');?>">
<!-- Body -->
		<?php 
		$loderimg="";
		if(($params->get('loderimg'))!=null){
            $loderimg= $params->get('loderimg');}
		?>
		<?php if ($loderimg!="") { ?>
		<div id="pageloader">   
            <div class="loader-item">
				<img src="<?php echo $this->params->get('loderimg');?>" alt="loader">
            </div>
        </div>
		<?php } ?>

<!-- Home Section -->
	<section id="home" class="">
	
	<!--------- Top menu and bottom Slider---------->
	<?php if ($this->countModules('topbar')) : ?>
		<section id="pagetop" class="contain">
			<div class="inner pagetop">
				<jdoc:include type="modules" name="topbar" style="xhtml" />
			<div class="clear"></div>
			</div>
		</section>
	<?php endif; ?>
		
	<?php if ($this->countModules('slider_top')) : ?>
	<!------Bottom Menu and Top Slider------>
	<section id="slider" class="contain">
			<jdoc:include type="modules" name="slider_top" style="xhtml" />
	</section>
	<?php endif; ?>
	

		
	<!-- Navigation Section -->
	<section id="navigation" class="shadow">
	
		<div class="inner navigation">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					    </button>
			<!-- Logo Img -->
			<div class="logo">
			<a class="scroll" href="<?php echo $this->baseurl; ?>">
						<?php echo $logo; ?>
						<?php if ($this->params->get('sitedescription')) : ?>
							<?php echo '<div class="site-description">' . htmlspecialchars($this->params->get('sitedescription')) . '</div>'; ?>
						<?php endif; ?>
					</a>
				
			</div>
			
			<!-- Nav Menu -->
			<div class="collapse navbar-collapse" id="main-nav">
			<?php if ($this->countModules('mainnav')) : ?>
			<div class="nav-menu">
				<jdoc:include type="modules" name="mainnav" style="none" />
			</div>
			<?php endif; ?>
			</div>
		</div>
	
	</section>
	<!-- End Navigation Section -->
	
	<!-- Rev Slider -->
		<?php if ($this->countModules('slider')) : ?>
		<section id="slider" class="contain">
			<jdoc:include type="modules" name="slider" style="xhtml" />
		</section>
		<?php endif; ?>
		<!-- End Rev Slider -->
		
		<!-- Text Area -->
		<?php if ($this->countModules('slider_bottom')) : ?>
		<section id="text-area">
			<div class="inner text-area">
			    <jdoc:include type="modules" name="slider_bottom" style="xhtml" />
			</div>
		</section>
		<?php endif; ?>
		<!-- End Rev Slider -->
	
	</section>
	<!-- End Home Section -->
	
	
	<!-- About Section -->
	<?php if ($this->countModules('about_content') || $this->countModules('about_bottom')) : ?>
	<section id="about" class="contain ">
		
		<?php if ($this->countModules('about_content')) : ?>
		<div class="about inner">
			<jdoc:include type="modules" name="about_content" style="xhtml" />
			<div class="clear"></div>	
		</div><!-- End Inner div -->
		<?php endif; ?>
		
		<!-- About Extended -->
		<?php if ($this->countModules('about_bottom')) : ?>
		<div class="full-width no-padding ">
			<jdoc:include type="modules" name="about_bottom" style="xhtml" />
		</div>
		<?php endif; ?>
		
		
	</section><!-- End About Section -->
		<?php endif; ?>
	
	
	<!-- Features Section -->
	<?php if ($this->countModules('features_content')) : ?>
	<section id="features" class="contain ">
		
		<!-- Features Top Icon -->
		<div class="contain-logo">
			<i class="fa fa-check-circle-o "></i>
		</div>
		
		<div class="inner">
			<jdoc:include type="modules" name="features_content" style="xhtml" />
			<div class="clear"></div>
		</div><!-- End Inner div -->
		
	</section><!-- End Features Section -->
	<?php endif; ?>
	
		<!-- Testimonials Section -->
	<?php if ($this->countModules('testimonial_content')) : ?>
	<section id="testimonial" class="contain parallax4">


		<!-- Testimonials Top Icon -->
		<div class="contain-logo">
			<i class="fa fa-comments "></i>
		</div>

		<!-- Testimonials Inner -->
		<div class="inner testimonial">

			<!-- Testimonials Slides -->
			<div class="testimonials">
			<jdoc:include type="modules" name="testimonial_content" style="xhtml" />
				<div class="clear"></div>
			</div>

		</div>


	</section>
	<!-- End Testimonials Section -->
	<div class="clear"></div>
	<?php endif; ?>
	
	<!-- Skills Section -->
	<?php if ($this->countModules('tab_content') || $this->countModules('progress_content')) : ?>
	<section id="skills" class="contain">

			<div class="inner skills">
			
			<!-- Features Top Icon -->
				<div class="contain-logo br">
					<i class="fa fa-rocket "></i>
				</div>
				
	<?php if ($this->countModules('tab_content')) : ?>
			<div class="tabs">
				<jdoc:include type="modules" name="tab_content" style="xhtml" />
			</div>
		<?php endif; ?>
						<!-- Tabs -->
					
				<?php if ($this->countModules('progress_content')) : ?>
					<!-- Skills -->
					<div class="Progress-bars">
							<jdoc:include type="modules" name="progress_content" style="xhtml" />
					</div>
				<?php endif; ?>
					<div class="clear"></div>
			</div><!-- End Inner div -->
	
	</section><!-- End Skills Section -->
	<?php endif; ?>
	
	
	<!-- History Section -->
	<?php if ($this->countModules('timeline_content')) : ?>
	<section id="history" class="contain parallax1 ">
		
			<div class="inner">
			
				<!-- History Top Icon -->
				<div class="contain-logo br">
					<i class="fa fa-clock-o "></i>
				</div>
			
				
				<jdoc:include type="modules" name="timeline_content" style="xhtml" />
					
			</div><!-- End inner div -->
			
	</section><!-- End History Section -->
	<?php endif; ?>
	
	<?php if ($this->countModules('team_content')) : ?>
	<section id="team" class="contain ">
				<jdoc:include type="modules" name="team_content" style="xhtml" />
	</section>
	<?php endif; ?>
	
	
	
	<?php if ($this->countModules('accordion_content')) : ?>
	<section id="why-wisten" class="contain parallax">
		
			<div class="inner">
			
				<!-- why-wisten Top Icon -->
				<div class="contain-logo br">
					<i class="fa fa-briefcase "></i>
				</div>
				
				<jdoc:include type="modules" name="accordion_content" style="xhtml" />
				<!-- Iphone images -->
				
				<div class="clear"></div>
			</div>	
	
	</section>
	<?php endif; ?>
	
	
	
	<?php if ($this->countModules('portfolio_content')) : ?>
	<section id="portfolio" class="contain ">
		
			<div class="inner">
			
				<!-- Portfolio Top Icon -->
				<div class="contain-logo br">
					<i class="fa fa-desktop "></i>
				</div>
			<div class="works">
				<jdoc:include type="modules" name="portfolio_content" style="xhtml" />
			</div>
			</div>
	</section>
	<?php endif; ?>
	
	<?php if ($this->countModules('portfolio_fullwidth_content')) : ?>
	<section id="portfolio" class="contain ">
			<!-- Portfolio Top Icon -->
				<div class="contain-logo br">
					<i class="fa fa-desktop "></i>
				</div>
			<div class="works">
				<jdoc:include type="modules" name="portfolio_fullwidth_content" style="xhtml" />
			</div>
	</section>
	<?php endif; ?>
	
	<?php if ($this->countModules('service_content') || $this->countModules('service_bottom')) : ?>
	<section id="services" class="contain ">
		<?php if ($this->countModules('service_content')) : ?>
		<div class="services bg parallax2">
			<div class="inner services">
			
				<!-- why-wisten Top Icon -->
				<div class="contain-logo br">
					<i class="fa fa-cogs "></i>
				</div>
			
					<jdoc:include type="modules" name="service_content" style="xhtml" />
				<div class="clear"></div>
				
				
			</div><!-- End Services Inner 1 -->
			
		</div><!-- End Services BG -->
		<?php endif; ?>
			<?php if ($this->countModules('service_bottom')) : ?>
			<div class="inner services bottom-bg">
				<jdoc:include type="modules" name="service_bottom" style="xhtml" />
			</div><!-- End Services Inner 2 -->
			<?php endif; ?>
			
	</section>	<!-- End Services Section -->
	<?php endif; ?>
	
	
	
	<?php if ($this->countModules('video_content')) : ?>
	<section id="video" class="contain">
	
			<!-- Video Top Icon -->
			<div class="contain-logo video-logo">
				<i class="fa fa-youtube-play "></i>
			</div>
			
			<div class="video-pattern">
				<div class="video-text"></div>
			</div>
			
				<jdoc:include type="modules" name="video_content" style="xhtml" />
			
	</section>
	<?php endif; ?>
	
	<?php if ($this->countModules('price_content')) : ?>
	<section id="prices" class="contain ">
		
			<div class="inner prices">
			
				<!-- History Top Icon -->
				<div class="contain-logo br">
					<i class="fa fa-table "></i>
				</div>
				<jdoc:include type="modules" name="price_content" style="xhtml" />
				<div class="clear"></div>
			</div>
	</section>
	<?php endif; ?>
	
	
	
	<!-- Subscribe Section -->
	<?php if ($this->countModules('subscribe_content')):?>
	<section id="subscribe" class="contain">
			
			<div class="inner subscribe">
			
					<!--Subscribe Left -->
					
					
					<!--Subscribe Right -->
					
						<jdoc:include type="modules" name="subscribe_content" style="xhtml" />
					
					
					<div class="clear"></div>
			</div><!-- End Subscribe inner -->
	
	</section><!-- End Subscribe Section -->
	<?php endif; ?>
	
	<!--Contact Section -->
	<?php if ($this->countModules('contactform_content')):?>
	<section id="contact" class="contain ">
				
			
				<!--Contact Form -->
				<div class="contact-form">			
						<jdoc:include type="modules" name="contactform_content" style="xhtml" />
				</div><!-- End Contact Form -->
			
				<!-- Contact Top Icon -->
				<div class="contain-logo contact-logo">
					<i class="fa fa-map-marker "></i>
				</div>
				
			<!-- Google Map -->
			<div id="map"></div>
			<!-- End Google Map -->
			
	</section><!-- End Contact Section -->
	<?php endif; ?>
	
	
	<section id="blog" class="contain">
	
		<div class="inner">
		<?php if ($this->countModules('blog_title')) : ?>
			<jdoc:include type="modules" name="blog_title" style="xhtml" />
		<?php endif; ?>
			
		
			<div class="row-fluid">
				<?php if ($this->countModules('position-8')) : ?>
				<div class="sidebar inner left">
					<!-- Begin Sidebar -->
					<jdoc:include type="modules" name="position-8" style="xhtml" />
				</div>
					<!-- End Sidebar -->
				<?php endif; ?>
				<main id="content" role="main" class="<?php echo $span; ?>">
					<!-- Begin Content -->
					<jdoc:include type="message" />
					<jdoc:include type="component" />
					<!-- End Content -->
				</main>
				<?php if ($this->countModules('position-7')) : ?>
				<div class="sidebar right">
						<!-- Begin Right Sidebar -->
					<jdoc:include type="modules" name="position-7" style="xhtml" />
						<!-- End Right Sidebar -->
				</div>
				<?php endif; ?>
			</div>
		<div class="clear"></div>
		</div>
	
	</section>
	
<!-- Footer Section -->
<?php if ($this->countModules('footer_1') || $this->countModules('footer_2') || $this->countModules('footer_3')) : ?>
	<section id="footer">
	
		<div class="inner footer">
		
			<!-- Phone -->
			<?php if ($this->countModules('footer_1')):?>
			<div class="col-xs-4 footer-box animated" data-animation="flipInY" data-animation-delay="0">
				<jdoc:include type="modules" name="footer_1" style="xhtml" />
			</div>
			<?php endif; ?>
			
			<!-- Socials and Mail -->
			<?php if ($this->countModules('footer_2')):?>
			<div class="col-xs-4 footer-box animated" data-animation="flipInY" data-animation-delay="0">
				
				<jdoc:include type="modules" name="footer_2" style="xhtml" />
				
				
			</div>
			<?php endif; ?>
			
			
			<!-- Adress -->
			<?php if ($this->countModules('footer_3')):?>
			<div class="col-xs-4 footer-box animated" data-animation="flipInY" data-animation-delay="0">
				<jdoc:include type="modules" name="footer_3" style="xhtml" />
			</div>
			<?php endif; ?>
			<div class="clear"></div>
			
			<!-- Copyright -->
				<p class="footer-text copyright">
					&copy; <?php echo date('Y'); ?> <?php echo $sitename; ?>. All rights reserved.
				</p>
		</div> <!-- End Footer inner -->
		
	</section><!-- End Footer Section -->
	<?php endif; ?>
<section id="back-top">
		<a href="#home" class="scroll"></a>
</section>
	

	
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/plugins.js"></script>	
<script>
if (typeof jQuery != 'undefined' && typeof MooTools != 'undefined' ) { 
// both present , kill jquery slide for carousel class
(function($) { 
       $(document).ready(function(){
        $('.carousel').each(function(index, element) {
                $(this)[index].slide = null;
               });
         });
 })(jQuery);
}
</script>
<script>
jQuery(document).ready(function($) {
		'use strict';
		jQuery(".slide-boxes").owlCarousel();
    });

/*========================= 
Responsive Menu Script
=============================*/
function close_toggle() {
if (jQuery(window).width() <= 930) {

  jQuery('.navbar-collapse a').on('click', function(){
 
      jQuery('.navbar-collapse').collapse('hide');
  });
}
else {
 jQuery('.navbar .navbar-default a').off('click');
}
}
close_toggle();

jQuery(window).resize(close_toggle); 

jQuery(".navbar-collapse").css({ maxHeight: $(window).height() - $(".navbar-header").height() + "px" });

/* ==============================================
Video Script
=============================================== */

jQuery(function(){
            jQuery(".player").mb_YTPlayer();
		});	
		
</script>
</body>
</html>
