<?php

//Configurações do Slim
$settings = array(
    'view' => new \Slim\Extras\Views\Twig(),
    'templates.path' => '../Views',
    'log.enable' => true,
    'log.level' => 4,
    'debug' => true,
    'mode' => 'development',
    'model' => (Object)array(
        "message" => "Hello World"
    )
);
 
return $settings;