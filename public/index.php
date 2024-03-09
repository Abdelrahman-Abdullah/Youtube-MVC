<?php
/**
 * Entry point of the application
 * Load the autoloader and routes
*/

require_once "../vendor/autoload.php";
require_once "../routes/web.php";
use core\Route;

Route::resolve();
