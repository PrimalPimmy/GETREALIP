<?php
function getUserIP() {
    if( array_key_exists('HTTP_X_FORWARDED_FOR', $_SERVER) && !empty($_SERVER['HTTP_X_FORWARDED_FOR']) ) {
        if (strpos($_SERVER['HTTP_X_FORWARDED_FOR'], ',')>0) {
            $addr = explode(",",$_SERVER['HTTP_X_FORWARDED_FOR']);
            echo trim($addr[0]);
        } else {
            echo $_SERVER['HTTP_X_FORWARDED_FOR'];
        }
    }
    else {
        echo $_SERVER['REMOTE_ADDR'];
    }
}
?>