<?php 

$dir_name  = dirname($_SERVER['SCRIPT_NAME']);

$path = substr_replace(trim($_SERVER['REQUEST_URI'], '/'), '', 0, strlen($dir_name));

//echo __DIR__;
// echo file_exists(__DIR__ . "/app/views/buyer/selectDriver.php");
// die();

$routes = [
    'buyer/select-driver' => 'BuyerController@selectDriver',
    'buyer/summery' => 'BuyerController@selectDriver'
];

foreach($routes as $route => $controller_route) {
    if ($route == $path) {
        $split = explode("@", $controller_route);
        $name = $split[0];
        $method = $split[1];

        require_once __DIR__ . "/app/controller/" . $name . ".php";

        $cont = new $name();
        call_user_func([$cont, $method]);


    }
}

die();


