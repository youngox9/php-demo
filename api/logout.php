<?php
    require_once dirname(__FILE__).'/facebook_login/initialization.php';
    session_start();
    @session_destroy();
    $_SESSION = array(); 
    $logoutUrl = 'https://www.facebook.com/logout.php?next=http://mydomain.com/logout.php&access_token=' . $helper->getAccessToken();



// if ($_GET['url'] != Null) {
//     header('location: '.$_GET['url']);
// } else {
//     header('location: /');
// }

?>

<?php echo $logoutUrl; ?>
