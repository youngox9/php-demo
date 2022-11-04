<?php
    require_once dirname(__FILE__).'/facebook_login/initialization.php';
    // require_once dirname(__FILE__).'/facebook_login/initialization.php';
    if (isset($accessToken)) {
        require_once dirname(__FILE__) . '/facebook_login/statuslogin.php';
    }
    if(isset($accessToken)) {
        $url = $helper -> getLogoutUrl($accessToken, 'https://php-demo-mu.vercel.app/api/');
        echo $url;
     } else {
        $accessToken = $helper-> getAccessToken();
        echo $accessToken;
    }
?>