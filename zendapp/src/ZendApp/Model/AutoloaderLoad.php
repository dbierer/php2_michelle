<?php
spl_autoload_register(function ($class) {
  require_once __DIR__
    . DIRECTORY_SEPARATOR
    . str_replace('\\', DIRECTORY_SEPARATOR, $class)
    . '.php';
});


// use Test\Something\{Test,Whatever};
// $test = new Test();
// var_dump($test->getIterator([1,2,3,4,5]));
// $what = new Whatever();
// var_dump($what->whatever());