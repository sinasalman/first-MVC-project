<?php

function app_register_autoloader($class){
    include $class.".php";
}
spl_autoload_register("app_register_autoloader");