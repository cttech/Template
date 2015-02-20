<?php 
defined('_JEXEC') or die;
$document = JFactory::getDocument();
?> 


<?php

$head="";
$title="";
$sub_title="";
$desc="";



if(($params->get('title'))!=null){
            $title= $params->get('title');}
if(($params->get('sub_title'))!=null){
            $sub_title= $params->get('sub_title');}
if(($params->get('desc'))!=null){
            $desc= $params->get('desc');} 


/*******************Team 1*************/  
 $tm1="";$tt1="";$td1='';$mn1='';
 if(($params->get('tm1'))!=null){
            $tm1= $params->get('tm1');}
  if(($params->get('mn1'))!=null){
            $mn1= $params->get('mn1');}	
  if(($params->get('tt1'))!=null){
            $tt1= $params->get('tt1');}	
  if(($params->get('td1'))!=null){
            $td1= $params->get('td1');}	

/*******************Team 2*************/	
			$tm2="";$tt2="";$td2='';$mn2='';
 if(($params->get('tm2'))!=null){
            $tm2= $params->get('tm2');}
  if(($params->get('mn2'))!=null){
            $mn2= $params->get('mn2');}	
  if(($params->get('tt2'))!=null){
            $tt2= $params->get('tt2');}	
  if(($params->get('td2'))!=null){
            $td2= $params->get('td2');}	

	

/****************Team 3*****************/			
			
			$tm3="";$tt3="";$td3='';$mn3='';
 if(($params->get('tm3'))!=null){
            $tm3= $params->get('tm3');}
  if(($params->get('mn3'))!=null){
            $mn3= $params->get('mn3');}	
  if(($params->get('tt3'))!=null){
            $tt3= $params->get('tt3');}	
  if(($params->get('td3'))!=null){
            $td3= $params->get('td3');}	

	
			
/******************Team 4**************/
			$tm4="";$tt4="";$td4='';$mn4='';
 if(($params->get('tm4'))!=null){
            $tm4= $params->get('tm4');}
  if(($params->get('mn4'))!=null){
            $mn4= $params->get('mn4');}	
  if(($params->get('tt4'))!=null){
            $tt4= $params->get('tt4');}	
  if(($params->get('td4'))!=null){
            $td4= $params->get('td4');}	

	
	
$facebook1="";$facebook2="";$facebook3="";$facebook4="";
 if(($params->get('facebook1'))!=null){$facebook1= $params->get('facebook1');}
 if(($params->get('facebook2'))!=null){$facebook2= $params->get('facebook2');}
 if(($params->get('facebook3'))!=null){$facebook3= $params->get('facebook3');}
 if(($params->get('facebook4'))!=null){$facebook4= $params->get('facebook4');}
 
 
$twitter1="";$twitter2="";$twitter3="";$twitter4="";
 if(($params->get('twitter1'))!=null){$twitter1= $params->get('twitter1');}
 if(($params->get('twitter2'))!=null){$twitter2= $params->get('twitter2');}
 if(($params->get('twitter3'))!=null){$twitter3= $params->get('twitter3');}
 if(($params->get('twitter4'))!=null){$twitter4= $params->get('twitter4');}

 
$googleplus1="";$googleplus2="";$googleplus3="";$googleplus4="";
 if(($params->get('googleplus1'))!=null){$googleplus1= $params->get('googleplus1');}
 if(($params->get('googleplus2'))!=null){$googleplus2= $params->get('googleplus2');}
 if(($params->get('googleplus3'))!=null){$googleplus3= $params->get('googleplus3');}
 if(($params->get('googleplus4'))!=null){$googleplus4= $params->get('googleplus4');}

 
$linkedin1="";$linkedin2="";$linkedin3="";$linkedin4="";
 if(($params->get('linkedin1'))!=null){$linkedin1= $params->get('linkedin1');}
 if(($params->get('linkedin2'))!=null){$linkedin2= $params->get('linkedin2');}
 if(($params->get('linkedin3'))!=null){$linkedin3= $params->get('linkedin3');}
 if(($params->get('linkedin4'))!=null){$linkedin4= $params->get('linkedin4');}


 $flickr1="";$flickr2="";$flickr3="";$flickr4="";
 if(($params->get('flickr1'))!=null){$flickr1= $params->get('flickr1');}
 if(($params->get('flickr2'))!=null){$flickr2= $params->get('flickr2');}
 if(($params->get('flickr3'))!=null){$flickr3= $params->get('flickr3');}
 if(($params->get('flickr4'))!=null){$flickr4= $params->get('flickr4');}

 
$html5_1="";$html5_2="";$html5_3="";$html5_4="";
 if(($params->get('html5_1'))!=null){$html5_1= $params->get('html5_1');}
 if(($params->get('html5_2'))!=null){$html5_2= $params->get('html5_2');}
 if(($params->get('html5_3'))!=null){$html5_3= $params->get('html5_3');}
 if(($params->get('html5_4'))!=null){$html5_4= $params->get('html5_4');}

 $skype1 ="";$skype2 ="";$skype3 ="";$skype4 ="";
 if(($params->get('skype1'))!=null){$skype1= $params->get('skype1');}
 if(($params->get('skype2'))!=null){$skype2= $params->get('skype2');}
 if(($params->get('skype3'))!=null){$skype3= $params->get('skype3');}
 if(($params->get('skype4'))!=null){$skype4= $params->get('skype4');}

$youtube1="";$youtube2="";$youtube3="";$youtube4="";
 if(($params->get('youtube1'))!=null){$youtube1= $params->get('youtube1');}
 if(($params->get('youtube2'))!=null){$youtube2= $params->get('youtube2');}
 if(($params->get('youtube3'))!=null){$youtube3= $params->get('youtube3');}
 if(($params->get('youtube4'))!=null){$youtube4= $params->get('youtube4');}

$rss1="";$rss2="";$rss3="";$rss4="";
 if(($params->get('rss1'))!=null){$rss1= $params->get('rss1');}
 if(($params->get('rss2'))!=null){$rss2= $params->get('rss2');}
 if(($params->get('rss3'))!=null){$rss3= $params->get('rss3');}
 if(($params->get('rss4'))!=null){$rss4= $params->get('rss4');}


?><?php
if($desc!="" || $sub_title!="" ||$title!=""):

?>

<div class="container">
        <div class="row">
      
          <div class="col-md-12">
            <?php /* <?php if($title!=""):?>  */ ?> 
            <h2 class="text-center animated" data-animation="fadeIn" data-animation-delay="400"><?php echo !empty($title)? $title : "Company Profile & Team"; ?></h2>
           
            <div class="devider">
              <div class="devider-line-h devider-line-h-sea-green animated" data-animation="zoomIn" data-animation-delay="1000"></div>
              <div class="devider-round-out devider-round-out-sea-green animated" data-animation="zoomIn" data-animation-delay="700">
                <div class="devider-round-in devider-round-in-sea-green"></div>
              </div>
            </div>
          <?php /*  <?php endif ?>  
                  <?php if($sub_title!=""):?> */ ?> 
            <p class="text-center lead op08 animated" data-animation="fadeIn" data-animation-delay="400">
              <?php echo (!empty($sub_title))? $sub_title : 'Nemo <span class="span-color">enim ipsam</span> voluptatem quia voluptas sit aspernatur'; ?>
              
            </p>
         <?php /*   <?php endif ?>
            <?php if($desc!=""):?>*/ ?> 
            <p class="text-center title-description animated" data-animation="fadeIn" data-animation-delay="400">
              <?php echo !empty($desc)? $desc : "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."; ?>
              
            </p>
            <?php /*  <?php endif ?>*/ ?> 
           
          </div><!-- end col-md-12 -->      
        
        </div><!-- end row -->
      </div><!-- end container -->
<?php endif ?>      
    
      <!-- team start --> 
<?php
if($tm1!="" || $tm2!="" ||$tm3!=""||$tm4!=""):

?>      <?php if($tm1!=""):?>   
      <div class="col-md-12"> 
        <div class="col-md-6 bg-dark-blue animated" data-animation="fadeIn" data-animation-delay="500">
          <img src="<?php echo $tm1;?>" alt="photo" class="pull-right img-responsive">
          <div class="clearfix"></div>
        </div><!-- end col-md-6--> 
      
        <div class="col-md-6 bg-cyan team-container animated" data-animation="fadeIn" data-animation-delay="300">
          <ul class="team-social">
            <?php if($facebook1!=""):?><li><a href="<?php echo $facebook1;?>" class="dark-cyan"><i class="fa fa-facebook"></i></a></li><?php endif ?>
            <?php if($twitter1!=""):?><li><a href="<?php echo $twitter1;?>" class="dark-cyan"><i class="fa fa-twitter"></i></a></li><?php endif ?>
            <?php if($googleplus1!=""):?><li><a href="<?php echo $googleplus1;?>" class="dark-cyan"><i class="fa fa-google-plus"></i></a></li><?php endif ?>
            <?php if($linkedin1!=""):?><li><a href="<?php echo $linkedin1;?>" class="dark-cyan"><i class="fa fa-linkedin"></i></a></li><?php endif ?>
            <?php if($skype1!=""):?><li><a href="<?php echo $skype1;?>" class="dark-cyan"><i class="fa fa-skype"></i></a></li><?php endif ?>
            <?php if($flickr1!=""):?><li><a href="<?php echo $flickr1;?>" class="dark-cyan"><i class="fa fa-flickr"></i></a></li><?php endif ?>
            <?php if($html5_1!=""):?><li><a href="<?php echo $html5_1;?>" class="dark-cyan"><i class="fa fa-html5"></i></a></li><?php endif ?>
            <?php if($youtube1!=""):?><li><a href="<?php echo $youtube1;?>" class="dark-cyan"><i class="fa fa-youtube"></i></a></li><?php endif ?>
            <?php if($rss1!=""):?><li><a href="<?php echo $rss1;?>" class="dark-cyan"><i class="fa fa-rss"></i></a></li><?php endif ?>
          </ul>
          <p class="team-content pull-left dark-cyan">         
            <?php echo $td1?>
          </p>
          <div class="team-name pull-left">
            <i class="fa fa-camera fa-2x white pull-left"></i>
            <h5 class="white"><?php echo $mn1?></h5>
            <span class="team-title dark-cyan pull-left"><?php echo $tt1?></span>
          </div>
        
          <div class="clearfix"></div>
        </div><!-- end col-md-6-->
      
      </div><!-- end col-md-12--> 
    <?php endif ?>  
    <?php if($tm2!=""):?> 
      <div class="col-md-12">   
        <div class="col-md-6 bg-green team-container animated" data-animation="fadeIn" data-animation-delay="300">
          <ul class="team-social text-right">
            <?php if($facebook2!=""):?><li><a href="<?php echo $facebook2;?>" class="dark-cyan"><i class="fa fa-facebook"></i></a></li><?php endif ?>
            <?php if($twitter2!=""):?><li><a href="<?php echo $twitter2;?>" class="dark-cyan"><i class="fa fa-twitter"></i></a></li><?php endif ?>
            <?php if($googleplus2!=""):?><li><a href="<?php echo $googleplus2;?>" class="dark-cyan"><i class="fa fa-google-plus"></i></a></li><?php endif ?>
            <?php if($linkedin2!=""):?><li><a href="<?php echo $linkedin2;?>" class="dark-cyan"><i class="fa fa-linkedin"></i></a></li><?php endif ?>
            <?php if($skype2!=""):?><li><a href="<?php echo $skype2;?>" class="dark-cyan"><i class="fa fa-skype"></i></a></li><?php endif ?>
            <?php if($flickr2!=""):?><li><a href="<?php echo $flickr2;?>" class="dark-cyan"><i class="fa fa-flickr"></i></a></li><?php endif ?>
            <?php if($html5_2!=""):?><li><a href="<?php echo $html5_2;?>" class="dark-cyan"><i class="fa fa-html5"></i></a></li><?php endif ?>
            <?php if($youtube2!=""):?><li><a href="<?php echo $youtube2;?>" class="dark-cyan"><i class="fa fa-youtube"></i></a></li><?php endif ?>
            <?php if($rss2!=""):?><li><a href="<?php echo $rss2;?>" class="dark-cyan"><i class="fa fa-rss"></i></a></li><?php endif ?>
          </ul>
          <p class="team-content pull-right text-right dark-green">        
            <?php echo $td2?>
          </p>
          <div class="team-name pull-right">
            <i class="fa fa-desktop fa-2x white pull-right"></i>
            <h5 class="white text-right"><?php echo $mn2?></h5>
            <span class="team-title dark-green text-right"><?php echo $tt2?></span>
          </div>     
          
          <div class="clearfix"></div>
        </div><!-- end col-md-6--> 
      
        <div class="col-md-6 bg-dark-blue animated" data-animation="fadeIn" data-animation-delay="500">
          <img src="<?php echo $tm2;?>" alt="photo" class="pull-left img-responsive">
          <div class="clearfix"></div>
        </div><!-- end col-md-6--> 
      
      </div><!-- end col-md-12--> 
  <?php endif ?>  
    <?php if($tm3!=""):?> 
      <div class="col-md-12">
        <div class="col-md-6 bg-dark-blue animated" data-animation="fadeIn" data-animation-delay="500">
          <img src="<?php echo $tm3;?>" alt="photo" class="pull-right img-responsive">
          <div class="clearfix"></div>
        </div><!-- end col-md-6--> 
      
        <div class="col-md-6 bg-blue team-container animated" data-animation="fadeIn" data-animation-delay="300">
          <ul class="team-social">
            <?php if($facebook3!=""):?><li><a href="<?php echo $facebook3;?>" class="dark-cyan"><i class="fa fa-facebook"></i></a></li><?php endif ?>
            <?php if($twitter3!=""):?><li><a href="<?php echo $twitter3;?>" class="dark-cyan"><i class="fa fa-twitter"></i></a></li><?php endif ?>
            <?php if($googleplus3!=""):?><li><a href="<?php echo $googleplus3;?>" class="dark-cyan"><i class="fa fa-google-plus"></i></a></li><?php endif ?>
            <?php if($linkedin3!=""):?><li><a href="<?php echo $linkedin3;?>" class="dark-cyan"><i class="fa fa-linkedin"></i></a></li><?php endif ?>
            <?php if($skype3!=""):?><li><a href="<?php echo $skype3;?>" class="dark-cyan"><i class="fa fa-skype"></i></a></li><?php endif ?>
            <?php if($flickr3!=""):?><li><a href="<?php echo $flickr3;?>" class="dark-cyan"><i class="fa fa-flickr"></i></a></li><?php endif ?>
            <?php if($html5_3!=""):?><li><a href="<?php echo $html5_3;?>" class="dark-cyan"><i class="fa fa-html5"></i></a></li><?php endif ?>
            <?php if($youtube3!=""):?><li><a href="<?php echo $youtube3;?>" class="dark-cyan"><i class="fa fa-youtube"></i></a></li><?php endif ?>
            <?php if($rss3!=""):?><li><a href="<?php echo $rss3;?>" class="dark-cyan"><i class="fa fa-rss"></i></a></li><?php endif ?>
          </ul>
          <p class="team-content pull-left dark-blue">         
            <?php echo $td3?>
          </p>
          <div class="team-name pull-left">
            <i class="fa fa-code fa-2x white pull-left"></i>
            <h5 class="white"><?php echo $mn3?></h5>
            <span class="team-title dark-blue pull-left"><?php echo $tt3?></span>
          </div>
          
          <div class="clearfix"></div>
        </div><!-- end col-md-6-->  
      </div><!-- end col-md-12-->  
    <?php endif ?>  
    <?php if($tm4!=""):?> 
      <div class="col-md-12"> 
        <div class="col-md-6 bg-purple team-container animated" data-animation="fadeIn" data-animation-delay="300">
          <ul class="team-social text-right">
            <?php if($facebook4!=""):?><li><a href="<?php echo $facebook4;?>" class="dark-cyan"><i class="fa fa-facebook"></i></a></li><?php endif ?>
            <?php if($twitter4!=""):?><li><a href="<?php echo $twitter4;?>" class="dark-cyan"><i class="fa fa-twitter"></i></a></li><?php endif ?>
            <?php if($googleplus4!=""):?><li><a href="<?php echo $googleplus4;?>" class="dark-cyan"><i class="fa fa-google-plus"></i></a></li><?php endif ?>
            <?php if($linkedin4!=""):?><li><a href="<?php echo $linkedin4;?>" class="dark-cyan"><i class="fa fa-linkedin"></i></a></li><?php endif ?>
            <?php if($skype4!=""):?><li><a href="<?php echo $skype4;?>" class="dark-cyan"><i class="fa fa-skype"></i></a></li><?php endif ?>
            <?php if($flickr4!=""):?><li><a href="<?php echo $flickr4;?>" class="dark-cyan"><i class="fa fa-flickr"></i></a></li><?php endif ?>
            <?php if($html5_4!=""):?><li><a href="<?php echo $html5_4;?>" class="dark-cyan"><i class="fa fa-html5"></i></a></li><?php endif ?>
            <?php if($youtube4!=""):?><li><a href="<?php echo $youtube4;?>" class="dark-cyan"><i class="fa fa-youtube"></i></a></li><?php endif ?>
            <?php if($rss4!=""):?><li><a href="<?php echo $rss4;?>" class="dark-cyan"><i class="fa fa-rss"></i></a></li><?php endif ?>
          </ul>
          <p class="team-content pull-right text-right dark-purple">         
            <?php echo $td4;?>
          </p>
          <div class="team-name pull-right">
            <i class="fa fa-gamepad fa-2x white pull-right"></i>
            <h5 class="white text-right"><?php echo $mn4; ?></h5>
            <span class="team-title dark-purple text-right"><?php echo $tt4?></span>
          </div>
          
          <div class="clearfix"></div>
        </div><!-- end col-md-6-->  
      
        <div class="col-md-6 bg-dark-blue animated" data-animation="fadeIn" data-animation-delay="500">
          <img src="<?php echo $tm4;?>" alt="photo" class="pull-left img-responsive">
          <div class="clearfix"></div>
        </div><!-- end col-md-6-->        
    
      </div>  <!-- end col-md-12 --> 
    
      <!-- team are end -->
      <div class="clearfix"></div>
       <?php endif ?> 
   
<?php endif ?>        
				
			



				
				 
				
					