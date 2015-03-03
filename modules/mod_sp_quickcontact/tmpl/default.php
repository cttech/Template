<?php
/*
# mod_sp_quickcontact - Ajax based quick contact Module by JoomShaper.com
# -----------------------------------------------------------------------	
# Author    JoomShaper http://www.joomshaper.com
# Copyright (C) 2010 - 2014 JoomShaper.com. All Rights Reserved.
# License - http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
# Websites: http://www.joomshaper.com
*/

// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

$title 				= $params->get('title');
$sub_title			= $params->get('sub_title');
$desc				= $params->get('desc');
$phone_text			= $params->get('phone_text');
$phone_number		= $params->get('phone_number');
$email_header_text	= $params->get('email_text');
$email_enquiry		= $params->get('email_enquiry');
$address_location_text = $params->get('title');
$address_location 	= $params->get('address_location_text');
$quick_contact_text = $params->get('quick_contact_text');
$quick_contact 		= $params->get('quick_contact');

?>
<?php if(isset($title)|| isset($desc) || isset($sub_title))	:?>
<div class="col-md-12">    
					<?php if(!empty($title)):?>    
						<h2 class="text-center animated" data-animation="fadeIn" data-animation-delay="400"><?php echo $title; ?></h2>
			   
						<div class="devider">
							<div class="devider-line-h devider-line-h-sea-green animated" data-animation="zoomIn" data-animation-delay="1000"></div>
							<div class="devider-round-out devider-round-out-sea-green animated" data-animation="zoomIn" data-animation-delay="700">
								<div class="devider-round-in devider-round-in-sea-green"></div>
							</div>
						</div>
			   		<?php endif ?>
			   		<?php if(!empty($sub_title)):?> 
						<p class="text-center lead op08 animated" data-animation="fadeIn" data-animation-delay="400">
							<?php echo $sub_title; ?></p>
							<!-- Nemo enim ipsam <span class="span-color">voluptatem</span> quia voluptas sit aspernatur -->
						</p>
					<?php endif ?>	
					<?php if(!empty($desc)):?> 
						<p class="text-center title-description animated" data-animation="fadeIn" data-animation-delay="400">
							<?php echo $desc; ?></p>
			   	<?php endif ?>
						<div class="clearfix"></div>
			   
					</div><!-- end col-md-12 -->
			<?php endif ?>
					<div class="col-md-12">
						<div class="col-md-6 animated" data-animation="fadeIn" data-animation-delay="300">
							<div id="sp_quickcontact<?php echo $uniqid ?>" class="sp_quickcontact">
								<div id="sp_qc_status"></div>
								<form id="contactForm">
									<div class="sp_qc_clr"></div>
									<input type="text" name="name" class="pull-right input-text" id="name" onfocus="if (this.value=='<?php echo $name_text ?>') this.value='';" onblur="if (this.value=='') this.value='<?php echo $name_text ?>';" value="<?php echo $name_text ?>" required />
									<div class="sp_qc_clr"></div>
									<input type="email" name="email" class="pull-right input-text" id="email" onfocus="if (this.value=='<?php echo $email_text ?>') this.value='';" onblur="if (this.value=='') this.value='<?php echo $email_text ?>';" value="<?php echo $email_text ?>" required />
									<div class="sp_qc_clr"></div>
									<input type="text" name="website" class="pull-right input-text" id="subject" onfocus="if (this.value=='<?php echo $website_text ?>') this.value='';" onblur="if (this.value=='') this.value='<?php echo $website_text ?>';" value="<?php echo $website_text ?>" />
									<div class="sp_qc_clr"></div>
									<textarea name="message" class="text-area pull-right" id="message" onfocus="if (this.value=='<?php echo $msg_text ?>') this.value='';" onblur="if (this.value=='') this.value='<?php echo $msg_text ?>';" required><?php echo $msg_text ?></textarea>	
									
									
									<input id="sp_qc_submit" class="button btn-msg pull-right white" type="submit" value="<?php echo $send_msg ?>" />
									<div class="sp_qc_clr"></div>
								</form>
							</div>
						<!-- 
                            
                            <div id="sendingMessage" class="statusMessage sending-message"><p>Sending your message. Please wait...</p></div>
                            <div id="successMessage" class="statusMessage success-message"><p>Thanks for sending your message! We'll get back to you shortly.</p></div>
                            <div id="failureMessage" class="statusMessage failure-message"><p>There was a problem sending your message. Please try again.</p></div>
                            <div id="incompleteMessage" class="statusMessage"><p>Please complete all the fields in the form before sending.</p></div>
				 		-->
							<div class="clearfix"></div>
						</div><!-- end col-md-6-->
				
						<div id="contacInfo" class="col-md-6">
			  				<?php if(!empty($phone_text)|| !empty($phone_number)): ?>
							<div class="contact-info animated" data-animation="fadeInUp" data-animation-delay="300">
								<i class="fa fa-4x fa-mobile pull-left text-center"></i>
								<h6 class="fw-200"><?php echo (!empty($phone_text))? $phone_text :'Toll Free Number';?></h6>

								<h5><?php echo $phone_number ?></h5>
							</div>
							<?php endif ?>
							<?php if(isset($email_text)|| isset($email_enquiry)): ?>
							<div class="contact-info animated" data-animation="fadeInUp" data-animation-delay="500">
								<i class="fa fa-3x fa-envelope pull-left text-center"></i>
								<h6 class="fw-200"><?php echo (!empty($email_header_text))? $email_header_text :'General Enquiry';?></h6>
								<h5><?php echo $email_enquiry; ?></h5>
							</div>
							<?php endif ?>
							<?php if(!empty($address_location_text)|| !empty($address_location)): ?>
							<div class="contact-info animated" data-animation="fadeInUp" data-animation-delay="700">
								<i class="fa fa-3x fa-map-marker pull-left text-center"></i>
								<h6 class="fw-200"><?php echo (!empty($address_location_text))? $address_location_text :'Address Location';?></h6>
								<h5><?php echo $address_location ?></h5>
							</div>
							<?php endif ?>
							<?php if(!empty($quick_contact_text)|| !empty($quick_contact)): ?>
							<div class="contact-info animated" data-animation="fadeInUp" data-animation-delay="900">
								<i class="fa fa-3x fa-skype pull-left"></i>
								<h6 class="fw-200"><?php echo (!empty($quick_contact_text))? $quick_contact_text :'Skype Account';?></h6>
								<h5><?php echo $quick_contact ?></h5>
							</div>
							<?php endif ?>
						</div><!-- end col-md-6-->
			  
					</div><!-- end col-md-12 -->