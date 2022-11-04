<?php
    session_start();
    require_once dirname(__FILE__).'/facebook_login/initialization.php';
   
    $accessToken = $helper-> getAccessToken();
    $domain = 'https://php-demo-mu.vercel.app/api/';
    $url = 'https://www.facebook.com/logout.php?next=' .  $domain .
      '&access_token='.$accessToken;
    echo $url;
    header('Location: '.$url);
    session_destroy();
?>