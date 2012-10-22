<?php
// GET route
$app->get('/', function () {
    $oUser = new User();
    $users = $oUser->getUsers();
    print_r($users);    
});

// POST route
$app->post('/post', function () {
    echo 'This is a POST route';
});

// PUT route
$app->put('/put', function () {
	echo 'This is a PUT route';
});

// DELETE route
$app->delete('/delete', function () {
    echo 'This is a DELETE route';
});