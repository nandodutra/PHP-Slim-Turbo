<?php

//Autoload
require "vendor/autoload.php";

define('ROOT', realpath(__DIR__));
define('DS', DIRECTORY_SEPARATOR);
define('PS', PATH_SEPARATOR);


//Configuração do ORM PHPActiveRecord
$dns = 'mysql://inova:mpll33@inova.server/teixeiradefreitas_saude2;charset=utf8';

\ActiveRecord\Config::initialize(function($cfg) use($dns) {
    $cfg->set_model_directory(ROOT . DS . 'Models/');
    $cfg->set_connections(
      ['development' => $dns]
    );
});

//Configuração de Rotas
$router = new \Nettuts\Router;
 
/*$routes = array(
    '/:id' => '',
    '/test/:title' => 'Main:test@get',
);*/

$routes = \Nettuts\Helper::getRoutes();
 
$router->addRoutes($routes);
 
$router->set404Handler("Main:notFound");
 
$router->run();