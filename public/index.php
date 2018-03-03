<?php

use StevenLiebregt\CrispySystem\CrispySystem;

// Error reporting
error_reporting(-1);
ini_set('error_reporting', '1');
ini_set('display_errors', '1');

// Setup
define('DEVELOPMENT', true);
define('ROOT', './../');

require ROOT . 'vendor/autoload.php';

// Create instance of CrispySystem
$crispySystem = new CrispySystem();

// Require routes
require ROOT . 'routes/routes.php';

// Run the application
$crispySystem->run();