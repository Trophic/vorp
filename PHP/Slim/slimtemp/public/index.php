<?php
// All file paths relative to root
chdir(dirname(__DIR__));

require 'vendor/autoload.php';
session_start();

//read configuration file
use Noodlehaus\Config;
$conf = Config::load('app/bootstrap/settings.yaml');
$settings = $conf->get('settings', []);

// Instantiate Slim with intitial settings
$app = new \Slim\App(['settings'=>$settings]);

require 'app/bootstrap/dependencies.php';
require 'app/bootstrap/middleware.php';

// Register the routes
require 'app/src/routes.php';

$app->run();