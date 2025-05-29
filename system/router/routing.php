<?php
    
    class Routing{
        private $currentRoute;
        private $route;
        public function __construct(){
            global $currentRoute;
            $this->currentRoute = $currentRoute;
            $this->route = explode( "/",$this->currentRoute);
        }
        public function run(){
            $path = realpath(dirname(__FILE__))."/../../app/controller/".$this->route[0].".php" ;
            if(!file_exists($path)){
                
                echo "404 - file not found";
                exit;
            }
            sizeof($this->route) == 1 ? $method = "index" : $method = $this->route[1];
            $class = "App\controller\\".$this -> route[0];
            $object = new $class();
            if(method_exists($object , $method)){
                $object -> {$method}();
            }else{
                echo "400 - method not exists";
            }
        }
    }
    $r = new Routing();
    $r->run();
