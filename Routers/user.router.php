<?php

// Get user
$app->get('/user', function () use ($app) {	
	
	$oLaboratory = new User ();
	$users = $oLaboratory->getUsers();
	$app->contentType('application/json');
	echo json_encode($users);
});

//Create user
$app->post('/user', function () use ($app) {	
	//var_dump($app->request()->post('data'));
	$user = json_decode($app->request()->post('data'), true);	
	$user['password'] = hash("sha1", $user['password']);	
	$oUser = new User ();
	echo $oUser->insertUser($user);
});

// LOGIN GET user by email and passwordS
$app->post('/login', function () use ($app) {
	//var_dump($app->request()->post('data'));
	$data = json_decode($app->request()->post('data'), true);
	
	//echo $data['password'];
	$email = $data['email'];
	$pass = hash("sha1", $data['password']);
	//echo "  despues: ".$pass. "   ";

	$oUser = new User();
	
	echo json_encode($oUser->getUserByLogin($email, $pass), true);
});

// PUT route
$app->put('/user', function () {
	echo 'This is a PUT route';
});

// DELETE route
$app->delete('/user', function () {
    echo 'This is a DELETE route';
});