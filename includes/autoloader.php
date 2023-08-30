<?php
spl_autoload_register('myAutoloader');

function myAutoloader($className) {
    $url = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
    $ext = ".php";

    if(str_contains($url, 'includes')) {
        $path = "../classes/";
    }
    else {
        $path = 'classes/';
    }

    $fullPath = $path . $className . $ext;

    require_once $fullPath;
}