<?php 
defined('_JEXEC') or die;
$document = JFactory::getDocument();
$document->addStyleSheet(JURI::base(true).'/modules/mod_ct_tweet/css/tweet-carousel.css');
$document->addScript(JURI::base(true).'/modules/mod_ct_tweet/js/carousel.js');
$document->addScript(JURI::base(true).'/modules/mod_ct_tweet/js/scripts.js');
//$document->addScript(JURI::base(true).'/modules/mod_ct_tweet/js/tweetie.min.js');

require_once(JPATH_BASE.'/modules/mod_ct_tweet/twitteroauth/twitteroauth.php');
//echo JPATH_BASE."/modules/mod_ct_tweet/twitteroauth/twitteroauth.php;
 /**
     * Gets connection with user Twitter account
     * @param  String $cons_key     Consumer Key
     * @param  String $cons_secret  Consumer Secret Key
     * @param  String $oauth_token  Access Token
     * @param  String $oauth_secret Access Secrete Token
     * @return Object               Twitter Session
 */

$username = $params->get("twitteruser");
$number = $params->get("notweets");
$consumerkey = $params->get("consumerkey");
$consumersecret = $params->get("consumersecret");
$accesstoken = $params->get("accesstoken"); 
$accesstokensecret = $params->get("accesstokensecret");


function getConnectionWithAccessToken($cons_key, $cons_secret, $oauth_token, $oauth_token_secret) {
  $connection = new TwitterOAuth($cons_key, $cons_secret, $oauth_token, $oauth_token_secret);
  return $connection;
}
function humanTiming ($time)
{

    $time = time() - $time; // to get the time since that moment

    $tokens = array (
        31536000 => 'year',
        2592000 => 'month',
        604800 => 'week',
        86400 => 'day',
        3600 => 'hour',
        60 => 'minute',
        1 => 'second'
    );

    foreach ($tokens as $unit => $text) {
        if ($time < $unit) continue;
        $numberOfUnits = floor($time / $unit);
        return $numberOfUnits.' '.$text.(($numberOfUnits>1)?'s':'');
    }

}
 
$connection = getConnectionWithAccessToken($consumerkey, $consumersecret, $accesstoken, $accesstokensecret);


    // Return JSON Object
   $tweets = $connection->get("https://api.twitter.com/1.1/statuses/user_timeline.json?screen_name=".$username."&count=".$number);
   
   ?>
   
   <!-- Twitter Sidebar -->
               <div class="twitter animated" data-animation="fadeInUp" data-animation-delay="300">
                <?php
                if ($module->showtitle):?>
                <h5>
                  <?php echo $module->title;?>
                </h5>
                <!-- Devider -->
                <div class="devider">
                  <div class="devider-line-h devider-line-h-sea-green animated" data-animation="zoomIn" data-animation-delay="1000"></div>
                  <div class="devider-round-out devider-round-out-sea-green animated" data-animation="zoomIn" data-animation-delay="700">
                    <div class="devider-round-in devider-round-in-sea-green"></div>
                  </div>
                </div>
              <?php endif; ?>
                <div class="twitter-feed">  
                  <div class="tweet">
                    <!-- Twitter Slider -->                   
                    <div class="tweets_feed">
                      
                      <?php foreach ($tweets as $tweet): ?>
                     
                      <div class="tweet">
                        <div class="tweet_text"><?php echo $tweet->text; ?></div>
                        <div class="tweet_user">
                          <span class="icon-twitter"><i class="fa fa-twitter"></i></span>
                          <span class="username">
                            <a title="abile_sample on Twitter" target="_blank" href="http://twitter.com/<?php echo $tweet->user->screen_name;?>"><?php echo $tweet->user->screen_name;?></a>
                          </span>
                        </div>
                        <div class="tweet_time">
                          <a href="http://twitter.com/<?php echo $tweet->user->screen_name;?>/status/<?php echo $tweet->id_str;?>">
                            <?php 
                            $time = strtotime($tweet->created_at);
                            echo humanTiming($time).' ago'; 
                            ?>
                          </a>
                        </div>
                      </div>
                    <?php endforeach;?>
                    </div>
                  </div>
                </div>
              </div><!-- Twitter Sidebar Ends -->   