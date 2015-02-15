<?php
/**
 * @package     Joomla.Site
 * @subpackage  Templates.opic
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


// <!-- Javascrit Core
// 		================================================== -->        
//         <script src="js/jquery-1.11.1.min.js"></script>
// 		<script src="js/bootstrap.min.js"></script>
// 		<script src="js/jquery.easing.1.3.js"></script>		
// 		<script src="js/jquery.isotope.min.js"></script>
//         <script src="js/jquery.flexisel.js"></script>
//         <script src="js/jquery.appear.js"></script>
//         <script src="js/jquery.lightbox.min.js"></script>
//         <script src="js/jquery.custom.js"></script>   
// 		<!-- Color -->
// 		<script type="text/javascript" src="js/color-panel.js"></script>	


// Add JavaScript Frameworks
//JHtml::_('bootstrap.framework');
//$doc->addScript('templates/' . $this->template . '/js/template.js');
$doc->addScript('templates/' . $this->template . '/js/jquery-1.11.1.min.js');
$doc->addScript('templates/' . $this->template . '/js/bootstrap.min.js');
$doc->addScript('templates/' . $this->template . '/js/jquery.easing.1.3.js');
$doc->addScript('templates/' . $this->template . '/js/jquery.isotope.min.js');
$doc->addScript('templates/' . $this->template . '/js/jquery.flexisel.js');
$doc->addScript('templates/' . $this->template . '/js/jquery.appear.js');
$doc->addScript('templates/' . $this->template . '/js/jquery.lightbox.min.js');
$doc->addScript('templates/' . $this->template . '/js/jquery.custom.js');
$doc->addScript('templates/' . $this->template . '/js/color-panel.js');
// $doc->addScript('templates/' . $this->template . '/js/jquery.superslides.js');
// $doc->addScript('templates/' . $this->template . '/js/jquery.flexslider.js');
// $doc->addScript('templates/' . $this->template . '/js/jquery.sticky.js');
// $doc->addScript('templates/' . $this->template . '/js/owl.carousel.js');
// $doc->addScript('templates/' . $this->template . '/js/jquery.isotope.js');
// $doc->addScript('templates/' . $this->template . '/js/jquery.mb.YTPlayer.js');
// $doc->addScript('templates/' . $this->template . '/js/jquery.fitvids.js');
//$doc->addScript('templates/' . $this->template . '/js/plugins.js');

// Add Stylesheets



//$doc->addStyleSheet('templates/' . $this->template . '/css/template.css');
$doc->addStyleSheet('templates/' . $this->template . '/css/reset.css');
$doc->addStyleSheet('templates/' . $this->template . '/css/animate.css');
$doc->addStyleSheet('templates/' . $this->template . '/css/bootstrap.css');
$doc->addStyleSheet('templates/' . $this->template . '/css/style.css');
$doc->addStyleSheet('templates/' . $this->template . '/fonts/font-awesome/css/font-awesome.min.css');
$doc->addStyleSheet('templates/' . $this->template . '/css/flaticon.css');
//$doc->addStyleSheet('templates/' . $this->template . '/css/owl.carousel.css');
$doc->addStyleSheet('templates/' . $this->template . '/css/prettyPhoto.css');
$doc->addStyleSheet('templates/' . $this->template . '/css/responsive.css');



// Load optional RTL Bootstrap CSS
JHtml::_('bootstrap.loadCss', false, $this->direction);



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
<html lang="en">
	<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <jdoc:include type="head" />
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/color-schemes/<?php echo $this->params->get('templateColor');?>.css" type="text/css"/>

        <link rel="icon" href="img/favicon.ico">
    
        <title>Opic! Flat One Page Responsive Template</title>
    
        <!-- Load CSS 
        ================================================== -->
        
        
        <!-- Google Fonts  
        ================================================== -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Lato:400,300italic,700,900' rel='stylesheet' type='text/css'>
    
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug
        ================================================== -->
        <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/ie10-viewport-bug-workaround.js"></script>
        
        <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/modernizr.js"></script>
    
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries
        ================================================== -->
        <!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
  	</head>
  	<body>
	
		<!-- Page Loader -->
		<div id="pageloader">
			<div class="loader-item fa fa-spin colored-border"></div>
		</div>
		
        <!-- Header Area Begins 
        ================================================== -->
		<header id="top">
			<div class="navbar navbar-default navbar-fixed-top" role="navigation">
				<div class="container no-container">
					<!-- Navbar Header -->
					<div class="navbar-header">
						<!-- Navbar Toogle -->
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<!-- Logo -->
						<a class="navbar-brand" href="#"><img src="images/logo.png" alt="Opic!" class="logo"></a>
					</div>
					<!-- Navbar Menu Section -->
					<div class="navbar-collapse collapse">
						
			
						<nav>
							<jdoc:include type="modules" name="mainnav" style="none" />

							<!--  <ul class="nav navbar-nav navbar-right">
								<li><a href="#top" class="scroll">Home</a></li>
								<li><a href="#services" class="scroll">Services</a></li>
								<li><a href="#projects" class="scroll">Works</a></li>
								<li><a href="#pricing" class="scroll">Pricing</a></li>
								<li><a href="#blog" class="scroll">Blog</a></li>
								<li><a href="#team" class="scroll">Team</a></li>
								<li><a href="#contact" class="scroll">Contact</a></li>
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">Extras</a>
									<span class="menu-toggler collapsed" data-toggle="collapse" data-target=".collapse-1">
										<i class="fa fa-angle-down"></i>
									</span>
								
									<ul role="menu" class="menulist dropdown-menu collapse-1 collapse">
										<li><a href="blog-leftsidebar.html">Blog - Left Sidebar</a></li>
										<li><a href="blog-rightsidebar.html">Blog - Right Sidebar</a></li>
										<li><a href="blog-single.html">Blog - Single</a></li>
										<li><a href="blog-grid.html">Blog - Grid</a></li>
										<li><a href="blog-timeline.html">Blog - Timeline</a></li>
										<li><a href="faq.html">Faq</a></li>
										<li class="bottom-menu"><a href="shortcodes.html">Shortcodes</a></li>
									</ul> 
								</li>
							</ul> -->
						</nav>
					</div><!-- Navbar Menu Section Ends -->
				</div>
			</div>
		</header><!-- Header Ends -->
		
		
        <!-- Slider Area
        ================================================== -->
		<div id="#carousel-slider" class="carousel-slider carousel-slider-home">
        Slider Module
			<jdoc:include type="modules" name="slider" style="xhtml" />
		</div><!-- Slider Ends -->

  
		<!-- Services Area
		================================================== -->
		<section id="services"> 		  
			<div class="container">
				<div class="row">
				SERVICE MODULE
				<jdoc:include type="modules" name="service" style="xhtml" />
					<!-- end col-md-12 -->
			  
					<!-- CMS Website Services -->
					<!-- end col-md-12 -->
								
					<!-- E-Commerse Website Services -->
					<!-- end col-md-12 -->
				
				
					<!-- HTML Website Services -->
					<!-- end col-md-12 -->
				
				</div><!-- end row -->			  
			</div><!-- end container -->		  
		</section><!-- end services -->
		
  
		<!-- Project Area
		================================================== -->
		<section id="projects" class="bg-blue">	  
			<div class="container">
			WORKS MOdule
				<div class="row">							  
					<jdoc:include type="modules" name="portfolio_content" style="xhtml" />
				</div>
					
				<!-- Portfolio Filter Begins -->
				
						
				<!-- Portfolio Container Begins -->
				<!-- end portfolioContainer -->	 
			</div><!-- end container -->			
		</section><!-- end projects -->
  
  
		<!-- Fun Fact Area
		================================================== -->
		<section id="facts" class="bg-dark-blue">  
	  
			<div class="container">
            
				<div class="row">
                OUR SPACE MODULE
                <jdoc:include type="modules" name="fact_content" style="xhtml" />
		  			<!-- Fun Fact Box 1 -->
					
					<!-- Fun Fact Box 2 -->
					
					<!-- Fun Fact Box 3 -->
					
					<!-- Fun Fact Box 4 -->
							  
				</div><!-- end row -->   
			</div><!-- end container -->		
		</section>
  
		<!-- Pricing Area
		================================================== -->
		<section id="pricing">
			<div class="container">
				<div class="row">		  
					OUR PRICE MODULE
					  <jdoc:include type="modules" name="price_content" style="xhtml" />
					<!-- end col-md-12 -->
			  
			  		<!-- Pricing Inner -->
					<!-- end col-md-12 -->	
									
				</div><!-- end row -->
			</div><!-- end container -->		
		</section>
  
		<!-- Blog Area
		================================================== -->
		<section id="blog" class="bg-red">
	  
			<div class="container">
				<div class="row">
		  BLOG MODULE
		  			 <jdoc:include type="modules" name="blog" style="xhtml" />
					<!-- end col-md-12 -->
			
					<!-- end col-md-12 -->
					
					<!-- Blog Bottom Begins -->
					<!-- Blog Bottom Ends -->
					
					<!-- Load More Post Button -->
					<!-- Load More Button Ends -->			
			
				</div><!-- end row -->
			</div><!-- end container -->
		  
		</section>
  
		<!-- Newsletter Area
		================================================== -->
		<section id="newsletter" class="bg-yellow">
			<form name="newsletter" action="#" method="post" class="animated" data-animation="zoomIn" data-animation-delay="300">
				<input type="text" placeholder="Enter your email address here to subscribe our update, and press Enter!">
			</form>
		</section>
  
		<!-- About Us And Team Area
		================================================== -->
		<section id="team">
  
			<div class="container">
				<div class="row">
                TEAM UPPER MODULE
                 <jdoc:include type="modules" name="team_upper" style="xhtml" />
      
					
        
				</div><!-- end row -->
			</div><!-- end container -->
   
			<!-- team start -->    
			 TEAM  MODULE
			 <jdoc:include type="modules" name="team_content" style="xhtml" />
		
			<!-- team are end -->
			<div class="clearfix"></div>
    
		</section>  
  
		<!-- Contact Us Area
		================================================== -->
		<section id="contact">
	  
			<div class="container">
				<div class="row">
		  
					<div class="col-md-12">   
                    CONTACT US UPPER MODULE     
						<jdoc:include type="modules" name="contactform_upper" style="xhtml" />
			   		
					</div><!-- end col-md-12 -->
			
					<div class="col-md-12">
						<div class="col-md-6 animated" data-animation="fadeIn" data-animation-delay="300">
                        	CONTACT FORM left MODULE
							<jdoc:include type="modules" name="contactform_upper" style="xhtml" />
						</div><!-- end col-md-6-->
			  
						<div id="contacInfo" class="col-md-6">
			  				CONTACT FORM RIGHT  MODULE
							<jdoc:include type="modules" name="contactform_upper" style="xhtml" />
						</div><!-- end col-md-6-->
			  
					</div><!-- end col-md-12 -->
			
				</div><!-- end row -->
			</div><!-- end container -->
	   
		</section>
        <!-- Component area  -->
		
		
		<!-- Blog Area
		================================================== -->
		<section id="blog" class="blog-rightsidebar">
	  
			<div class="container">
				<div class="row">
		  
				COMPONENT AREA
				<!-- Begin Content -->
					<jdoc:include type="message" />
					<jdoc:include type="component" />
					<!-- End Content -->
			
				</div><!-- end row -->
			</div><!-- end container -->		  
		</section>
		<!-- Component area End -->
	  
		<!-- Socials Area
		================================================== -->
		<section id="socials" class="bg-dark-blue">
	  
			<div class="container">
				<div class="row">
					<div class="col-md-12">
                    FOOTER SOCIAL MODULE
				
						
				
					</div><!-- end col-md-12 -->
				</div><!-- end row -->
			</div><!-- end container -->
		
		</section>
	  
		<!-- Client Area
		================================================== -->
		<section id="clients" class="bg-very-dark-blue">
		
			<div class="container">
				<div class="row">
					<div class="col-md-12">	
                    FOOTER TOP CLIENT MODULE			
						
					</div>
				</div><!-- end row -->
			</div><!-- end container -->
				
		</section>
	  
		<!-- Copyright Area
		================================================== -->
		<section id="copyright" class="bg-cyan">
			<div class="container">
				<div class="row">
					<div class="col-md-12"> 
                    	FOOTER        
						        
					</div>
				</div>
			</div>	
		</section>    
		
		<!-- Color Switcher 
		================================================== -->
		<!-- <section id="theme-panel" class="close-theme-panel">
			
			<a class="panel-button dark"><i class="fa fa-dot-circle-o"></i></a>
			<div class="segment">
				<h4 class="dark condensed semibold uppercase no-margin no-padding">Color Switcher</h4>
			</div>		
			
			<div class="segment">			
				<a title="green" class="switcher green-bg">
					<div class="devider">
						<div class="devider-round-out devider-round-out-green">
							<div class="devider-round-in devider-round-in-green"></div>
						</div>
					</div>
				</a>
				<a title="blue" class="switcher blue-bg">
					<div class="devider">
						<div class="devider-round-out devider-round-out-blue-bg">
							<div class="devider-round-in devider-round-in-blue-bg"></div>
						</div>
					</div>	
				</a>
				<a title="orange" class="switcher orange-bg">
					<div class="devider">
						<div class="devider-round-out devider-round-out-orange-bg">
							<div class="devider-round-in devider-round-in-orange-bg"></div>
						</div>
					</div>
				</a>
				<a title="purple" class="switcher purple-bg">
					<div class="devider">
						<div class="devider-round-out devider-round-out-purple-bg">
							<div class="devider-round-in devider-round-in-purple-bg"></div>
						</div>
					</div>
				</a>
				<a title="red" class="switcher red-bg">
					<div class="devider">
						<div class="devider-round-out devider-round-out-red-bg">
							<div class="devider-round-in devider-round-in-red-bg"></div>
						</div>
					</div>	
				</a>
				<a title="s-green" class="switcher s-green-bg">
					<div class="devider">
						<div class="devider-round-out devider-round-out-s-green-bg">
							<div class="devider-round-in devider-round-in-s-green-bg"></div>
						</div>
					</div>	
				</a>
				<a title="s-blue" class="switcher s-blue-bg">
					<div class="devider">
						<div class="devider-round-out devider-round-out-s-blue-bg">
							<div class="devider-round-in devider-round-in-s-blue-bg"></div>
						</div>
					</div>
				</a>
				<a title="p-green" class="switcher p-green-bg">
					<div class="devider">
						<div class="devider-round-out devider-round-out-p-green-bg">
							<div class="devider-round-in devider-round-in-p-green-bg"></div>
						</div>
					</div>
				</a>
			</div>
		</section> --><!-- End Color Switcher --> 

			
	</body>
</html>
