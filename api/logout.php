<?php
    require_once dirname(__FILE__).'/facebook_login/initialization.php';
    $domain = $_GET['url'];
    $_SESSION = array(); 
    $logoutUrl = 'https://www.facebook.com/logout.php?next=' . $domain . '&access_token=' . $helper->getAccessToken();
    @session_destroy();

// if ($_GET['url'] != Null) {
//     header('location: '.$_GET['url']);
// } else {
//     header('location: /');
// }

?>

<?php echo $logoutUrl; ?>
