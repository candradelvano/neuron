<?php
    setcookie("last_login",date("Y-m-d H:i:s"),time()-3600);
    $cookie_name = "user";
    $cookie_value = "Alex Porter";
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); 