<?php

// GET index route
$app->get('/', function () use ($app) {
    $hello = "hello world!";
    //echo $hello;
    $app->render('index.html', array('hello' => $hello));
});
