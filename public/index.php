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

require '../routers/index.router.php';
require '../routers/user.router.php';

$app->run();
