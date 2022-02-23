<?php

require_once 'vendor/autoload.php';

use FileCounter\Application;

$app = Application::main($argv);

var_dump($app);
