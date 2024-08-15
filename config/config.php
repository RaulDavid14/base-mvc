<?php
    $path = str_replace('\\', '/', dirname(__FILE__,2));
    define('TWO_LEVELS', $path);

    $path = str_replace('\\', '/', dirname(__FILE__,3));
    define('THREE_LEVELS', $path);