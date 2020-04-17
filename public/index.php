<?php

header('Content-Type:text/html; charset=UTF-8');
const ROOT = __DIR__ . '/../';
const PUBLIC_DIRECTORY = __DIR__ . '/';
require_once ROOT . 'vendor/autoload.php';
app\core\App::start();