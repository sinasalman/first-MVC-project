<?php

$url = $_SERVER["REQUEST_URI"];

$new_url = explode ("?", $url);
var_dump($new_url); 
$currentUrl = str_replace("/Course/","",$new_url[0]);
