<?php
if (PHP_SAPI == 'cli-server') {
    // To help the built-in PHP dev server, check if the request was actually for
    // something which should probably be served as a static file
    $file = __DIR__ . $_SERVER['REQUEST_URI'];
    if (is_file($file)) {
        return false;
    }
}

require __DIR__ . '/../vendor/autoload.php';
// Load constant file
require __DIR__ . '/../app/config/consts.php';

// Instantiate the app
$settings = require __DIR__ . '/../app/config/settings.php';

$app = new \Slim\App($settings);

// Set up dependencies
require __DIR__ . '/../app/config/dependencies.php';
// Register middleware
require __DIR__ . '/../app/config/middleware.php';
// Register routes
require __DIR__ . '/../app/config/routes.php';

// Run!
$app->run();
