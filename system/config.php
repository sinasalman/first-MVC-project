<?php

$url = $_SERVER["REQUEST_URI"];

$new_url = explode ("?", $url);
$currentRoute = str_replace("/Course/","",$new_url[0]);
