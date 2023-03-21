<?php

spl_autoload_register(function($className){
    $path = str_replace("CloudStorage\\", "", $className);
    $path = str_replace("\\", DIRECTORY_SEPARATOR, $path);
    $path = strtolower($path);
    $path = $path . ".php";
    include_once($path);
});