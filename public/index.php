<?php

declare(strict_types=1);

define('PROJECT_ROOT', realpath(__DIR__ . '/..') . '/');

require_once '../vendor/autoload.php';

error_reporting(E_ALL); ini_set('display_errors', 1);

require_once '../config/dependencies.php';

require '../config/routes.php';