<?php 
defined('_JEXEC') or die;
$document = JFactory::getDocument();

$title=""; $desc=""; $sub_title="";

$title=$params->get('title');
$sub_title=$params->get('sub_title');
$desc=$params->get('desc');

$header_text1=""; $header_bottom_text1=""; $Circle_text1=""; $price_int_1="";

$header_text1=$params->get('header_text1');
$header_bottom_text1=$params->get('header_bottom_text1');
$Circle_text1=$params->get('Circle_text1');
$price_int_1=$params->get('price_int_1');

$header_text2="";$header_bottom_text2="";$Circle_text2="";$price_int_2="";

$header_text2=$params->get('header_text2');
$header_bottom_text2=$params->get('header_bottom_text2');
$Circle_text2=$params->get('Circle_text2');
$price_int_2=$params->get('price_int_2');

$header_text3="";$header_bottom_text3="";$Circle_text3="";$price_int_3="";

$header_text3=$params->get('header_text3');
$header_bottom_text3=$params->get('header_bottom_text3');
$Circle_text3=$params->get('Circle_text3');
$price_int_3=$params->get('price_int_3');

$text1=""; $text2=""; $text3=""; $text4=""; $text5=""; $text6=""; $text7=""; $text8="";
$text11=""; $text12=""; $text13=""; $text14=""; $text15=""; $text16=""; $text17=""; $text18="";
$text21=""; $text22=""; $text23=""; $text24=""; $text25=""; $text26=""; $text27=""; $text28="";

$text1=$params->get('col_1_row_1_text');
$text2=$params->get('col_1_row_2_text');
$text3=$params->get('col_1_row_3_text');
$text4=$params->get('col_1_row_4_text');
$text5=$params->get('col_1_row_5_text');
$text6=$params->get('col_1_row_6_text');
$text7=$params->get('col_1_row_7_text');
$text8=$params->get('col_1_row_8_text');

$text11=$params->get('col_2_row_1_text');
$text12=$params->get('col_2_row_2_text');
$text13=$params->get('col_2_row_3_text');
$text14=$params->get('col_2_row_4_text');
$text15=$params->get('col_2_row_5_text');
$text16=$params->get('col_2_row_6_text');
$text17=$params->get('col_2_row_7_text');
$text18=$params->get('col_2_row_8_text');

$text21=$params->get('col_3_row_1_text');
$text22=$params->get('col_3_row_2_text');
$text23=$params->get('col_3_row_3_text');
$text24=$params->get('col_3_row_4_text');
$text25=$params->get('col_3_row_5_text');
$text26=$params->get('col_3_row_6_text');
$text27=$params->get('col_3_row_7_text');
$text28=$params->get('col_3_row_8_text');
?> 
<?php
if($desc!="" || $sub_title!="" ||$title!=""):

?>
<div class="col-md-12 title-top">							        
				 		<!-- Title -->
				 		<?php if($title!=""):?> 
						<h2 class="text-center animated" data-animation="fadeIn" data-animation-delay="400"><?php echo !empty($title)? $title : "Our Services Price"; ?></h2>
			   			<!-- Devider -->
						<div class="devider">
							<div class="devider-line-h devider-line-h-sea-green animated" data-animation="zoomIn" data-animation-delay="1000"></div>
							<div class="devider-round-out devider-round-out-sea-green animated" data-animation="zoomIn" data-animation-delay="700">
								<div class="devider-round-in devider-round-in-sea-green"></div>
							</div>
						</div>
						<?php endif ?>	
           				<?php /*<?php if($sub_title!=""):?> */?>
			   			<!-- Description -->
						<p class="text-center lead animated" data-animation="fadeIn" data-animation-delay="400">
							<?php echo !empty($sub_title)? $sub_title : 'Nemo <span class="span-color">enim ipsam</span> voluptatem quia voluptas sit aspernatur'; ?>
                        	
                        </p>
                        <?php /*<?php endif ?>*/?>
						 <?php /*<?php if($desc!=""):?>*/?>
						<p class="text-center title-description animated" data-animation="fadeIn" data-animation-delay="400">
							<?php echo !empty($desc)? $desc : "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."; ?>
							
						</p>
						 <?php /*<?php endif ?>	*/?>	   
					</div><!-- end col-md-12 -->
<?php endif ?>				  
			  		<!-- Pricing Inner -->
					<div class="col-md-12 pricing-inner">		
						
						<!-- Pricing Box 1 -->		
						<div class="col-md-4 col-sm-4 animated" data-animation="zoomIn" data-animation-delay="700">
							<div class="price-left bg-green bg-green-shadow text-center">
								<!-- Title -->
								<h4 class="white fw-200"><span class="fw-500"><?php echo !empty($header_text1)? $header_text1 : "CMS"; ?></span><br><?php echo !empty($header_bottom_text1)? $header_bottom_text1 : "Website"; ?></h4>
				  				<!-- Price -->
								<div class="circle circle-left">
									<div class="devider-round-bg">									</div>
									<div class="devider-round-out devider-round-out-sea-green">
										<div class="devider-round-in devider-round-in-sea-green"></div>
									</div>
									<div class="devider-round-out devider-round-out-sea-green new">
										<div class="devider-round-in devider-round-in-sea-green"></div>
									</div>
									<h6 class="fw-400 white"><?php echo !empty($Circle_text1)? $Circle_text1 : "Starting From"; ?></h6>
									<span class="fw-500 white price"><?php echo !empty($price_int_1)? $price_int_1 : "$399"; ?></span>								
								</div>
				  				<!-- Price Details -->
								<ul class="text-center white">
									<?php if($text1!=""):?><li><?php echo $text1;?></li><?php endif?>
									<?php if($text2!=""):?><li><?php echo $text2;?></li><?php endif?>
									<?php if($text3!=""):?><li><?php echo $text3;?></li><?php endif?>
									<?php if($text4!=""):?><li><?php echo $text4;?></li><?php endif?>
									<?php if($text5!=""):?><li><?php echo $text5;?></li><?php endif?>
									<?php if($text6!=""):?><li><?php echo $text6;?></li><?php endif?>
								</ul>
				  				<!-- Order Now -->
				  				<?php if($text7!=""):?>
								<a href="<?php echo !empty($text8)? $text8 : '#'; ?>" class="btn btn-green"><?php echo $text7;?></a><?php endif?>
							</div>
						</div><!-- end col-md-4 -->
						
						<!-- Pricing Box 2 -->
						<div class="col-md-4 col-sm-4 animated" data-animation="zoomIn" data-animation-delay="400">
							<div class="price-center bg-blue bg-blue-shadow text-center">
								<!-- Title -->
								<h4 class="white fw-200"><span class="fw-500"><?php echo !empty($header_text2)? $header_text2 : "eCommerce"; ?></span><br><?php echo !empty($header_bottom_text2)? $header_bottom_text2 : "Website"; ?></h4>
				  				<!-- Price -->
								<div class="circle circle-center">
									<div class="devider-round-bg">									
									</div>
									<div class="devider-round-out devider-round-out-sea-green">
										<div class="devider-round-in devider-round-in-sea-green"></div>
									</div>
									<div class="devider-round-out devider-round-out-sea-green new">
										<div class="devider-round-in devider-round-in-sea-green"></div>
									</div>
									<h6 class="fw-400 white"><?php echo !empty($Circle_text2)? $Circle_text2 : "Starting From"; ?></h6>
									<span class="fw-500 white price"><?php echo !empty($price_int_2)? $price_int_2 : "$599"; ?>
									</span>								
								</div>
				  				<!-- Price Details -->
								<ul class="text-center white fw-200">
									<?php if($text11!=""):?><li><?php echo $text11;?></li><?php endif?>
									<?php if($text12!=""):?><li><?php echo $text12;?></li><?php endif?>
									<?php if($text13!=""):?><li><?php echo $text13;?></li><?php endif?>
									<?php if($text14!=""):?><li><?php echo $text14;?></li><?php endif?>
									<?php if($text15!=""):?><li><?php echo $text15;?></li><?php endif?>
									<?php if($text16!=""):?><li><?php echo $text16;?></li><?php endif?>
								</ul>
				  				<!-- Order Now -->
				  				<?php if($text17!=""):?>
								<a href="<?php echo !empty($text18)? $text18 : '#'; ?>" class="btn btn-blue">
								<?php echo $text17;?></a><?php endif?>
							</div>
						</div><!-- end col-md-4 -->
			  			
						<!-- Pricing Box 3 -->
						<div class="col-md-4 col-sm-4 animated" data-animation="zoomIn" data-animation-delay="700">
							<div class="price-right bg-red bg-red-shadow text-center">
								<!-- Title -->

								<h4 class="white fw-400"><span class="fw-500"><?php echo !empty($header_text3)? $header_text3 : "HTML"; ?></span><br><?php echo !empty($header_bottom_text3)? $header_bottom_text3 : "Website"; ?></h4>
				  				<!-- Price -->
								<div class="circle circle-right">
									<div class="devider-round-bg">									</div>
									<div class="devider-round-out devider-round-out-sea-green">
										<div class="devider-round-in devider-round-in-sea-green"></div>
									</div>
									<div class="devider-round-out devider-round-out-sea-green new">
										<div class="devider-round-in devider-round-in-sea-green"></div>
									</div>
									<h6 class="fw-300 white"><?php echo !empty($Circle_text3)? $Circle_text3 : "Starting From"; ?></h6>
									<span class="fw-500 white price"><?php echo !empty($price_int_3)? $price_int_3 : "$199"; ?></span>								
								</div>
				  				<!-- Price Details -->
								<ul class="text-center white fw-200">
									<?php if($text21!=""):?><li><?php echo $text21;?></li><?php endif?>
									<?php if($text22!=""):?><li><?php echo $text22;?></li><?php endif?>
									<?php if($text23!=""):?><li><?php echo $text23;?></li><?php endif?>
									<?php if($text24!=""):?><li><?php echo $text24;?></li><?php endif?>
									<?php if($text25!=""):?><li><?php echo $text25;?></li><?php endif?>
									<?php if($text26!=""):?><li><?php echo $text26;?></li><?php endif?>
								</ul>
				  				<!-- Order Now -->
				  				<?php if($text27!=""):?>
								<a href="<?php echo !empty($text28)? $text28 : '#'; ?>" class="btn btn-red"><?php echo $text27;?></a>
							<?php endif ?>
							</div>
						</div><!-- end col-md-4 -->		  
			  
					</div><!-- end col-md-12 -->	


		   
	
