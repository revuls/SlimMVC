<?php

require 'lib/Slim/Slim.php';
require 'lib/class.Config.php';
require 'lib/class.Core.php';
require 'lib/class.AutoLoader.php';

//require 'Models/class.User.php';

\Slim\Slim::registerAutoloader();

$app = new \Slim\Slim();

require 'Routes/user.route.php';

$app->run();
