<?php
    $path = str_replace('\\', '/', dirname(__FILE__));
    define('ROOT_URL', $path);
    
    $path = str_replace('\\', '/', dirname(__FILE__,2));
    define('PATH',$path);

    $path = str_replace('\\', '/', dirname(__FILE__,3));
    define('THREE_LEVELS', $path);