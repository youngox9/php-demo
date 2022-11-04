<?php
    session_start();
    require_once dirname(__FILE__).'/facebook_login/initialization.php';
   
    if (isset($accessToken)) {
        require_once dirname(__FILE__) . '/facebook_login/statuslogin.php';
    }
    $url = $helper -> getLogoutUrl($accessToken, 'https://php-demo-mu.vercel.app/api/');
    echo $url;
?>