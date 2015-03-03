<?php 
/**
* Js Slideshow view file
* @copyright (C) 2014 by Joomlastars - All rights reserved!
* @package Js-Slideshow1
* @license GNU/GPL, see LICENSE.php
*/

//No Direct Access
defined('_JEXEC') or die('Restricted Access');

//Sllideshow effect



$document = &JFactory::getDocument();
$document->addStyleSheet(JURI::base(true).'/modules/mod_ct_carousel/css/YTPlayer.css');
$document->addScript(JURI::base(true).'/modules/mod_ct_carousel/js/jquery.mb.YTPlayer.js');
//print_r($content_slides);

//Add js and css for slideshow.


// for only effect 1
if($SelectEffect=='video'){?>
	<!-- Video Area
        ================================================== -->
		<div id="fixed_video1"></div>
			<!-- Video Inner -->
			<div id="P3" class="player video-container" data-property="{videoURL:'<?php echo $video_url;?>',containment:'#fixed_video1',autoPlay:<?php echo $autoPlay;?>, showControls:<?php echo $showcontrol;?>, mute:<?php echo $volume;?>, startAt:0}"></div><!-- Video Ends -->
		<!-- Video Ends -->

<?php } ?>


<?php if($SelectEffect=='carousel'){?>
<div id="#carousel-slider" class="carousel-slider carousel-slider-home">
			<div class="container">
				<div class="row">
				
					<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
						<!-- Indicators -->
						
						<ol class="carousel-indicators">
						<?php if (!empty($img1)) : ?>	
							<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
						<?php endif ?>
						<?php if (!empty($img2)) : ?>
						<li data-target="#carousel-example-generic" data-slide-to="1"></li>
						<?php endif ?>
						<?php if (!empty($img3)) : ?>
						<li data-target="#carousel-example-generic" data-slide-to="2"></li>
						<?php endif ?>
						<?php if (!empty($img4)) : ?>
						<li data-target="#carousel-example-generic" data-slide-to="3"></li>
						<?php endif ?>
						<?php if (!empty($img5)) : ?>
						<li data-target="#carousel-example-generic" data-slide-to="4"></li>
						<?php endif ?>
						
						</ol>
					
					
						<!-- Wrapper for slides -->
						<div class="carousel-inner">
						
							<!-- Item One -->
						<?php if($img1 != "" && $title1 != ""):?>	
							<div class="item active">
								<div class="col-md-6 slide1-img">
									<!-- Image -->
									<img src="<?php echo $img1; ?>" alt="" class="img-responsive">	
								</div>
								<div class="col-md-6 slide1-text">				
									<!-- Content -->
									<h1 class="fw-600"> <?php echo $title1; ?></h1>
									<h6 class="fw-400">
										<?php echo $desc1; ?>
									</h6>
									<span>
										<a href="<?php echo $link1?>" class="btn btn-cyan"><?php echo $link1_title?></a>
									</span>
								</div>
							</div>
							<?php endif ?>
							<!-- Item Two -->
							<?php if($img2 != "" && $title2 != ""):?>
							<div class="item">
								<div class="col-md-6 slide2-text">
									<h1 class="fw-600"><?php echo $title2; ?></h1>
									<h6 class="fw-600"><?php echo $desc2; ?></h6>						
									<span>
										<a href="<?php echo $link2?>" class="btn btn-cyan"><?php echo $link2_title?></a>
									</span>
								</div>
								<div class="col-md-6 slide2-img">
									<!-- Image -->
									<img src="<?php echo $img2;?>" alt="right" class="img-responsive">
								</div>
							</div>
							<?php endif ?>
							<!-- Item Three -->
							<?php if($img3 != "" && $title3 != ""):?>
							<div class="item">
								<div class="col-md-6 slide3-img">
									<!-- Image -->
									<img src="<?php echo $img3;?>" alt="right" class="img-responsive">
								</div>
								<div class="col-md-6 slide3-text">					
									<!-- Content -->
									<h1 class="fw-600"> <?php echo $title3; ?></h1>
									<h6 class="fw-400">
										<?php echo $desc3; ?>
									</h6>
									<span>
										<a href="<?php echo $link3; ?>" class="btn btn-cyan"><?php echo $link3_title; ?></a>
									</span>					
								</div>
							</div><!-- Item Ends -->
							<?php endif ?>
							<?php if($img4 != "" && $title4 != ""):?>
							<!-- Item Four -->
							<div class="item">
								<div class="col-md-6 slide2-text">
									<h1 class="fw-600"><?php echo $title4; ?></h1>
									<h6 class="fw-600"><?php echo $desc4; ?></h6>						
									<span>
										<a href="<?php echo $link4; ?>" class="btn btn-cyan"><?php echo $link4_title; ?></a>
									</span>
								</div>
								<div class="col-md-6 slide2-img">
									<!-- Image -->
									<img src="<?php echo $img4; ?>" alt="right" class="img-responsive">
								</div>
							</div>
							<?php endif ?>
							<?php if($img5 != "" && $title5 != ""):?>
							<!-- Item Five -->
							<div class="item">
								<div class="col-md-6 slide3-img">
									<!-- Image -->
									<img src="<?php echo $img5; ?>" alt="right" class="img-responsive">
								</div>
								<div class="col-md-6 slide3-text">					
									<!-- Content -->
									<h1 class="fw-600"> <?php echo $title5; ?></h1>
									<h6 class="fw-400">
										<?php echo $desc5; ?>
									</h6>
									<span>
										<a href="<?php echo $link5; ?>" class="btn btn-cyan"><?php echo $link5_title; ?></a>
									</span>					
								</div>
							</div><!-- Item Ends -->
							<?php endif ?>
							
						</div>
					</div>					
				</div>
			</div>
		</div>
<?php } ;?>		