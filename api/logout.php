<?php
    require_once dirname(__FILE__).'/facebook_login/initialization.php';
    $domain = 'https://php-demo-mu.vercel.app/api/';
    session_start(); 
    $_SESSION = []; 
    
    // If it's desired to kill the session, also 
    // delete the session cookie. 
    // Note: This will destroy the session, and 
    // not just the session data! 
    if (ini_get("session.use_cookies")) { 
        $params = session_get_cookie_params(); 
        setcookie(session_name(), '', time() - 42000, 
            $params["path"], $params["domain"], 
            $params["secure"], $params["httponly"] 
        ); 
    } 
    
    // Finally, destroy the session. 
    session_destroy();

// if ($_GET['url'] != Null) {
//     header('location: '.$_GET['url']);
// } else {
//     header('location: /');
// }

?>