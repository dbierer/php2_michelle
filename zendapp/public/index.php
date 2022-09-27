<?php
//add the autoload in here

define('BASE_DIR', realpath(__DIR__ . '/..'));

/*
spl_autoload_register(function ($class) {
  require_once __DIR__
    . DIRECTORY_SEPARATOR
    . str_replace('\\', DIRECTORY_SEPARATOR, $class)
    . '.php';
});
*/

require BASE_DIR . '/src/ZendApp/Model/Autoload.php';
$autoLoader = new \ZendApp\Model\AutoLoad(BASE_DIR . '/src'); //put in index.php

use ZendApp\Model;
use ZendApp\Model\DataFeed;

$config = require BASE_DIR . '/config/config.php';

$test = new DataFeed($config);
$test->MPN='AAA-12345';
$test->UPC='08747386384753';
$test->balanceUnexisted=55555.55;

echo $test->MPN;
echo $test->UPC;
echo $test->balanceUnexisted;
