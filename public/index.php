<?php

require '../lib/Config.php';
require '../config.php';
require '../lib/Core.php';

require '../vendor/autoload.php';

// Setup custom Twig view
$twigView = new \Slim\Views\Twig();

$app = new \Slim\Slim(array(
    'debug' => true,
    'view' => $twigView,
    'templates.path' => '../templates/',
));

// Automatically load router files
$routers = glob('../Routers/*.router.php');
foreach ($routers as $router) {
    require $router;
}

$app->run();
