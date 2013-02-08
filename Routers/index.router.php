<?php

// GET index route
$app->get('/', function () use ($app) {
    $hello = "hello world!";
    $app->render('index.view.php', array('hello' => $hello));
});
