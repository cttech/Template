<?php 
defined('_JEXEC') or die;
$document = JFactory::getDocument();

$client1_img   = $params->get("client1_img");
$client1       = $params->get("client1");
$client2_img  = $params->get("client2__img");
$client2       = $params->get("client2");
$client3_img   = $params->get("client3_img");
$client3       = $params->get("client3");
$client4_img   = $params->get("client4_img");
$client4       = $params->get("client4");
$client5_img   = $params->get("client5_img");
$client5       = $params->get("client5");
$client6_img   = $params->get("client6_img");
$client6       = $params->get("client6");
$client7_img   = $params->get("client7_img");
$client7       = $params->get("client7");
$client8_img   = $params->get("client8_img");
$client8       = $params->get("client8");
$client9_img   = $params->get("client9_img");
$client9       = $params->get("client9");
$client10_img  = $params->get("client10_img");
$client10      = $params->get("client10");


?> 

<div class="col-md-12">       
        <ul id="flexiselDemo" class="text-center logo-client">
          <?php if(!empty($client1)): ?>
              <li>
                              <a href="<?php echo $client1;?>"><img src="<?php echo $client1_img;?>" alt="" class="img-responsive"></a>
              </li>
          <?php endif ?> 
          <?php if(!empty($client2)): ?>
              <li>
                              <a href="<?php echo $client2;?>"><img src="<?php echo $client2_img;?>" alt="" class="img-responsive"></a>
              </li>
             <?php endif ?> 
          <?php if(!empty($client3)): ?> 
              <li>
                              <a href="<?php echo $client3;?>"><img src="<?php echo $client3_img;?>" alt="" class="img-responsive"></a>
              </li>
            <?php endif ?> 
          <?php if(!empty($client4)): ?>  
              <li>
                              <a href="<?php echo $client4;?>"><img src="<?php echo $client4_img;?>" alt="" class="img-responsive"></a>
              </li>
             <?php endif ?> 
          <?php if(!empty($client5)): ?> 
              <li>
                              <a href="<?php echo $client5;?>"><img src="<?php echo $client5_img;?>" alt="" class="img-responsive"></a>
              </li>
             <?php endif ?> 
          <?php if(!empty($client6)): ?> 
              <li>
                              <a href="<?php echo $client6;?>"><img src="<?php echo $client6_img;?>" alt="" class="img-responsive"></a>
              </li>
            <?php endif ?> 
          <?php if(!empty($client7)): ?>  
              <li>
                              <a href="<?php echo $client7;?>"><img src="<?php echo $client7_img;?>" alt="" class="img-responsive"></a>
              </li>
          <?php endif ?> 
          <?php if(!empty($client8)): ?>  
              <li>
                              <a href="<?php echo $client8?>"><img src="<?php echo $client8_img;?>" alt="" class="img-responsive"></a>
              </li>
          <?php endif ?> 
          <?php if(!empty($client9)): ?>  
              <li>
                              <a href="<?php echo $client9;?>"><img src="<?php echo $client9_img;?>" alt="" class="img-responsive"></a>
              </li>
          <?php endif ?> 
          <?php if(!empty($client10)): ?>  
              <li>
                              <a href="<?php echo $client10;?>"><img src="<?php echo $client10_img;?>" alt="" class="img-responsive"></a>
              </li>
          <?php endif ?> 
          
        </ul>

</div>



