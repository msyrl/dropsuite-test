<?php

require_once 'vendor/autoload.php';

use FileCounter\Application;

print Application::main(require_once 'config/target.php');
