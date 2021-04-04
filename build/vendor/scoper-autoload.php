<?php

// scoper-autoload.php @generated by PhpScoper

$loader = require_once __DIR__.'/autoload.php';

// Functions whitelisting. For more information see:
// https://github.com/humbug/php-scoper/blob/master/README.md#functions-whitelisting
if (!function_exists('ray')) {
    function ray() {
        return \RayGlobalScoped\ray(...func_get_args());
    }
}
if (!function_exists('rd')) {
    function rd() {
        return \RayGlobalScoped\rd(...func_get_args());
    }
}

return $loader;
