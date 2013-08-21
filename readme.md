SlimMVC
=======

SlimMVC is the easiest and flexible way to create your PHP application using a MVC pattern.
SlimMVC use the PHP microframework [Slim Framework](http://www.slimframework.com/) and use the best practices collected in the slim community.

Getting Started
---------------
1. Get or download the project
2. Install it using Composer

Folder System
---------------
* lib/
    * Config.php (Class to store with config variables)
    * Core.php (Singleton PDO connection to the DB)   
* models/
* public/
* routers/
	* name.router.php (routes by functionalities)
* templates/

### lib

Here we have the core classes of the connection with the DB

### models

Add the model classes here.

We are using PDO for the Database
Example of class:

Stuff.php

	class Stuff {

		private $core;

		function __construct() {
			$this->core = Core::getInstance();			
		}
		
		// Get all stuff
		public function getSuff() {
			$r = array();		

			$sql = "SELECT * FROM stuff";
			$stmt = $this->core->dbh->prepare($sql);		

			if ($stmt->execute()) {
				$r = $stmt->fetchAll(PDO::FETCH_ASSOC);		   	
			} else {
				$r = 0;
			}		
			return $r;
		}
	}

### public

All the public files:
* Images, CSS and JS files
* index.php

### routers

All the files with the routes. Each file contents the routes of an specific functionality.
It is very important that the names of the files inside this folder follow this pattern: name.router.php

Example of router file:

stuff.router.php

	// Get stuff
	$app->get('/stuff', function () use ($app) {			
		//Code here
	});

	//Create user
	$app->post('/stuff', function () use ($app) {	
		//Code here
	});	

	// PUT route
	$app->put('/stuff', function () {
		echo 'This is a PUT route';
	});

	// DELETE route
	$app->delete('/stuff', function () {
	    echo 'This is a DELETE route';
	});

### templates

All the Twig templates.

How to Contribute
-----------------
### Pull Requests

1. Fork the SlimMVC repository
2. Create a new branch for each feature or improvement
3. Send a pull request from each feature branch to the develop branch