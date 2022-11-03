<?php

session_start();
@session_destroy();
if ($_GET['url'] != Null) {
    // header('location: '.$_GET['url']);
} else {
    // header('location: /');
}
?>
