<?php
    require_once dirname(__FILE__).'/facebook_login/initialization.php';
    // require_once dirname(__FILE__).'/facebook_login/initialization.php';
    $url = $fb -> getLogoutUrl();
    echo $url;

?>