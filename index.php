<?php

require '_lib/Slim/Slim.php';
require '_lib/class.Config.php';
require '_lib/class.Core.php';
require '_lib/class.AutoLoader.php';

\Slim\Slim::registerAutoloader();

$app = new \Slim\Slim();

require 'Routers/user.controller.php';

$app->run();
