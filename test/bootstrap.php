<?php

$_SERVER['SERVER_NAME'] = 'plutonium.local';

// $_SERVER['DOCUMENT_ROOT'] = '/var/www';

$_SERVER['REQUEST_METHOD'] = 'GET';
$_SERVER['REQUEST_URI']    = '/';

session_start();

spl_autoload_register(function ($class) {
	$file = str_replace(['Plutonium', BS], ['', DS], $class) . '.php';
	$path = realpath(PU_PATH_LIB . '/' . ltrim($file, '\\'));
	if (is_file($path)) require_once $path;
});

define('DS', DIRECTORY_SEPARATOR);
define('PS', PATH_SEPARATOR);
define('LS', PHP_EOL);
define('BS', '\\');
define('FS', '/');

define('PU_PATH_ROOT', dirname(__DIR__));
define('PU_PATH_BASE', PU_PATH_ROOT);
define('PU_PATH_LIB',  realpath(PU_PATH_BASE . '/src'));
define('PU_PATH_FUNC', realpath(PU_PATH_LIB . '/Functions'));

require_once PU_PATH_FUNC . '/Strings.php';
require_once PU_PATH_FUNC . '/Arrays.php';
