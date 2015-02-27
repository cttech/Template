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

// 		<!-- Color -->
// 		<script type="text/javascript" src="js/color-panel.js"></script>	


// Add JavaScript Frameworks
//JHtml::_('bootstrap.framework');

$doc->addScript('templates/' . $this->template . '/js/jquery-1.11.1.min.js');
$doc->addScript('templates/' . $this->template . '/js/bootstrap.min.js');
$doc->addScript('templates/' . $this->template . '/js/jquery.easing.1.3.js');
$doc->addScript('templates/' . $this->template . '/js/jquery.isotope.min.js');
$doc->addScript('templates/' . $this->template . '/js/blog/jquery.flexslider-min.js');
$doc->addScript('templates/' . $this->template . '/js/jquery.flexisel.js');
$doc->addScript('templates/' . $this->template . '/js/jquery.appear.js');
$doc->addScript('templates/' . $this->template . '/js/jquery.prettyPhoto.js');
$doc->addScript('templates/' . $this->template . '/js/jquery.lightbox.min.js');
$doc->addScript('templates/' . $this->template . '/js/jquery.custom.js');
$doc->addScript('templates/' . $this->template . '/js/color-panel.js');



// Add Stylesheets



$doc->addStyleSheet('templates/' . $this->template . '/css/reset.css');
$doc->addStyleSheet('templates/' . $this->template . '/css/animate.css');
$doc->addStyleSheet('templates/' . $this->template . '/css/bootstrap.css');
$doc->addStyleSheet('templates/' . $this->template . '/css/isotope.css');
$doc->addStyleSheet('templates/' . $this->template . '/css/blog/flexslider.css');
$doc->addStyleSheet('templates/' . $this->template . '/css/style.css');
$doc->addStyleSheet('templates/' . $this->template . '/fonts/font-awesome/css/font-awesome.min.css');
$doc->addStyleSheet('templates/' . $this->template . '/css/flaticon.css');
$doc->addStyleSheet('templates/' . $this->template . '/css/prettyPhoto.css');
$doc->addStyleSheet('templates/' . $this->template . '/css/responsive.css');



// Load optional RTL Bootstrap CSS
JHtml::_('bootstrap.loadCss', false, $this->direction);



// Logo file or site title param
if ($this->params->get('logoFile'))
{
	$logo = '<img src="' . JUri::root() . $this->params->get('logoFile') . '" alt="' . $sitename . '" />';
	//echo $logo;
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
		<?php 
		$loderimg="";
		if(($params->get('loderimg'))!=null){
            $loderimg= $params->get('loderimg');}
		?>
		<?php if ($loderimg!="") { ?>
		<div id="pageloader">   
            <div class="loader-item fa fa-spin colored-border">
				<img src="<?php echo $this->params->get('loderimg');?>" alt="loader">
            </div>
        </div>
		<?php } else { ?>


		<div id="pageloader">
			<div class="loader-item fa fa-spin colored-border"></div>
		</div>
		<?php } ?>
        <!-- Header Area Begins 
        ================================================== -->
        <div id="sticky-section" class="sticky-navigation">
			<div class="top-container">
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
						<a class="navbar-brand" href="<?php echo $this->baseurl; ?>"><?php echo $logo; ?></a>
					</div>
					<!-- Navbar Menu Section -->
					<div class="navbar-collapse collapse">
						
					<?php if ($this->countModules('mainnav')) : ?>
						<nav>
							<jdoc:include type="modules" name="mainnav" style="none" />
						</nav>
					<?php endif ?>
					</div><!-- Navbar Menu Section Ends -->
				</div>
			</div>
		</header><!-- Header Ends -->
	</div>
</div>
		
		
        <!-- Slider Area
        ================================================== -->
        <?php if ($this->countModules('slider')) : ?>
		<div id="#carousel-slider" class="carousel-slider carousel-slider-home">
     
			<jdoc:include type="modules" name="slider" style="xhtml" />
		</div><!-- Slider Ends -->
		<?php endif ?>
  
		<!-- Services Area
		================================================== -->
		<?php if ($this->countModules('service')) : ?>
		<section id="services"> 		  
			<div class="container">
				<div class="row">
					<jdoc:include type="modules" name="service" style="xhtml" />
				</div><!-- end row -->			  
			</div><!-- end container -->		  
		</section><!-- end services -->
		<?php endif ?>
  
		<!-- Project Area
		================================================== -->
		<?php if ($this->countModules('portfolio_content')) : ?>
		<section id="projects" class="bg-blue">	  
			<div class="container">
			
				<div class="row">							  
				<jdoc:include type="modules" name="portfolio_content" style="xhtml" />	
				</div>
			
			</div><!-- end container -->			
		</section><!-- end projects -->
  		<?php endif ?>
  
		<!-- Fun Fact Area
		================================================== -->
		<?php if ($this->countModules('fact_content')) : ?>
		<section id="facts" class="bg-dark-blue">  
	  
			<div class="container">
            
				<div class="row">
               		<jdoc:include type="modules" name="fact_content" style="xhtml" />
		  		</div><!-- end row -->   
			</div><!-- end container -->		
		</section>
  		<?php endif ?>
		<!-- Pricing Area
		================================================== -->
		<?php if ($this->countModules('price_content')) : ?>
		<section id="pricing">
			<div class="container">
				<div class="row">		  
				
					  <jdoc:include type="modules" name="price_content" style="none" />
					
									
				</div><!-- end row -->
			</div><!-- end container -->		
		</section>
  		<?php endif ?>
		<!-- Blog Area
		================================================== -->
		<?php if ($this->countModules('blog')) : ?>
		<section id="blog" class="bg-red">
	  
			<div class="container">
				<div class="row">
	
		  			 <jdoc:include type="modules" name="blog" style="xhtml" />
						
			
				</div><!-- end row -->
			</div><!-- end container -->
		  
		</section>
  		<?php endif ?>
		<!-- Newsletter Area
		================================================== -->
		<?php if ($this->countModules('newsletter')) : ?>
		<section id="newsletter" class="bg-yellow">
			 <jdoc:include type="modules" name="newsletter" style="xhtml" />
			
		</section>
  		<?php endif ?>
		<!-- About Us And Team Area
		================================================== -->
		<?php if ($this->countModules('team_content')) : ?>
		<section id="team">
  			<jdoc:include type="modules" name="team_content" style="none" />	
		</section>  
  		<?php endif ?>
		<!-- Contact Us Area
		================================================== -->
		<?php if ($this->countModules('contactform')) : ?>
		<section id="contact">
	  
			<div class="container">
				<div class="row">
		  			 CONTACT US UPPER MODULE     
						<jdoc:include type="modules" name="contactform" style="xhtml" />
				</div><!-- end row -->
			</div><!-- end container -->
	   
		</section>
		<?php endif ?>
        <!-- Component area  -->
		
		<?php
		$app = JFactory::getApplication();
		$menu = $app->getMenu();
		if ($menu->getActive() != $menu->getDefault()) {?>
	<!-- Blog Area
		================================================== -->
		
		<!-- <section  class="blog-rightsidebar" style=""> -->
		<div id="blog-outer">	
		<section id="blog" class="blog-rightsidebar blog-single"> 	<!-- this should be chnaged --> 
			<div class="container">
			<div class="row">
		<?php if ($this->countModules('page-title')): ?>
			<div class="col-md-12"> 
				<jdoc:include type="modules" name="page-title" style="xhtml" />			       
			</div>
		<?php endif; ?>
	  	<?php if ($this->countModules('left-sidebar')) { ?>
			<!-- Left Part Sidebar -->
					<div class="col-md-8 col-sm-8">
					<jdoc:include type="message" />
					<jdoc:include type="component" />
												                        
					</div><!-- Right Part -->
					
					<div class="col-md-4 col-sm-4">
						<div class="sidebar">
							<jdoc:include type="modules" name="left-sidebar" style="xhtml" />			
																				
						</div><!-- Sidebar Ends -->
					</div>


		<?php } elseif ($this->countModules('right-sidebar')) { ?>

					<div class="col-md-4 col-sm-4">
						<!-- Sidebar Begins -->
						<div class="sidebar">
							<jdoc:include type="modules" name="right-sidebar" style="xhtml" />			
																				
						</div><!-- Sidebar Ends -->
					</div>
					
					<!-- Right Part -->
					<div class="col-md-8 col-sm-8">
					
					<jdoc:include type="message" />
					<jdoc:include type="component" />
												                        
					</div><!-- end col-md-4 -->

		<?php } else  { ?>

			
				<div class="col-md-12 col-sm-12">
					<jdoc:include type="message" />
					<jdoc:include type="component" />
					<!-- End Content -->
				</div>
						  
		
	
		

<?php }?>
</div><!-- end row -->
</div><!-- end container -->
</section>
</div><!--blog_outer end -->
<?php } ?>
		
	  <!-- Component area End -->
		<!-- Socials Area
		================================================== -->
		<?php if ($this->countModules('footer_social')) : ?>
		<section id="socials" class="bg-dark-blue">
	  
			<div class="container">
				<div class="row">
					<div class="col-md-12">
                   
						<jdoc:include type="modules" name="footer_social" style="xhtml" />
						
				
					</div><!-- end col-md-12 -->
				</div><!-- end row -->
			</div><!-- end container -->
		
		</section>
		<?php endif ?>
	  
		<!-- Client Area
		================================================== -->
		<?php if ($this->countModules('footer_client')) : ?>
		<section id="clients" class="bg-very-dark-blue">
		
			<div class="container">
				<div class="row">
					<div class="col-md-12">	
                    FOOTER TOP CLIENT MODULE			
						
					</div>
				</div><!-- end row -->
			</div><!-- end container -->
				
		</section>
	  <?php endif ?>
		<!-- Copyright Area
		================================================== -->
		<section id="copyright" class="bg-cyan">
			<div class="container">
				<div class="row">
					<div class="col-md-12"> 
                    	<p class="text-center copyright">
							Copyright <?php echo date('Y'); ?> <a href="<?php echo $this->baseurl; ?>"> <?php echo $sitename; ?></a> All rights reserved. Designed by <a href="#">myboodesign.com</a>
						</p>        
						        
					</div>
				</div>
			</div>	
		</section>    
		<jdoc:include type="modules" name="debug" style="none" />
	</body>
</html>
