<?php
 
require 'facebook/src/facebook.php';
 
$facebook = new Facebook(array(
    'appId'  => '477386972284105',
    'secret' => 'd8b92ab4cadf582da311298c3dd59387',
    'cookie' => true
));

 

 
$me = null;

  try {
    $uid = $facebook->getUser();
    $me = $facebook->api('/me');
  } catch (FacebookApiException $e) {
    error_log($e);
  }

 
if ($me) {
  $logoutUrl = $facebook->getLogoutUrl();
} else {
  $loginUrl = $facebook->getLoginUrl();
}
 
?>
<!doctype html>
<html xmlns:fb="http://www.facebook.com/2008/fbml">
<head>
<title>Send Message</title>
</head>
<body>
<div id="fb-root"></div>
<script>
window.fbAsyncInit = function() {
FB.init({
appId : '<?php echo $facebook->getAppId(); ?>',
session : <?php echo json_encode($session); ?>, // don't refetch the session when PHP already has it
status : true, // check login status
cookie : true, // enable cookies to allow the server to access the session
xfbml : true // parse XFBML
});
 
// whenever the user logs in, we refresh the page
FB.Event.subscribe('auth.login', function() {
window.location.reload();
});
};
 
(function() {
var e = document.createElement('script');
e.src = document.location.protocol + '//connect.facebook.net/en_US/all.js';
e.async = true;
document.getElementById('fb-root').appendChild(e);
}());
</script>
 
<?php if ($me){ ?>
<a href="<?php echo $logoutUrl; ?>">
<img src="http://static.ak.fbcdn.net/rsrc.php/z2Y31/hash/cxrz4k7j.gif">
</a>
<?php }else { ?>
<div>
<fb:login-button perms="publish_stream,offline_access"></fb:login-button>
<?php }
    if ($me)
    {
$friends = $facebook->api('me/friends');
$message="Happy Feast";
for($i=0;$i<count($friends['data']);$i++)
{
$url="https://graph.facebook.com/".$friends['data'][$i]['id']."/feed";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POSTFIELDS,"access_token=".$session['access_token']."&message=".$message);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_exec($ch);
}
 
    }
 
    ?>
</body>
</html>