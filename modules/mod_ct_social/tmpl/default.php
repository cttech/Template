<?php 
defined('_JEXEC') or die;
$document = JFactory::getDocument();

$facebook = $params->get("facebook");
$twitter = $params->get("twitter");
$googleplus= $params->get("googleplus");
$linkedin = $params->get("linkedin");
$vimeo = $params->get("vimeo");
$youtube = $params->get("youtube");
$pinterest = $params->get("pinterest");

?> 

<ul class="text-center footer-social">
          <?php if(!empty($twitter)): ?>
              <li class="animated" data-animation="zoomIn" data-animation-delay="300">
                              <a href="<?php echo $twitter;?>" class="white"><i class="fa fa-twitter fa-3x"></i></a>
              </li>
          <?php endif ?> 
          <?php if(!empty($facebook)): ?>                 
              <li class="animated" data-animation="zoomIn" data-animation-delay="300">
                              <a href="<?php echo $facebook;?>" class="white"><i class="fa fa-facebook fa-3x"></i></a>
                            </li>
          <?php endif ?> 
          <?php if(!empty($pinterest)): ?>                   
              <li class="animated" data-animation="zoomIn" data-animation-delay="300">
                              <a href="<?php echo $pinterest;?>" class="white"><i class="fa fa-pinterest fa-3x"></i></a>
                            </li>
          <?php endif ?> 
          <?php if(!empty($linkedin)): ?>                   
              <li class="animated" data-animation="zoomIn" data-animation-delay="300">
                              <a href="<?php echo $linkedin;?>" class="white"><i class="fa fa-linkedin fa-3x"></i></a>
                            </li>
           <?php endif ?> 
          <?php if(!empty($googleplus)): ?>                  
              <li class="animated" data-animation="zoomIn" data-animation-delay="300">
                              <a href="<?php echo $googleplus;?>" class="white"><i class="fa fa-google-plus fa-3x"></i></a>
                            </li>
            <?php endif ?> 
          <?php if(!empty($vimeo)): ?>                 
              <li class="animated" data-animation="zoomIn" data-animation-delay="300">
                              <a href="<?php echo $vimeo;?>" class="white"><i class="fa fa-vimeo-square fa-3x"></i></a>
                            </li>
              <?php endif ?> 
          <?php if(!empty($youtube)): ?>               
              <li class="animated" data-animation="zoomIn" data-animation-delay="300">
                              <a href="<?php echo $youtube;?>" class="white"><i class="fa fa-youtube fa-3x"></i></a>
                            </li>
             <?php endif ?> 
                   
            </ul>


				
				 
				
					