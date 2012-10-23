<?php

require '_lib/Slim/Slim.php';
require '_lib/class.Config.php';
require '_lib/class.Core.php';
require '_lib/class.AutoLoader.php';

//require 'Models/class.User.php';

\Slim\Slim::registerAutoloader();

$app = new \Slim\Slim();

require 'Controllers/user.controller.php';

$app->run();
